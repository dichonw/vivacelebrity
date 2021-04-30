<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penjualan Barang</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<?php
include 'koneksi.php';
?>
<?php        
 $katQuery = "SELECT * FROM tabel_penjualan p inner join tabel_user u on p.id_user = u.id_user inner join tabel_barang b on p.id_barang = b.id_barang ORDER BY p.id_penjualan DESC";
 $executeKat = mysqli_query($koneksi, $katQuery);

 $batas = 10;
    $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
    $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;  

    $previous = $halaman - 1;
    $next = $halaman + 1;
    
    $data = mysqli_query($koneksi,"SELECT * FROM tabel_penjualan p inner join tabel_user u on p.id_user = u.id_user inner join tabel_barang b on p.id_barang = b.id_barang ORDER BY p.id_penjualan DESC");
    $jumlah_data = mysqli_num_rows($data);
    $total_halaman = ceil($jumlah_data / $batas);

    $katQuery = "SELECT * FROM tabel_penjualan p inner join tabel_user u on p.id_user = u.id_user inner join tabel_barang b on p.id_barang = b.id_barang ORDER BY p.id_penjualan DESC limit $halaman_awal, $batas";
    $executeKat = mysqli_query($koneksi, $katQuery);
      
?>
<body id="page-top">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Penjualan Barang</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nota</th>
                                            <th>User</th>
                                            <th>Waktu</th>
                                            <th>Barang</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php     while ($data = mysqli_fetch_assoc($executeKat)) {?>
                                        <tr>
                                            <td><?php echo $data['id_penjualan'];?></td>
                                            <td><?php echo $data['id_nota'];?></td>
                                            <td><?php echo $data['nm_user'];?></td>
                                            <td><?php echo $data['tgl_penjualan'];?></td>
                                            <td><?php echo $data['nm_barang'];?></td>
                                            <td><?php echo $data['jumlah'];?></td>
                                            <td>Rp.<?php echo number_format($data['harga'], 2, ".", ",");?></td>
                                            <td>Rp.<?php echo number_format($data['total_penjualan'], 2, ".", ",");?></td>
                                            <td><?php echo $data['status_penjualan'];?></td>
                                            <td style="justify-content: space-evenly; display: flex; height: fit-content">
                                                <a href="?menu=hapus_penjualan&&id_penjualan=<?php echo $data['id_penjualan']; ?>" onclick = "return confirm('Apakah anda yakin?');" class="btn btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <nav>
                              <ul class="pagination justify-content-center">
                                <li class="page-item">
                                  <a class="page-link" <?php if($halaman > 1){ echo "href='?menu=penjualan&&halaman=$previous'"; } ?>>Previous</a>
                                </li>
                                <?php 
                                for($x=1;$x<=$total_halaman;$x++){
                                  ?> 
                                  <li class="page-item"><a class="page-link" href="?menu=penjualan&&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                  <?php
                                }
                                ?>              
                                <li class="page-item">
                                  <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?menu=penjualan&&halaman=$next'"; } ?>>Next</a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Vivacelebrity 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>