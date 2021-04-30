<?php
include "./inc/koneksi.php";

ini_set("display_errors", 0);
if(isset($_POST['kirim'])){
    $kode_nota = $_POST ['kode_nota'];
    $keterangan = $_POST ['keterangan'];
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
        mysqli_query($koneksi, "INSERT INTO tabel_bukti_pembayaran values 
        ('$kode_nota','','$keterangan')");
        var_dump($_POST['kirim']);
   ?><script language="JavaScript">
            document.location = '?menu=cart'
        </script>
        <?php
    } else if ($nama != '') {
        if ($nama !== "" && $ukuran > 0 && $error == 0) {
            if (in_array(strtolower($tipe), $tipe_gambar)) {
                unlink("images/$nama");
                move_uploaded_file($_FILES['gambar']['tmp_name'], './admin/images/bukti/' . $nama);
                mysqli_query($koneksi, "INSERT INTO tabel_bukti_pembayaran values ('$kode_nota','$nama','$keterangan')");
                mysqli_query($koneksi, "INSERT INTO tabel_metode_bayar values ('','$kode_nota','uploaded')");
                $hasil=mysqli_query($koneksi,$query);
        ?><script language="JavaScript">
                    
                    alert("Upload Bukti Pembayaran Sukses!");
                    document.location = '?menu=cart'
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