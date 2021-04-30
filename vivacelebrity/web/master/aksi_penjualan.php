<?php
    include './inc/koneksi.php';
    @session_start();
    @$user = $_SESSION['id_user'];
    @$barang = $_POST['id_barang'];
    @$harga = $_POST['harga'];
    @$penjualan  = $_POST['id_penjualan'];
    @$jumlah = $_POST['jumlah'];
    @$submit = $_POST['beli'];
    @$total = $jumlah * $harga;

    $sql = "INSERT INTO `tabel_penjualan` (`id_penjualan`, `id_user`, `tgl_penjualan`, `id_barang`, `jumlah`, `harga`, `total_penjualan`, `status_penjualan`) 
    VALUES ('$penjualan', '$user', NOW(), '$barang', '$jumlah', '$harga', '$total', 'success')";

    if (isset($submit)) {
        
        if (mysqli_query($koneksi, $sql)) {
            echo "
            <script>
                alert('Berhasil ditambahkan!');
                window.location = '?menu=cart';
            </script>
            ";
        }else{
           echo  mysqli_error($koneksi);
        }

    }
?>