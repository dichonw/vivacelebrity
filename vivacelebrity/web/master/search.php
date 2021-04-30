<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>

<style>
/* Make the image fully responsive */
.carousel-inner img {
  width: 100%;
  height: 100%;
  max-height: 350px;
}
.card-img-top{
  cursor: pointer;
}
</style>
    <?php 
        if(isset($_POST['kirim'])){
            $cari = $_POST['search'];
            $satQuery = "SELECT b.id_barang, b.nm_barang, b.gmb_barang, s.nm_satuan, k.nm_kategori, b.deskripsi_barang, b.harga_jual, b.harga_diskon, b.harga_jual_diskon FROM tabel_barang b inner join tabel_satuan s on b.id_satuan = s.id_satuan inner join tabel_kategori k on b.id_kategori = k.id_kategori WHERE b.nm_barang LIKE '%".$cari."%' ORDER BY b.id_barang DESC";
            $executeSat = mysqli_query($koneksi, $satQuery);
        }
    ?>
  <div class="container" style="padding:30px;">
    <h5>Search : <?php echo $cari;?></br><small class="text">Showing Product</small></h5>
    <div class="row" style="margin-top:10px;">
        <?php 
        while ($barang=mysqli_fetch_array($executeSat)) {
        ?>
        <div class="col-sm-3">
          <a href="?menu=detail&&id_barang=<?php echo $barang['id_barang']; ?>">
          <div class="card" style="margin-top:10px;">
            <?php
            if($barang['harga_diskon'] == 0){
            ?><?php
            } else {
            ?> <span class="badge badge-danger" style="margin-left:5px;">Diskon</span><?php
            }
            ?>
            <img src="admin/images/<?php echo $barang['gmb_barang'];?>" class="card-img-top" alt="..." style="max-height:200px;">
              </a>
                <div class="card-body">
                  <h5 class="card-title"><?=$barang['nm_barang']?><p>/Per&nbsp;<?=$barang['nm_satuan']?></p></h5>
                  <?php
                  if($barang['harga_diskon'] == 0){
                  ?><h5 class="card-text" style="color:red;">Rp.<?php echo number_format($barang['harga_jual'], 2, ".", ",");?></h5><?php
                  } else {
                  ?><h6 class="card-text" style="color:#a0a0a0!important;"><s>Rp.<?php echo number_format($barang['harga_jual'], 2, ".", ",");?></s></h6>
                  <h5 class="card-text" style="color:red;">Rp.<?php echo number_format($barang['harga_jual_diskon'], 2, ".", ",");?></h5><?php
                  }
                  ?>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    