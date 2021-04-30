<?php
include "master/koneksi.php";

ini_set("display_errors", 0);
if(isset($_POST['kirim'])){
    $id_slide 		= $_POST ['id_slide'];
	$judul 			= $_POST['judul_slide'];
	$ket 			= $_POST['ket_slide'];
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
        mysqli_query($koneksi, "UPDATE tabel_slide set gbr_slide = '' where id_slide='$id_slide'");
        var_dump($_POST['kirim']);
   ?><script language="JavaScript">
            document.location = '?menu=banner'
        </script>
        <?php
    } else if ($nama != '') {
        if ($nama !== "" && $ukuran > 0 && $error == 0) {
            if (in_array(strtolower($tipe), $tipe_gambar)) {
                unlink("images/banner/$nama");
                move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/banner/' . $nama);
                mysqli_query($koneksi, "UPDATE tabel_slide set gbr_slide = '$nama',judul_slide = '$judul',ket_slide = '$ket' where id_slide = '$id_slide'");
    $hasil=mysqli_query($koneksi,$query);
        ?><script language="JavaScript">
                    document.location = '?menu=banner'
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