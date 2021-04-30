<?php
include './inc/koneksi.php';
@session_start();
@$idUser = $_SESSION['id_user'];
@$kodeLama = $_SESSION['kodeLama'];
$idNota =  'VC-'. rand(); 

$jualQuery = "SELECT * FROM tabel_penjualan Where id_user = '$idUser' AND status_penjualan = 'success'";
$dataJ = mysqli_query($koneksi, $jualQuery);

while ($penjualan = mysqli_fetch_array($dataJ)) {
	$id_barang = $penjualan['id_barang'];
	$jumlah = $penjualan['jumlah'];

	$query_ambil_stok = "SELECT stok FROM tabel_barang WHERE id_barang = '" . $id_barang . "'";
    $ambil_stok = mysqli_query($koneksi, $query_ambil_stok);
    $stok = mysqli_fetch_array($ambil_stok);
    $stok_lama = $stok['stok'];
    $stok_baru = $stok_lama - $jumlah;

    $query_update_stok = "UPDATE tabel_barang SET stok = '" . $stok_baru . "' WHERE id_barang = '" . $id_barang . "';";
    $update_stok = mysqli_query($koneksi, $query_update_stok);
}

$bayarQuery = "SELECT count(id_metode) as id FROM tabel_metode_bayar Where id_bukti_pembayaran = '$kodeLama' AND status = 'uploaded'";
$dataB = mysqli_query($koneksi, $bayarQuery);

while ($bayar = mysqli_fetch_array($dataB)) {
    $idMetode = $bayar['id'];

    if ($idMetode > 0) {
        mysqli_query($koneksi,"INSERT INTO tabel_nota_penjualan values ('$idNota','$kodeLama');");
    }else{
        mysqli_query($koneksi,"INSERT INTO tabel_nota_penjualan values ('$idNota','');");
    }
}

mysqli_query($koneksi,"UPDATE tabel_penjualan SET status_penjualan = 'finish', id_nota = '$idNota' WHERE id_user = '$idUser' AND status_penjualan = 'success'; ");

mysqli_query($koneksi,"UPDATE tabel_metode_bayar SET status = 'finish' WHERE id_bukti_pembayaran = '$kodeLama' AND status = 'uploaded'; ");

echo "<script type='text/javascript'>
            alert('Transaksi Sukses!');
			window.location.replace('?menu=product')
	</script>";
?>