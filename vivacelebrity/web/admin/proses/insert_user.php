<?php
include "master/koneksi.php";

if(isset($_POST['kirim'])){
    $nm = $_POST ['nama'];
    $no_hp = $_POST ['no_hp'];
    $email = $_POST ['email'];
    $pass = md5("Padasd0890".md5($_POST ['password']));
    $alamat = $_POST ['alamat'];

    $query = "INSERT INTO tabel_user values(NULL,'$nm','$alamat','$no_hp','$email','$pass', 'user', 'active', NOW())";
    $hasil=mysqli_query($koneksi,$query);
    echo "<script type='text/javascript'>
    window.location.replace('?menu=list_user')
    </script>";
}
?>