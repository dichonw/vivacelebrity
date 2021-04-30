<?php
include './inc/koneksi.php';

$id = $_GET['id_penjualan'];

mysqli_query($koneksi,"DELETE FROM tabel_penjualan WHERE id_penjualan = '$id'; ");

echo "<script type='text/javascript'>
			window.location.replace('?menu=cart')
	</script>";
?>