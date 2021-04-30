<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<?php       
 require_once(dirname(__FILE__).'../../vendor/autoload.php');
 @session_start();
 if(!isset($_SESSION['nm_user'])){
   ?>
   <script>alert('Login Terlebih Dahulu!'); window.location = '?menu=login'</script>
   <?php
 }
 @$idUser = $_SESSION['id_user'];
 $katQuery = "SELECT * FROM tabel_penjualan t inner join tabel_barang b ON t.id_barang = b.id_barang inner join tabel_satuan s ON b.id_satuan = s.id_satuan Where t.id_user = $idUser AND t.status_penjualan = 'success'";
 $executeKat = mysqli_query($koneksi, $katQuery);
    Veritrans_Config::$serverKey = "Mid-server-isodwxz3rnBSLDqGIW2EBaOW";

    Veritrans_Config::$isProduction = true;
  
    Veritrans_Config::$is3ds = true;

    $queryUrut = mysqli_query($koneksi, "SELECT max(id_bukti) as kodeTerbesar FROM tabel_bukti_pembayaran");
    $data = mysqli_fetch_array($queryUrut);
    $notaJual = $data['kodeTerbesar'];
    $urutan = (int) substr($notaJual, 3, 3);
    $urutan++;
    $huruf = "VA-";
    $tgl = date('dmy');
    $kodeNot = $huruf . sprintf("%03s", $urutan);

    $query_ambil_nota = "SELECT id_bukti FROM tabel_bukti_pembayaran ORDER BY id_bukti DESC Limit 1";
    $ambil_nota = mysqli_query($koneksi, $query_ambil_nota);
    $notaLama = mysqli_fetch_array($ambil_nota);
    $kodeLama = $notaLama['id_bukti'] ?? null;
    $_SESSION['kodeLama'] = $kodeLama;
 ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 bg-light">
         <a href="?menu=product" class="btn" style="margin:3px; background-color:#DAA520; color:white;"><i class="fas fa-shopping-basket"></i>&nbsp;Buy More</a>
         <a href="#" data-toggle="modal" data-target="#payModal" class="btn"><button type="button" class="btn" style="background-color:#DAA520; color:white;" onclick="enableButton2()"><i class="fas fa-money-bill">&nbsp;Checkout</i></button></a>
         <button type="button" id="button2" class="btn" onclick = "lanjutBayar()" style="background-color:#DAA520; color:white; float: right;"><i class="fas fa-check">&nbsp;Selesai</i></button>
            <div class="table-responsive">
                <table class="table" style="font-size:11px">
                    <thead>
                        <tr>
                            <!--td>Kode</td-->
                            <td>Barang</td>
                            <td>Harga</td>
                            <td>Jumlah</td>
                            <td>Sub Total</td>
                            <td>Hapus</td>
                        </tr>
                    </thead>

                    <tbody>
                      <?php 
                      $item_details = array();
                      if($executeKat->num_rows === 0){
                        ?>
                          <script>
                            alert("Data Kosong ! Silahkan Isi Data ! ");
                            window.location = "?menu=product";
                          </script>
                        <?php
                      }else{
                        while ($data = mysqli_fetch_assoc($executeKat)) {?>
                          <tr>
                            <td><?php echo $data['nm_barang'].'&nbsp;/&nbsp;Per&nbsp;'.$data['nm_satuan'];;?></td>
                            <td>Rp.<?php echo number_format($data['harga_jual_diskon'], 2, ".", ",");?></td>
                            <td><?php echo $data['jumlah'];?></td>
                            <td>Rp.<?php echo number_format($data['total_penjualan'], 2, ".", ",");?></td>
                            <td>
                                <a href="?menu=hapus_barang&&id_penjualan=<?php echo $data['id_penjualan']; ?>" class="btn btn-sm" style="background-color:#DAA520; color:white;"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <?php
                          $item_details[] = array (
                                'id' => $data['id_barang'],
                                'price' => $data['harga_jual_diskon'],
                                'quantity' => $data['jumlah'],
                                'name' => $data['nm_barang']
                              );
                        }
                      }
                              ?>
                              <?php        
                              $katQuery = "SELECT *, SUM(t.jumlah) as totJumlah, SUM(t.total_penjualan) as totPenjualan FROM tabel_penjualan t inner join tabel_barang b ON t.id_barang = b.id_barang inner join tabel_satuan s ON b.id_satuan = s.id_satuan WHERE t.id_user = $idUser AND t.status_penjualan = 'success'";
                              $executeKat = mysqli_query($koneksi, $katQuery);
                              while ($data = mysqli_fetch_assoc($executeKat)) {
                              ?>
                              <tr>
                                  <td></td>
                                  <td>Total Barang</td>
                                  <td><?php echo $data['totJumlah'];?></td>
                                  <td>Total Harga</td>
                                  <td>Rp.<?php echo number_format($data['totPenjualan'], 2, ".", ",");?></td>
                              </tr>
                              <tr>
                                  <td>Total Bayar</td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td>Rp.<?php echo number_format($data['totPenjualan'], 2, ".", ",");?></td>
                              </tr>
                              <?php
                                      
                                      $transaction_details = array(
                                          'order_id' => rand(),
                                          'gross_amount' => $data['totPenjualan'], 
                                        );
                                      }
                                  ?>
                  </tbody>
              </table>
        </div>
    </div>
	<span class="alert alert-danger">
     <b>Note : Minimum Pembelian Rp 100.000<br />
     Pembelian botol gallon untuk awal Rp 55.000 Air + Gallon</b>
    </span>
    
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="payModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Checkout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Rincian Belanja</p>
        <div class="table-responsive">
                <table class="table" style="font-size:11px">
                    <thead>
                        <tr>
                            <!--td>Kode</td-->
                            <td>Barang</td>
                            <td>Harga</td>
                            <td>Jumlah</td>
                            <td>Sub Total</td>
                        </tr>
                    </thead>

                    <tbody>
                      <?php 
                      $katQuery = "SELECT * FROM tabel_penjualan t inner join tabel_barang b ON t.id_barang = b.id_barang inner join tabel_satuan s ON b.id_satuan = s.id_satuan Where t.id_user = $idUser AND t.status_penjualan = 'success'";
                      $executeKat = mysqli_query($koneksi, $katQuery);
                      if($executeKat->num_rows === 0){
                        ?>
                          <script>
                            alert("Data Kosong ! Silahkan Isi Data ! ");
                            window.location = "?menu=product";
                          </script>
                        <?php
                      }else{
                        while ($data = mysqli_fetch_assoc($executeKat)) {?>
                          <tr>
                            <td><?php echo $data['nm_barang'].'&nbsp;/&nbsp;Per&nbsp;'.$data['nm_satuan'];;?></td>
                            <td>Rp.<?php echo number_format($data['harga_jual_diskon'], 2, ".", ",");?></td>
                            <td><?php echo $data['jumlah'];?></td>
                            <td>Rp.<?php echo number_format($data['total_penjualan'], 2, ".", ",");?></td>
                          </tr>
                          <?php
                        }
                      }
                              ?>
                              <?php        
                              $katQuery = "SELECT *, SUM(t.jumlah) as totJumlah, SUM(t.total_penjualan) as totPenjualan FROM tabel_penjualan t inner join tabel_barang b ON t.id_barang = b.id_barang inner join tabel_satuan s ON b.id_satuan = s.id_satuan WHERE t.id_user = $idUser AND t.status_penjualan = 'success'";
                              $executeKat = mysqli_query($koneksi, $katQuery);
                              while ($data = mysqli_fetch_assoc($executeKat)) {
                              ?>
                              <tr>
                                  <td></td>
                                  <td>Total Barang</td>
                                  <td><?php echo $data['totJumlah'];?></td>
                                  <td>Total Harga</td>
                              </tr>
                              <tr>
                                  <td>Total Bayar</td>
                                  <td></td>
                                  <td></td>
                                  <td>Rp.<?php echo number_format($data['totPenjualan'], 2, ".", ",");?></td>
                              </tr>
                              <?php
                                      }
                                  ?>
                  </tbody>
              </table>
        </div><hr>
        <p>Pilih Metode Pembayaran : </p>
         <div class="row">
          <div class="col-6">
            <a href="#" id="pay-button" class="btn" style="margin:3px; width: 100%; background-color:#DAA520; color:white;" data-dismiss="modal"><i class="fas fa-money-bill" onclick="enableButton2()"></i>&nbsp;&nbsp;Virtual Account</a>
          </div>
          <div class="col-6">
            <a href="#" data-toggle="modal" data-target="#transferModal" class="btn" style="margin:3px; width: 100%; background-color:#DAA520; color:white;" data-dismiss="modal"><i class="fas fa-credit-card"></i>&nbsp;&nbsp;Transfer Bank/ATM</a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
       
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="transferModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tranfer Bank</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Lakukan pembayaran Melalui ATM, E-Banking, M-Banking, dll. Senilai :</p>
        <?php        
          $katQuery = "SELECT *, SUM(t.jumlah) as totJumlah, SUM(t.total_penjualan) as totPenjualan FROM tabel_penjualan t inner join tabel_barang b ON t.id_barang = b.id_barang inner join tabel_satuan s ON b.id_satuan = s.id_satuan WHERE t.id_user = $idUser AND t.status_penjualan = 'success'";
          $executeKat = mysqli_query($koneksi, $katQuery);
          while ($data = mysqli_fetch_assoc($executeKat)) {
          ?>
            <h4 style="margin-bottom: 20px;">Rp.<?php echo number_format($data['totPenjualan'], 2, ".", ",");?></h4><hr>
          <?php
                  }
              ?>
        <h6>Kepada : </h6>
        <div class="row">
          <div class="col-8">
            <form method="POST" action="">
              <?php        
                $bankQuery = "SELECT * FROM tabel_info_pembayaran";
                $executeBank = mysqli_query($koneksi, $bankQuery);
                while ($data = mysqli_fetch_assoc($executeBank)) {
                ?>
              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><abbr title="wajib diisi"></abbr>No.Rekening</div>
                    </div>
                    <input type="text" name="kategori" class="form-control" value="<?php echo $data['no_rek'];?>" placeholder="No. Rekening" required="required" disabled="disabled" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><abbr title="wajib diisi"></abbr>Atas Nama</div>
                    </div>
                    <input type="text" name="kategori" class="form-control" value="<?php echo $data['atas_nama'];?>" placeholder="Atas Nama" required="required" disabled="disabled"  />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><abbr title="wajib diisi"></abbr>Nama Bank</div>
                    </div>
                    <input type="text" name="kategori" class="form-control" value="" placeholder="<?php echo strtoupper($data['nama_bank']);?>" required="required" disabled="disabled" />
                  </div>
                </div>

              </form>
          </div>
          <div class="col-4">
            <img src="admin/images/bank/<?php echo $data['nama_bank'] . '.png';?>" style="width: 100%; max-height: 190px;">
          </div>
        </div><hr>
        <?php
                  }
              ?>   
        <h6>Upload Bukti Pembayaran : </h6>  
        <div class="row">
          <div class="col-12">
            <form method="POST" action="?menu=upload_bukti" style="margin-bottom: 50px;" enctype="multipart/form-data">
              <input type="hidden" name="kode_nota" value="<?php echo $kodeNot;?>">
                <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-prepend">
                        <input type="file" name="gambar" class="form-control" required="required" />
                    </div>
                  </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><abbr title="wajib diisi"></abbr>Keterangan</div>
                  </div>
                  <input type="text" name="keterangan" class="form-control" value="" placeholder="Keterangan" />
                </div>
              </div>
                <input type="submit" class="btn" style="margin:3px; background-color:#DAA520; color:white;" name="kirim" value="Upload">
            </form>
          </div>
        </div>
      <div class="modal-footer">
       
        
      </div>
    </div>
    </div>
  </div>
</div>

<?php
    $billing_address = array(
      'first_name'    => $_SESSION['nm_user'],
      'address'       => $_SESSION['alamat_user'],
      'phone'         => $_SESSION['hp'],
    );
  
    $shipping_address = array(
      'first_name'    => $_SESSION['nm_user'],
      'address'       => $_SESSION['alamat_user'],
      'phone'         => $_SESSION['hp'],
    );
  
    $customer_details = array(
      'first_name'    => $_SESSION['nm_user'],
      'address'       => $_SESSION['alamat_user'],
      'phone'         => $_SESSION['hp'],
      'email'         => $_SESSION['email'],
      'billing_address'  => $billing_address,
      'shipping_address' => $shipping_address
    );
  
    $enable_payments = array("credit_card",
    "gopay",
    "permata_va",
    "bca_va",
    "bni_va",
    "echannel",
    "other_va",
    "danamon_online",
    "mandiri_clickpay",
    "cimb_clicks",
    "bca_klikbca",
    "bca_klikpay",
    "bri_epay",
    "xl_tunai",
    "indosat_dompetku",
    "kioson",
    "Indomaret",
    "alfamart",
    "akulaku");
  
    $transaction = array(
      'enabled_payments' => $enable_payments,
      'transaction_details' => $transaction_details,
      'customer_details' => $customer_details,
      'item_details' => $item_details,
    );
  
    $snapToken = Veritrans_Snap::getSnapToken($transaction);

?>
<script src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-MmWvjVlkJny2OVMh"></script>
    <script type="text/javascript">
      document.getElementById('pay-button').onclick = function(){
        snap.pay('<?=$snapToken?>', {
          onSuccess: function(result){
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          onPending: function(result){
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          onError: function(result){
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          }
        });
      };
    </script>

   <script>
        function enableButton2() {
            document.getElementById("button2").disabled = false;
        }
    </script>

    <script>
        function lanjutBayar() {
            var yakin = confirm("Apakah anda sudah menyelesaikan proses pembayaran?");

        if (yakin) {
            window.location = "?menu=bayar";
        } else {
            
        }
        }
    </script>

    

  

     
