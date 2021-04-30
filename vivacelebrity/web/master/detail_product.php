<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>

<div class="container mt-4 bg-white" style="border:2px solid #DAA520">
    <?php
      @session_start();
      @$idUser = $_SESSION['id_user'];
      $id_barang = $_GET['id_barang'];
      $data = mysqli_query($koneksi,"SELECT b.id_barang, b.nm_barang, b.gmb_barang, s.nm_satuan, k.nm_kategori, b.deskripsi_barang, b.harga_jual, b.harga_diskon, b.harga_jual_diskon FROM tabel_barang b inner join tabel_satuan s on b.id_satuan = s.id_satuan inner join tabel_kategori k on b.id_kategori = k.id_kategori where b.id_barang = '$id_barang';");
      while($d = mysqli_fetch_array($data)){
    ?>
    <div class="row">
        <div class="col-lg-7">
            <div class="card" style="margin-top:5px; margin-bottom:25px;">
                <img src="admin/images/<?php echo $d['gmb_barang'];?>" class="card-img-top" alt="..." style="max-height:400px;">
            </div>
        </div>
            <div class="col-lg-5">
                <h3 class="text-uppercase" style="border-bottom:1px solid #F88532"><?=$d['nm_barang']?><p>/Per&nbsp;<?=$d['nm_satuan']?></p></h3>
                <p><?=$d['deskripsi_barang']?></p>
                <?php
                  if($d['harga_diskon'] == 0){
                  ?><h3 style="color:red;">Rp.<?php echo number_format($d['harga_jual'], 2, ".", ",");?></h3><?php
                  } else {
                  ?><h4 style="color:#a0a0a0!important;"><s>Rp.<?php echo number_format($d['harga_jual'], 2, ".", ",");?></s></h4>
                  <span class="btn btn-danger btn-lg" style="background-color:#DAA520">Rp.<?php echo number_format($d['harga_jual_diskon'], 2, ".", ",");?></span><?php
                  }
                  ?>
                <!-- <div class="input-group" style="margin-top:20px;"> -->
                <?php
                  if($idUser == ''){
                  ?><form action="?menu=login" method="POST">
                      <div class="form-group" style="margin-top:20px;">
                        <div class="input-group">
                          <div class="input-group-prepend">
                          <input type="hidden" name="id_barang" value="<?php echo $d['id_barang']; ?>">                    <input type="hidden" name="harga" value="<?php echo $d['harga_jual_diskon']; ?>">
                            <input type="hidden" name="id_penjualan" value="<?php echo 'VC-'.rand(); ?>">
                            <input type="hidden" name="harga" value="<?php echo $d['harga_jual_diskon']; ?>">
                            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Jumlah</div>
                          </div> 
                          <input type="number" class="form-control qty" name="jumlah" value="" aria-label="Input group example" aria-describedby="btnGroupAddon">
                          <a ><button class="btn" type="submit" name="beli" style="margin-left:3px; background-color:#DAA520; color:white; border-radius:5px;" id="btnGroupAddon">BUY</button></a>
                        </div>
                    </form><?php
                  } else {
                  ?><form action="?menu=proses_tambah_keranjang" method="POST"> 
                    <div class="form-group" style="margin-top:20px;">
                      <div class="input-group">
                        <div class="input-group-prepend">
                        <input type="hidden" name="id_barang" value="<?php echo $d['id_barang']; ?>">                    <input type="hidden" name="harga" value="<?php echo $d['harga_jual_diskon']; ?>">
                          <input type="hidden" name="id_penjualan" value="<?php echo 'VA-'.rand(); ?>">
                          <input type="hidden" name="harga" value="<?php echo $d['harga_jual_diskon']; ?>">
                          <div class="input-group-text"><abbr title="wajib diisi"></abbr>Jumlah</div>
                        </div>
                        <input type="number" class="form-control qty" name="jumlah" value="" aria-label="Input group example" aria-describedby="btnGroupAddon" required="required">
                        <a ><button class="btn" type="submit" name="beli" style="margin-left:3px; background-color:#DAA520; color:white; border-radius:5px;" id="btnGroupAddon">BUY</button></a>
                      </div>
                  </form><?php
                  }
                  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
</div>
<div class="container" style="margin-top:30px;">
<hr> 
<h5 class="btn btn-lg btn-light">Related Product&nbsp;<a href="?menu=product"><small class="text-danger" style="text-decoration: bold; cursor: pointer; color: #DAA520 !important; border-bottom:5px solid #DAA520"><b>View All ></b></small></a></h5>
      <div class="row" style="margin-top:10px;">
        <?php 
        $satQuery = "SELECT b.id_barang, b.nm_barang, b.gmb_barang, s.nm_satuan, k.nm_kategori, b.deskripsi_barang, b.harga_jual, b.harga_diskon, b.harga_jual_diskon FROM tabel_barang b inner join tabel_satuan s on b.id_satuan = s.id_satuan inner join tabel_kategori k on b.id_kategori = k.id_kategori ORDER BY b.id_barang DESC limit 4 ";
        $executeSat = mysqli_query($koneksi, $satQuery);
        while ($barang=mysqli_fetch_array($executeSat)) {
        ?>
        <div class="col-sm-3">
          <a href="?menu=detail&&id_barang=<?php echo $barang['id_barang']; ?>">
          <div class="card" style="margin-top:10px; border:2px solid #DAA520">
            <?php
            if($barang['harga_diskon'] == 0){
            ?><?php
            } else {
            ?> <span class="badge badge-danger" style="margin-left:5px; background-color:#DAA520">Diskon</span><?php
            }
            ?>
            <img src="admin/images/<?php echo $barang['gmb_barang'];?>" class="card-img-top" alt="..." style="max-height:200px;">
              </a>
                <div class="card-body">
                  <h5 class="card-title"><?=$barang['nm_barang']?><p>/Per&nbsp;<?=$barang['nm_satuan']?></p></h5>
                  <?php
                  if($barang['harga_diskon'] == 0){
                  ?><span class="btn btn-dark">Rp.<?php echo number_format($barang['harga_jual'], 2, ".", ",");?></span><?php
                  } else {
                  ?><h6 class="card-text" style="color:#a0a0a0!important;"><s>Rp.<?php echo number_format($barang['harga_jual'], 2, ".", ",");?></s></h6>
                  <span class="btn btn-danger btn-lg" style="background-color:#DAA520">Rp.<?php echo number_format($barang['harga_jual_diskon'], 2, ".", ",");?></span><?php
                  }
                  ?>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
        <!-- <div class="col-sm-3">
        <a href="?menu=detail">
            <div class="card" style="margin-top:10px;">
              <img src="img/Prod-Botol-330ml-removebg-previeww.png" class="card-img-top" alt="..." style="max-height:200px;">
              </a>
                <div class="card-body">
                  <h5 class="card-title">Botol Pet 330 ml<br><p>/Per Box</p></h5>
                  <h6 class="card-text">Rp. 42.000</h6>
                </div>
            </div>
        </div> -->
        <!-- <div class="col-sm-3">
        <a href="?menu=detail">
            <div class="card" style="margin-top:10px;">
              <img src="img/Prod-Botol-330ml-removebg-previeww.png" class="card-img-top" alt="..." style="max-height:200px;">
              </a>
                <div class="card-body">
                  <h5 class="card-title">Botol Pet 330 ml<br><p>/Per Box</p></h5>
                  <h6 class="card-text">Rp. 42.000</h6>
                </div>
            </div>
        </div> -->
        <!-- <div class="col-sm-3">
          <a href="?menu=detail">
            <div class="card" style="margin-top:10px;">
              <img src="img/Prod-Botol-330ml-removebg-previeww.png" class="card-img-top" alt="..." style="max-height:200px;">
              </a>
                <div class="card-body">
                  <h5 class="card-title">Botol Pet 330 ml<br><p>/Per Box</p></h5>
                  <h6 class="card-text">Rp. 42.000</h6>
                </div>
            </div>
        </div> -->
      </div>
    </div>
</div>