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
      $id_artikel = $_GET['id_info'];
      $data = mysqli_query($koneksi,"SELECT * FROM tabel_info where id_info = '$id_artikel';");
      while($d = mysqli_fetch_array($data)){
    ?>
    <div class="row">
        <div class="col-lg-7">
            <div class="card" style="margin-top:5px; margin-bottom:25px;">
                <img src="admin/images/info/<?php echo $d['gbr_info'];?>" class="card-img-top" alt="..." style="max-height:400px;">
            </div>
        </div>
            <div class="col-lg-5">
                <h3 class="text-uppercase" style="border-bottom:1px solid #F88532; margin-top: 20px;"><?=$d['judul_info']?></h3>
                <p><?=$d['ket_info']?></p>     
            </div>
        </div>
    </div>
    <?php
        }
    ?>
</div>
