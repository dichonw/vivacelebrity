<?php
    include '../inc/koneksi.php';

    @$nama = $_POST['nama'];
    @$email = $_POST['email'];
    @$noHp  = $_POST['no_handphone'];
    @$password = md5("Padasd0890".md5($_POST['password']));
    @$alamat = $_POST['alamat'];
    @$submit = $_POST['button_register'];

    $sql = "INSERT INTO `tabel_user` (`id_user`, `nm_user`, `alamat_user`, `hp`, `email`, `password`, `level`, `status`, `log`) 
    VALUES (NULL, '$nama', '$alamat', '$noHp', '$email', '$password', 'user', 'active', NOW())";

    if (isset($submit)) {
        
        if (mysqli_query($koneksi, $sql)) {
            echo "
            <script>
                alert('Register Berhasil');
                window.location = '../?menu=login';
            </script>
            ";
        }else{
           echo  mysqli_error($koneksi);
        }

    }
?>