<?php 
include 'master/koneksi.php';

$id_satuan = $_POST['id_satuan'];
$nm_satuan = $_POST['satuan'];

mysqli_query($koneksi,"update tabel_satuan set nm_satuan='$nm_satuan' where id_satuan='$id_satuan'");
 
echo "<script type='text/javascript'>
			window.location.replace('?menu=satuan')
	</script>";
 
?>