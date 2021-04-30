<?php
include 'master/koneksi.php';

$id = $_GET['id_satuan'];

mysqli_query($koneksi,"delete from tabel_satuan where id_satuan='$id'");

echo "<script type='text/javascript'>
			window.location.replace('?menu=satuan')
	</script>";
?>