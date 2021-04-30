<?php
include 'master/koneksi.php';

$id = $_GET['id_nota'];

$buktiQuery = "SELECT id_bukti FROM tabel_nota_penjualan Where id_nota = '$id'";
$dataB = mysqli_query($koneksi, $buktiQuery);

while ($bukti = mysqli_fetch_array($dataB)) {
    $idBukti = $bukti['id_bukti'];

    	mysqli_query($koneksi,"delete from tabel_metode_bayar where id_bukti_pembayaran = '$idBukti'");
        mysqli_query($koneksi,"delete from tabel_bukti_pembayaran where id_bukti = '$idBukti'");
  
}

mysqli_query($koneksi,"delete from tabel_penjualan where id_nota = '$id'");

mysqli_query($koneksi,"delete from tabel_nota_penjualan where id_nota='$id'");

echo "<script type='text/javascript'>
			window.location.replace('?menu=nota_penjualan')
	</script>";
?>