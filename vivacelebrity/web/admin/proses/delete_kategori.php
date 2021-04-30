<?php
include 'master/koneksi.php';

$id = $_GET['id_kategori'];

mysqli_query($koneksi,"delete from tabel_kategori where id_kategori='$id'");

echo "<script type='text/javascript'>
			window.location.replace('?menu=kategori')
	</script>";
?>