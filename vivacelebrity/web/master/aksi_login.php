<?php
    include '../inc/koneksi.php';

    session_start();
    $email = $_POST['email'];
    $password = md5("Padasd0890".md5($_POST['password']));
    $level = 'user';
    $submit = $_POST['button_login'];

    $sql = "SELECT * FROM `tabel_user` WHERE email = '$email'";
    if (isset($submit)) {
        $execute = mysqli_query($koneksi, $sql);
        if ($execute) {
            $userData = mysqli_fetch_array($execute);
            if ($userData['email'] == $email && $userData['password'] == $password && $userData['level'] == $level) {
                $_SESSION['id_user'] = $userData['id_user'];
                $_SESSION['nm_user'] = $userData['nm_user'];
                $_SESSION['alamat_user'] = $userData['alamat_user'];
                $_SESSION['hp'] = $userData['hp'];
                $_SESSION['email'] = $userData['email'];
                $_SESSION['password'] = $userData['password'];
                $_SESSION['level'] = $userData['level'];
                $_SESSION['status'] = $userData['status'];
                ?>
                <script>
                    alert("Login Succes!");
                    window.location.replace('../?menu=home');
                </script>
                <?php
            }else{
                echo '<script type="text/javascript">
                alert("email atau password salah");
                window.location.replace("../?menu=login");
                </script>';
            }
        }else{
           echo  mysqli_error($koneksi);
        }

    }
?>