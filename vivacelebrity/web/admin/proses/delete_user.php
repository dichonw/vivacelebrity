<?php
include 'master/koneksi.php';

$id = $_GET['id_user'];

mysqli_query($koneksi,"delete from tabel_user where id_user='$id'");

echo "<script type='text/javascript'>
			window.location.replace('?menu=list_user')
	</script>";
?>