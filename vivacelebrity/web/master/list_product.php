<style>
.mydiv {
    margin-top: 50px;
    margin-bottom: 50px
}

.padding-0 {
    padding-right: 5px;
    padding-left: 5px
}

.img-style {
    margin-left: -11px;
    box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    max-width: 104% !important
}

.m-t-20 {
    margin-top: 20px
}

.bbb_background {
    background-color: #E0E0E0 !important
}

.ribbon {
    width: 150px;
    height: 150px;
    overflow: hidden;
    position: absolute
}

.ribbon::before,
.ribbon::after {
    position: absolute;
    z-index: -1;
    content: '';
    display: block;
    border: 5px solid #222;
}

.ribbon span {
    position: absolute;
    display: block;
    width: 225px;
    padding: 8px 0;
    background-color: #FF4500;
    box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
    color: #111;
    font: 100 12px/1 'Lato', sans-serif;
    text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
    text-transform: uppercase;
    text-align: center;
}

.ribbon-top-right {
    top: -10px;
    right: -10px
}

.ribbon-top-right::before,
.ribbon-top-right::after {
    border-top-color: transparent;
    border-right-color: transparent
}

.ribbon-top-right::before {
    top: 0;
    left: 17px
}

.ribbon-top-right::after {
    bottom: 17px;
    right: 0
}

.ribbon-top-right span {
    left: -25px;
    top: 30px;
    transform: rotate(45deg)
}

div {
    display: block;
    position: relative;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.bbb_deals_featured {
    width: 100%
}

.bbb_deals {
    width: 100%;
    margin-right: 7%;
    padding-top: 80px;
    padding-left: 25px;
    padding-right: 25px;
    padding-bottom: 34px;
    box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    margin-top: 0px
}

.bbb_deals_title {
    position: absolute;
    top: 27px;
    left: 40px;
    font-size: 16px;
    font-weight: 500;
    color: #000000
}

.bbb_deals_slider_container {
    width: 100%
}

.bbb_deals_item {
    width: 100% !important
}

.bbb_deals_image {
    width: 100%
}

.bbb_deals_image img {
    width: 100%
}

.bbb_deals_content {
    margin-top: 33px
}

.bbb_deals_item_category a {
    font-size: 14px;
    font-weight: 400;
    color: rgba(0, 0, 0, 0.5)
}

.bbb_deals_item_price_a {
    font-size: 14px;
    font-weight: 400;
    color: rgba(0, 0, 0, 0.6)
}

.bbb_deals_item_name {
    font-size: 24px;
    font-weight: 400;
    color: #000000;	
}

.bbb_deals_item_price {
    font-size: 24px;
    font-weight: 500;
    color: #df3b3b
}

.available {
    margin-top: 19px
}

.available_title {
    font-size: 12px;
    color: rgba(0, 0, 0, 0.5);
    font-weight: 400
}

.available_title span {
    font-weight: 700
}

@media only screen and (max-width: 991px) {
    .bbb_deals {
        width: 100%;
        margin-right: 0px
    }
}

@media only screen and (max-width: 575px) {
    .bbb_deals {
        padding-left: 15px;
        padding-right: 15px
    }

    .bbb_deals_title {
        left: 15px;
        font-size: 16px
    }

    .bbb_deals_slider_nav_container {
        right: 5px
    }

    .bbb_deals_item_name,
    .bbb_deals_item_price {
        font-size: 20px
    }
}
</style>
<div class="container mydiv">
    <div class="row">
<?php 
        $batas = 16;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($koneksi,"SELECT b.id_barang, b.nm_barang, b.gmb_barang, s.nm_satuan, k.nm_kategori, b.deskripsi_barang, b.harga_jual, b.harga_diskon, b.harga_jual_diskon FROM tabel_barang b inner join tabel_satuan s on b.id_satuan = s.id_satuan inner join tabel_kategori k on b.id_kategori = k.id_kategori  WHERE b.stok != 0 ORDER BY b.id_barang ASC");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);

        $satQuery = "SELECT b.id_barang, b.nm_barang, b.gmb_barang, s.nm_satuan, k.nm_kategori, b.deskripsi_barang, b.harga_jual, b.harga_diskon, b.harga_jual_diskon FROM tabel_barang b inner join tabel_satuan s on b.id_satuan = s.id_satuan inner join tabel_kategori k on b.id_kategori = k.id_kategori WHERE b.stok != 0  ORDER BY b.id_barang ASC limit $halaman_awal, $batas";
        $executeSat = mysqli_query($koneksi, $satQuery);
        while ($barang=mysqli_fetch_array($executeSat)) {
        ?>        
        <div class="col-md-4">
            <!-- bbb_deals -->
            <div class="bbb_deals">
                <!--div class="ribbon ribbon-top-right"><span>OXIGENATED<br />ORGANIC WATER</span></div-->
                <div class="bbb_deals_title"><?=$barang['nm_barang']?>/Per&nbsp;<?=$barang['nm_satuan']?></div>
                <div class="bbb_deals_slider_container">
                    <div class=" bbb_deals_item">
                        <div class="bbb_deals_image"><img src="admin/images/<?php echo $barang['gmb_barang'];?>" alt=""></div>
                        <div class="bbb_deals_content">                            
                            <div class="bbb_deals_info_line d-flex flex-row">
                                 <?php
                                  if($barang['harga_diskon'] == 0){
                                  ?><div class="bbb_deals_item_name">Rp.<?php echo number_format($barang['harga_jual'], 2, ".", ",");?></div>
                                  <a class="bbb_deals_item_price ml-auto btn btn-danger" href="?menu=detail&&id_barang=<?php echo $barang['id_barang']; ?>">Detail</a>
                                  <?php
                                  } else {
                                  ?><small style="color:#a0a0a0!important;"><s>Rp.<?php echo number_format($barang['harga_jual'], 2, ".", ",");?></s></small>
                                  <h5 class="bbb_deals_item_name">Rp.<?php echo number_format($barang['harga_jual_diskon'], 2, ".", ",");?></h5>
                                    <a class="bbb_deals_item_price ml-auto btn btn-danger" href="?menu=detail&&id_barang=<?php echo $barang['id_barang']; ?>">Detail</a>
                                  <?php
                                  }
                                  ?>
                            </div>
                            <!--div class="available">
                                <div class="available_line d-flex flex-row justify-content-start">
                                    <div class="available_title">Available: <span>6</span></div>
                                    <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                </div>
                                <div class="available_bar"><span style="width:17%"></span></div>
                            </div-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>