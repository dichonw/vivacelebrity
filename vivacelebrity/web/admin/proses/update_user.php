<?php 
include 'master/koneksi.php';

$id_user = $_POST['id_user'];
$nm = $_POST['nama'];
$hp = $_POST['no_hp'];
$email = $_POST['email'];
$pass = md5("Padasd0890".md5($_POST ['password']));
$alamat = $_POST['alamat'];
$status = $_POST['status'];

mysqli_query($koneksi,"UPDATE tabel_user SET nm_user = '$nm', alamat_user = '$alamat', hp = '$hp', email = '$email', password = '$pass', status = '$status' WHERE id_user = '$id_user'");
 
echo "<script type='text/javascript'>
			window.location.replace('?menu=list_user')
	</script>";
 
?>