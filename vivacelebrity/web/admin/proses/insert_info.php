<?php
include "master/koneksi.php";

$queryUrut = mysqli_query($koneksi, "SELECT max(id_info) as kodeTerbesar FROM tabel_info");
$data = mysqli_fetch_array($queryUrut);
$kodeinfo = $data['kodeTerbesar'];
$urutan = (int) substr($kodeinfo, 3, 3);
$urutan++;
$huruf = "INFO";
$kodeinfo = $huruf . sprintf("%03s", $urutan);
$judul = $_POST['judul_info'];
$ket = $_POST['ket_info'];

ini_set("display_errors", 0);
if(isset($_POST['kirim'])){
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
        mysqli_query($koneksi, "INSERT INTO tabel_info values ('$kodeinfo','','','')");
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
                mysqli_query($koneksi, "INSERT INTO tabel_info values ('$kodeinfo','$nama','$judul','$ket')");
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