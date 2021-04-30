<?php
include 'master/koneksi.php';

$id = $_GET['id_info'];

mysqli_query($koneksi,"delete from tabel_info where id_info='$id'");

echo "<script type='text/javascript'>
			window.location.replace('?menu=info')
	</script>";
?>