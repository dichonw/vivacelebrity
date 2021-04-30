<?php 
include 'master/koneksi.php';

$id_info_pembayaran = $_POST['id_info_pembayaran'];
$bank = $_POST['bank'];
$no_rek = $_POST['no_rek'];
$atas_nama = $_POST['atas_nama'];

mysqli_query($koneksi,"update tabel_info_pembayaran set no_rek = '$no_rek', atas_nama = '$atas_nama', nama_bank = '$bank'  where id_info_pembayaran = '$id_info_pembayaran'");
 
echo "<script type='text/javascript'>
            window.location.replace('?menu=data_pembayaran')
    </script>";
 
?>