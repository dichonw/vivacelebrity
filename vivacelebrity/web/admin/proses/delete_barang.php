<?php
include 'master/koneksi.php';

$id = $_GET['id_barang'];

mysqli_query($koneksi,"delete from tabel_barang where id_barang='$id'");

echo "<script type='text/javascript'>
			window.location.replace('?menu=barang')
	</script>";
?>