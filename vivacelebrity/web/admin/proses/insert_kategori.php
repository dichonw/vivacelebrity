<?php
include "master/koneksi.php";

$queryUrut = mysqli_query($koneksi, "SELECT max(id_kategori) as kodeTerbesar FROM tabel_kategori");
$data = mysqli_fetch_array($queryUrut);
$kodeBarang = $data['kodeTerbesar'];
$urutan = (int) substr($kodeBarang, 3, 3);
$urutan++;
$huruf = "K";
$kodeKat = $huruf . sprintf("%03s", $urutan);

if(isset($_POST['kirim'])){
    $nm_kategori = $_POST ['kategori'];

	$query = "INSERT INTO tabel_kategori values('$kodeKat','$nm_kategori')";
	$hasil=mysqli_query($koneksi,$query);
    echo "<script type='text/javascript'>
    window.location.replace('?menu=kategori')
    </script>";
}
?>