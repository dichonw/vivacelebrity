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
#myCarousel .carousel-item .mask {
    position: absolute;
    top: 20px;
	left:0;
	height:100%;
    width: 100%;
    background-attachment: fixed;
}
#myCarousel h4{
	font-size: 30px;
	margin-bottom: 15px;
	color: #FF4500;
	line-height: 100%;
	letter-spacing: 0.5px;
	font-weight: 600;
}
#myCarousel p{
	font-size:12px;
	margin-bottom:15px;
	color:#111;
}
#myCarousel .carousel-item a{background:#F47735; font-size:14px; color:#FFF; padding:13px 32px; display:inline-block; }
#myCarousel .carousel-item a:hover{background:#394fa2; text-decoration:none;  }

#myCarousel .carousel-item h4{-webkit-animation-name:fadeInLeft; animation-name:fadeInLeft;} 
#myCarousel .carousel-item p{-webkit-animation-name:slideInRight; animation-name:slideInRight;} 
#myCarousel .carousel-item a{-webkit-animation-name:fadeInUp; animation-name:fadeInUp;}
#myCarousel .carousel-item .mask img{-webkit-animation-name:slideInRight; animation-name:slideInRight; display:block; height:auto; max-width:100%;}
#myCarousel h4, #myCarousel p, #myCarousel a, #myCarousel .carousel-item .mask img{-webkit-animation-duration: 1s;
    animation-duration: 1.2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
#myCarousel .container {max-width: 1430px;box-shadow: 0 8px 6px -6px black;  }
#myCarousel .carousel-item{height:100%; min-height:500px; }
#myCarousel{position:relative; z-index:1; background: none }

.carousel-control-next, .carousel-control-prev{height:40px; width:40px; margin:15% 3%; padding:50px; transform:translateY(-50%); color: #f47735; }


.carousel-item {
    position: relative;
    display: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    transition: -webkit-transform .6s ease;
    transition: transform .6s ease;
    transition: transform .6s ease,-webkit-transform .6s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px;
}
.carousel-fade .carousel-item {
	opacity: 0;
	-webkit-transition-duration: .6s;
	transition-duration: .6s;
	-webkit-transition-property: opacity;
	transition-property: opacity
}
.carousel-fade .carousel-item-next.carousel-item-left, .carousel-fade .carousel-item-prev.carousel-item-right, .carousel-fade .carousel-item.active {
	opacity: 1
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-right.active {
	opacity: 0
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
	-webkit-transform: translateX(0);
	-ms-transform: translateX(0);
	transform: translateX(0)
}
@supports (transform-style:preserve-3d) {
	.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
	-webkit-transform:translate3d(0, 0, 0);
	transform:translate3d(0, 0, 0)
	}
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}


 
@-webkit-keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
}

@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

@-webkit-keyframes slideInRight {
  from {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slideInRight {
  from {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.slideInRight {
  -webkit-animation-name: slideInRight;
  animation-name: slideInRight;
}
/*===========================PRODUCT=====================*/
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
    color: #FF4500;
	border:1px solid #FF4500;
	padding:15px;
		
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
	font-size: 24px
    }
}
</style>
<div class="container">	
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
   <?php 
          error_reporting(0);
          $satQuery = "SELECT * FROM tabel_slide ORDER BY RAND() limit 1";
          $executeSat = mysqli_query($koneksi, $satQuery);
          while ($banner=mysqli_fetch_array($executeSat)) {
        ?> 
    <div class="carousel-item active">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 col-5">
              <h4><?php echo $banner['judul_slide'];?></h4>
              <p><?php echo $banner['ket_slide'];?></p>
              <!--a href="#">BUY NOW</a--> </div>
            <div class="col-md-6 col-7"><img src="admin/images/banner/<?php echo $banner['gbr_slide'];?>"></div>
          </div>
        </div>
      </div>
    </div><?php } ?>
    
    
<?php 
          $satQuery = "SELECT * FROM tabel_slide ORDER BY RAND()";
          $executeSat = mysqli_query($koneksi, $satQuery);
          while ($banner1=mysqli_fetch_array($executeSat)) {
        ?>    
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 col-5">
              <h4><?php echo $banner1['judul_slide'];?></h4>
              <p><?php echo $banner1['ket_slide'];?></p>
              <!--a href="#">BUY NOW</a--> </div>
            <div class="col-md-6 col-7"><img src="admin/images/banner/<?php echo $banner1['gbr_slide'];?>"></div>
          </div>
        </div>
      </div>
    </div><?php } ?>
    
    
    
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> 
  <span class="fas fa-chevron-left fa-4x" aria-hidden="true"></span> 
  <span class="sr-only">Previous</span> </a> 
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> 
  <span class="fas fa-chevron-right fa-4x" aria-hidden="true"></span> 
  <span class="sr-only">Next</span> </a>
</div>
<!--slide end-->  
</div>    
  
  
  
  
 <!--div class="container">
         <h5 class="btn btn-lg btn-light">Hots Picks&nbsp;<a href="?menu=product"><small class="text-danger" style="text-decoration: bold; cursor: pointer; color: #DE640D !important; border-bottom:5px solid #DE640D"><b>View All ></b></small></a></h5>
        <div class="row">
            <div class="col-md-12">
                <div id="news-slider" class="owl-carousel">
<?php $satQuery = "SELECT b.id_barang, b.nm_barang, b.gmb_barang, s.nm_satuan, k.nm_kategori, b.deskripsi_barang, b.harga_jual, b.harga_diskon, b.harga_jual_diskon FROM tabel_barang b inner join tabel_satuan s on b.id_satuan = s.id_satuan inner join tabel_kategori k on b.id_kategori = k.id_kategori ORDER BY b.id_barang ASC ";
        $executeSat = mysqli_query($koneksi, $satQuery);
        while ($barang=mysqli_fetch_array($executeSat)) {
        ?>                    
                    <div class="post-slide">
                        <!--div class="post-img" style="border:1px dotted #FF4500;background-image:url(img/bg-produk.png); background-repeat:no-repeat;">
                        <div class="post-img" style="border:1px dotted #FF4500;">
                            <a href="?menu=detail&&id_barang=<?php echo $barang['id_barang']; ?>">
                                <img src="admin/images/<?php echo $barang['gmb_barang'];?>" alt="">
                                <div class="post-date">
                                    <span class="date">BELI</span>
                                </div>
                            </a>
                        </div>
                        <div class="post-review">
                            <h3 class="post-title"><a href="#"><?=$barang['nm_barang']?><p>/Per&nbsp;<?=$barang['nm_satuan']?></a></h3>
                            <ul class="post-bar">
                                <li><i class="fa fa-user"></i><a href="#">admin</a></li>
                                <li><i class="fa fa-comment"></i><a href="#">5</a></li>
                            </ul>
                            <p class="post-description"></p>
                        </div>
                    </div>
<?php } ?>     
                    
                </div>
            </div>
        </div>
    </div-->
  
  
  
  
  
  
  <div class="container" style="padding:30px;">
    <h5 class="btn btn-lg btn-light">Hots Picks&nbsp;<a href="?menu=product"><small class="text-danger" style="text-decoration: bold; cursor: pointer; color: #FF4500 !important; border-bottom:5px solid #FF4500"><b>View All ></b></small></a></h5>
      <div class="row" style="margin-top:10px;">
        <?php 
        $satQuery = "SELECT b.id_barang, b.nm_barang, b.gmb_barang, s.nm_satuan, k.nm_kategori, b.deskripsi_barang, b.harga_jual, b.harga_diskon, b.harga_jual_diskon FROM tabel_barang b inner join tabel_satuan s on b.id_satuan = s.id_satuan inner join tabel_kategori k on b.id_kategori = k.id_kategori WHERE b.stok != 0 ORDER BY b.id_barang ASC ";
        $executeSat = mysqli_query($koneksi, $satQuery);
        while ($barang=mysqli_fetch_array($executeSat)) {
        ?>
        
        <div class="col-md-4">
            <!-- bbb_deals -->
            <div class="bbb_deals">
            <a href="?menu=product">
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
                                  <!--a class="bbb_deals_item_price ml-auto btn btn-danger" href="?menu=detail&&id_barang=<?php echo $barang['id_barang']; ?>">Detail</a-->
                                  <?php
                                  } else {
                                  ?><small style="color:#a0a0a0!important;"><s>Rp.<?php echo number_format($barang['harga_jual'], 2, ".", ",");?></s></small>
                                  <h5 class="bbb_deals_item_name">Rp.<?php echo number_format($barang['harga_jual_diskon'], 2, ".", ",");?></h5>
                                  <!--a class="bbb_deals_item_price ml-auto btn btn-danger" href="?menu=detail&&id_barang=<?php echo $barang['id_barang']; ?>">Detail</a-->
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
            </div></a>
        </div>
        <?php  } ?>
      </div>
    </div>
	<div class="text-center" style="background-image:url(img/bg-sosmed.png); background-position:center; background-repeat:no-repeat; margin-top:25px; margin-bottom:25px">
           	<h5 style="padding-top:50px;padding-bottom:20px">Video Keunggulan<a href="?menu=product"><small class="text-danger" style="text-decoration: bold; cursor: pointer; color: #FF4500 !important; border-bottom:5px solid #FF4500"></a></h5>
           <iframe width="80%" height="425" src="https://www.youtube.com/embed/TM4v6PlnEfQ?start=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <br /><br /> <br /> <br />  
    </div>
    
    <!-- <nav class="navbar navbar-expand-lg navbar-light" style="height: 300px; background:#FF4500; margin-top:10px;"> -->
    <div class="media-social">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-8">
              <h2 class="card-text" style="color:#111;"><b>#vivacelebrity</b></h2>
              <h5 class="card-text" style="color:#111">If you love our products, review us on Instagram with hashtag #vivacelebrity</h5>
              <h5 class="card-text" style="color:#111">Folow Us on Social:</h5>
              <div class="social-icons" style="margin-top:15px">
                    <a href="" class="btn btn-light btn-circle btn-md" target="_blank">
                        <i class="fab fa-facebook-square fa-3x" style="color:#111;"></i></a>
                    <a href="https://www.instagram.com/vivacelebrity/" class="btn btn-light btn-circle btn-md" target="_blank">
                        <i class="fab fa-instagram fa-3x" style="color:#111;"></i></a>
                    <a href="" class="btn btn-light btn-circle btn-md" target="_blank">
                        <i class="fab fa-whatsapp fa-3x" style="color:#111;"></i></a>
                </div>
          </div>
          <div class="col-4">
            <img src="img/Prod-Botol-All-removebg-preview.png" class="card-img-top" alt="..." style="max-height:180px; max-width:320px; float:right;">
          </div>
        </div>
      </div>
    </div>
    <!-- </nav> -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    