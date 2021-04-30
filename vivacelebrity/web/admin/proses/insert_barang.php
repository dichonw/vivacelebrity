<?php
include "master/koneksi.php";


$queryUrut = mysqli_query($koneksi, "SELECT max(id_barang) as kodeTerbesar FROM tabel_barang");
$data = mysqli_fetch_array($queryUrut);
$kodeBarang = $data['kodeTerbesar'];
$urutan = (int) substr($kodeBarang, 3, 3);
$urutan++;
$huruf = "B";
$kodeBar = $huruf . sprintf("%03s", $urutan);

ini_set("display_errors", 0);
if(isset($_POST['kirim'])){
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


    var_dump($_POST['gambar']);
?>
	<?php
    if ($nama == '') {
        mysqli_query($koneksi, "INSERT INTO tabel_barang values 
        ('$kodeBar','$nm_barang','','$id_satuan','$id_kategori','$deskripsi', '$harga','$diskon','$harga_diskon', '$stok')");
        var_dump($_POST['kirim']);
   ?><script language="JavaScript">
            document.location = '?menu=barang'
        </script>
        <?php
    } else if ($nama != '') {
        if ($nama !== "" && $ukuran > 0 && $error == 0) {
            if (in_array(strtolower($tipe), $tipe_gambar)) {
                unlink("images/$nama");
                move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/' . $nama);
                mysqli_query($koneksi, "INSERT INTO tabel_barang values ('$kodeBar','$nm_barang','$nama','$id_satuan','$id_kategori','$deskripsi', '$harga','$diskon','$harga_diskon','$stok')");
	$hasil=mysqli_query($koneksi,$query);
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

	// $query = "INSERT INTO tabel_barang values
	// ('$kodeBar','$nm_barang','','$id_satuan','$id_kategori','$deskripsi', '$harga','$diskon','$harga_diskon')";
	// $hasil=mysqli_query($koneksi,$query);
 //    echo "<script type='text/javascript'>
 //    window.location.replace('?menu=barang')
 //    </script>";
}
?>