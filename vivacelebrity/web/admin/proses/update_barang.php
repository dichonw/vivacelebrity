<?php
include('master/koneksi.php');
ini_set("display_errors", 0);
if (isset($_POST['kirim'])) {
    $id_barang = $_POST ['id_barang'];
    $nm_barang = $_POST ['barang'];
    $id_satuan = $_POST ['satuan'];
    $id_kategori = $_POST ['kategori'];
    $deskripsi = $_POST ['deskripsi'];
    $stok = $_POST ['stok'];
    $harga = $_POST ['harga'];
    $diskon = $_POST ['diskon'];
    $harga_diskon = floatval($harga) - floatval($diskon);
    $gambar         = $_POST['gambar'];
    $tipe_gambar    = array('image/jpeg', 'image/bmp', 'image/png', 'image/jpg');
    $nama           = $_FILES['gambar']['name'];
    $ukuran         = $_FILES['gambar']['size'];
    $tipe           = $_FILES['gambar']['type'];
    $error          = $_FILES['gambar']['erorr'];
?>
    <?php
    if ($nama == '') {
        mysqli_query($koneksi, "UPDATE tabel_barang SET nm_barang = '$nm_barang', id_satuan = '$id_satuan', id_kategori = '$id_kategori', deskripsi_barang = '$deskripsi', harga_jual = '$harga', harga_diskon = '$diskon', harga_jual_diskon = '$harga_diskon', stok = '$stok' WHERE id_barang ='$id_barang'");
        echo $nama;
    ?><script language="JavaScript">
            document.location = '?menu=barang'
        </script>
        <?php
    } elseif ($nama != '') {
        if ($nama !== "" && $ukuran > 0 && $error == 0) {
            if (in_array(strtolower($tipe), $tipe_gambar)) {
                unlink("images/$nama");
                move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/' . $nama);
                mysqli_query($koneksi, "UPDATE tabel_barang SET nm_barang = '$nm_barang', gmb_barang = '$nama', id_satuan = '$id_satuan', id_kategori = '$id_kategori', deskripsi_barang = '$deskripsi', harga_jual = '$harga', harga_diskon = '$diskon', harga_jual_diskon = '$harga_diskon', stok = '$stok' WHERE id_barang ='$id_barang'");
        ?><script language="JavaScript">
                    document.location = '?menu=barang'
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

