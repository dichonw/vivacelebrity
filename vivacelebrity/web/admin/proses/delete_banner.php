<?php
include 'master/koneksi.php';

$id = $_GET['id_slide'];

mysqli_query($koneksi,"delete from tabel_slide where id_slide='$id'");

echo "<script type='text/javascript'>
			window.location.replace('?menu=banner')
	</script>";
?>