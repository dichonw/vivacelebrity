<?php
include 'master/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                         <?php 
                            $satQuery = "SELECT COUNT(id_user) as user FROM tabel_user ";
                            $executeSat = mysqli_query($koneksi, $satQuery);
                            while ($user=mysqli_fetch_array($executeSat)) {
                           ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                User</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$user['user']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        <!-- Earnings (Monthly) Card Example -->
                        <?php 
                            $satQuery = "SELECT COUNT(p.id_penjualan) as penjualan FROM tabel_penjualan p inner join tabel_user u on p.id_user = u.id_user inner join tabel_barang b on p.id_barang = b.id_barang ";
                            $executeSat = mysqli_query($koneksi, $satQuery);
                            while ($penjualan=mysqli_fetch_array($executeSat)) {
                           ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Penjualan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$penjualan['penjualan']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-clone fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        <!-- Earnings (Monthly) Card Example -->
                         <?php 
                            $satQuery = "SELECT COUNT(id_barang) as barang FROM tabel_barang ";
                            $executeSat = mysqli_query($koneksi, $satQuery);
                            while ($barang=mysqli_fetch_array($executeSat)) {
                           ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Barang</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$barang['barang']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-archive fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        <!-- Earnings (Monthly) Card Example -->
                         <?php 
                            $satQuery = "SELECT COUNT(id_kategori) as kategori FROM tabel_kategori ";
                            $executeSat = mysqli_query($koneksi, $satQuery);
                            while ($kategori=mysqli_fetch_array($executeSat)) {
                           ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Kategori</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$kategori['kategori']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-sitemap fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        <!-- Earnings (Monthly) Card Example -->
                        <?php 
                            $satQuery = "SELECT COUNT(id_satuan) as satuan FROM tabel_satuan ";
                            $executeSat = mysqli_query($koneksi, $satQuery);
                            while ($satuan=mysqli_fetch_array($executeSat)) {
                           ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Satuan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$satuan['satuan']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        <!-- Pending Requests Card Example -->
                        <?php 
                            $satQuery = "SELECT COUNT(id_slide) as banner FROM tabel_slide ";
                            $executeSat = mysqli_query($koneksi, $satQuery);
                            while ($banner=mysqli_fetch_array($executeSat)) {
                           ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Banner</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$banner['banner']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-film fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
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