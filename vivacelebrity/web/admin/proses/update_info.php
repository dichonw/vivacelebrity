<?php
include "master/koneksi.php";

ini_set("display_errors", 0);
if(isset($_POST['kirim'])){
    $id_info 		= $_POST ['id_info'];
	$judul 			= $_POST['judul_info'];
	$ket 			= $_POST['ket_info'];
    $gambar         = $_POST['gambar'];
    $tipe_gambar    = array('image/jpeg', 'image/bmp', 'image/png', 'image/jpg');
    $nama           = $_FILES['gambar']['name'];
    $ukuran         = $_FILES['gambar']['size'];
    $tipe           = $_FILES['gambar']['type'];
    $error          = $_FILES['gambar']['erorr'];


    var_dump($_POST['gambar']);
?>
    <?php
    if ($nama == '') {
        mysqli_query($koneksi, "UPDATE tabel_info set gbr_info = '' where id_info='$id_info'");
        var_dump($_POST['kirim']);
   ?><script language="JavaScript">
            document.location = '?menu=info'
        </script>
        <?php
    } else if ($nama != '') {
        if ($nama !== "" && $ukuran > 0 && $error == 0) {
            if (in_array(strtolower($tipe), $tipe_gambar)) {
                unlink("images/info/$nama");
                move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/info/' . $nama);
                mysqli_query($koneksi, "UPDATE tabel_info set gbr_info = '$nama',judul_info = '$judul',ket_info = '$ket' where id_info = '$id_info'");
    $hasil=mysqli_query($koneksi,$query);
        ?><script language="JavaScript">
                    document.location = '?menu=info'
                </script>
    <?php
                } else {
                    echo "<script>alert('Maaf jangan memasukkan gambar selain JPG ,JPEG, BMP, dan PNG Max.Size 1Mb');window.history.go(-1);</script>";
                }
            } else {
                echo "<script>alert('Gambar Tidak Boleh Kosong ');window.history.go(-1);";
            }
        }
}
?>