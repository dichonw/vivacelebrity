<?php
include "master/koneksi.php";

$queryUrut = mysqli_query($koneksi, "SELECT max(id_satuan) as kodeTerbesar FROM tabel_satuan");
$data = mysqli_fetch_array($queryUrut);
$kodeBarang = $data['kodeTerbesar'];
$urutan = (int) substr($kodeBarang, 3, 3);
$urutan++;
$huruf = "S";
$kodeSat = $huruf . sprintf("%03s", $urutan);

if(isset($_POST['kirim'])){
    $nm_satuan = $_POST ['satuan'];

	$query = "INSERT INTO tabel_satuan values('$kodeSat','$nm_satuan')";
	$hasil=mysqli_query($koneksi,$query);
    echo "<script type='text/javascript'>
    window.location.replace('?menu=satuan')
    </script>";
}
?>