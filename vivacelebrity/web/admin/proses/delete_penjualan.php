<?php
include 'master/koneksi.php';

$id = $_GET['id_penjualan'];

mysqli_query($koneksi,"delete from tabel_penjualan where id_penjualan='$id'");

echo "<script type='text/javascript'>
			window.location.replace('?menu=penjualan')
	</script>";
?>