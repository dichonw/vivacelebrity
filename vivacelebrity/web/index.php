<?php include("inc/koneksi.php");?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="vendor/fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <title>.:VIVACELEBRITY:.</title>
    <link rel="shortcut icon" href="img/viva-removebg-preview1.png">
    <link href="vendor/font/stylesheet.css" rel="stylesheet">
	<style type="text/css">
    @font-face {
    font-family: "baskerville_handcutbold";
    src: url('baskerville_handcut_bold-webfont.woff');
    }
    .container {
    font-family: "baskerville_handcutbold";
    text-transform: capitalize;
    }
    </style>
  </head>
  <!--body style="background-image:url(img/bg.jpg); background-repeat:no-repeat; background-position:inherit; background-size:100%; background-attachment:fixed"-->
  <body>
  <?php include 'inc/header.php' ?>
  
<div class="container" style="padding-left:0;padding-right:0;padding-top:10px;padding-bottom:10px; min-width:100%;margin-top:50px">
<?php
if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
    switch ($menu) {
        case ('home');
            include('master/home.php');
            break;
		case ('standar');
            include('master/standar.php');
            break;	
        case ('product');
            include('master/list_product.php');
            break;
        case ('cart');
            include('master/list_cart.php');
            break;
        case ('profile');
            include('master/profile.php');
            break;
        case ('detail');
            include('master/detail_product.php');
            break;
        case ('search');
            include('master/search.php');
            break;
        case ('login');
            include('master/login.php');
            break;
        case ('register');
            include('master/register.php');
            break;
        case ('proses_tambah_keranjang');
            include('master/aksi_penjualan.php');
            break;
        case ('hapus_barang');
            include('master/aksi_hapus_barang.php');
            break;
        case ('artikel');
            include('master/list_artikel.php');
            break;
        case ('detail_artikel');
            include('master/detail_artikel.php');
            break;
        case ('bayar');
            include('master/aksi_bayar.php');
            break;
        case ('upload_bukti');
            include('master/aksi_upload_bukti.php');
            break;
    }
}else {
    include('master/home.php');
}
?>

<?php
if ($menu=='login' || $menu=='register')   {
?>
<?php
}else{
    ?>
</div>    
<!--div class="container" style="padding-left:0;padding-right:0;padding-top:10px;padding-bottom:10px">    
    <div class="row justify-content-around">
        <div class="col-sm-3">
            <div class="card" style="margin-top:10px;">
            <div class="card-body">
            <i class="fas fa-medal fa-2x" style="float:left; margin-right:5px; margin-top:3px;"></i>
            <h6 class="card-text" style="font-size:14px;"><b>WIDE PRODUCT RANGE</b></h6>
            <p class="card-text" style="font-size:10px;">We work with the best brands</p>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="margin-top:10px;">
            <div class="card-body">
            <i class="fas fa-box-open fa-2x" style="float:left; margin-right:5px; margin-top:3px;"></i>
            <h6 class="card-text" style="font-size:14px;"><b>AFFORDABLE DELIVERY</b></h6>
            <p class="card-text" style="font-size:10px;">providing the best delivery fee</p>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="margin-top:10px;">
            <div class="card-body">
            <i class="fas fa-comments fa-2x" style="float:left; margin-right:5px; margin-top:3px;"></i>
            <h6 class="card-text" style="font-size:14px;"><b>NEED HELP?</b></h6>
            <p class="card-text" style="font-size:10px;">Call us if you have any questions</p>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="margin-top:10px;">
            <div class="card-body">
            <i class="fas fa-sync fa-2x" style="float:left; margin-right:5px; margin-top:3px;"></i>
            <h6 class="card-text" style="font-size:14px;"><b>GREAT CUSTOMER CARE</b></h6>
            <p class="card-text" style="font-size:10px;">We serve the best to our customers</p>
            </div>
            </div>
        </div>
    </div>
</div-->
<div class="container" style="padding-left:0; padding-right:0; margin-left:0; margin-right:0; min-width:100%">
<div style="padding-left:0;padding-right:0;padding-top:10px;background-image:url(img/bg-footer.png); background-position:center; background-repeat:no-repeat;">    
    
    	
        <div class="col-sm-12" style="padding-top:125px">
        	<h5 ><a href="https://www.instagram.com/vivacelebrity/"><small class="text-danger" style="text-decoration: bold; cursor: pointer; color: #111 !important; border-bottom:3px solid #BF9F62"><i class="fab fa-instagram-square"></i> Instagram</small></a></h5>
            <!-- SnapWidget -->
<script src="https://snapwidget.com/js/snapwidget.js"></script>
<iframe src="https://snapwidget.com/embed/899112" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
        </div>
        
    </div>    
    
</div> 

<?php } include 'inc/footer.php';?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script>
	$('#myCarousel').carousel({
    interval: 3000,
 })
	</script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> 
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<script>
	$(document).ready(function() {
    $("#news-slider").owlCarousel({
        items : 2,
        itemsDesktop : [1199,2],
        itemsMobile : [600,1],
        pagination :true,
        autoPlay : true
    });
    
    
});
	</script>
  </body>
</html>