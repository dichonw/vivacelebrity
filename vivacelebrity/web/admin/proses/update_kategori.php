<?php 
include 'master/koneksi.php';

$id_kategori = $_POST['id_kategori'];
$nm_kategori = $_POST['kategori'];

mysqli_query($koneksi,"update tabel_kategori set nm_kategori='$nm_kategori' where id_kategori='$id_kategori'");
 
echo "<script type='text/javascript'>
			window.location.replace('?menu=kategori')
	</script>";
 
?>