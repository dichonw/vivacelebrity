<?php
  session_start();
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../bootstrap-4.5.3-dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

.topnav {
  overflow: hidden;
  background-color: #f3f3f3;
  /* top: 0;
  position: fixed;
  width: 100%;
  z-index: 1; */
}

.topnav a {
  float: left;
  display: block;
  color: #FF4500;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav a:hover {
  background-color: #FF4500;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}
.navbar{
  box-shadow: 0 8px 6px -6px black;
  background-color:#FF4500;
  /*background-image:url(img/hd.png);
  background-repeat:no-repeat;
  background-position:top;
  background-size:auto;
  background-attachment:fixed;
  background-color:#111;*/
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

/* .topnav .search-container {
  float: right;
  
} */

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

.nav-link{
  color: #111 !important;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
.nav-login{
  margin-left: 10px;
}
}
@media screen and (max-width: 768px){
  .navbar-collapse{
    margin-top: 10px !important;
  }
}
</style>   
    <nav class="navbar navbar-expand-lg fixed-top" >
      <div class="container-fluid">
        <a class="navbar-brand" href="?menu=home">
          <img src="img/vivalogo.png" width="100" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fa fa-navicon" style="color:#111"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="">
          <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <form class="d-flex" style="margin-right: 5px;" action="?menu=search" method="POST">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="search" style="border:1px solid #111; color: #FF4500;">
              <div class="input-group-append">
                <button class="btn btn-outline-warning" type="submit" name="kirim" style="border-color: #111; color: #111; height: 38px">Cari</button>
              </div>
            </div>
            </form>
            
            
              <!--input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
              <button class="btn btn-outline-warning" style="border-color: #FF4500; color: #FF4500;" type="submit" name="kirim">Search</button-->
            
            <li class="nav-item">
              <a class="nav-link"  href="?menu=home"><i class="fas fa-home" style="margin-right: 5px;"></i>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="?menu=standar"><i class="fas fa-hand-holding-water" style="margin-right: 5px;"></i>Standar Air Minum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="?menu=artikel"><i class="fas fa-newspaper" style="margin-right: 5px;"></i>Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="?menu=cart"><i class="fas fa-shopping-cart" style="margin-right: 5px;"></i>Chart</a>
            </li>
            <li class="nav-item" style="background-color: #FF4500; border-radius: 3px;">
              <?php
                if (isset($_SESSION['nm_user'])) {
                  ?>            
                    <a class="nav-link nav-login" href="#" data-toggle="modal" data-target="#akunModal" style="color: white !important;" ><i class="fas fa-user"></i>  <?php echo $_SESSION['nm_user']?></a>
                  <?php
                }else{
                  ?>
                  <a class="nav-link nav-login" href="?menu=login" style="color: white !important;" href="#"><i class="fas fa-user"></i> Login</a>
                  <?php
                }
              ?>

            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="modal fade" id="akunModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-footer">
            <a href="master/aksi_logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
            <!-- <button type="button"  class="btn btn-danger">Logout</button> -->
          </div>
        </div>
      </div>
    </div>
    

    
    <script src="https://code.jquery.com/jquer  y-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    