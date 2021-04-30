<p>Tambah Daftar Info</p>
<?php
  include 'master/koneksi.php';
  $id_info = $_GET['id_info'];
  $data = mysqli_query($koneksi,"select * from tabel_info where id_info='$id_info'");
  while($d = mysqli_fetch_array($data)){
?>

<form method="POST" action="?menu=proses_ubah_info" enctype="multipart/form-data">
<div class="form-group">
	<input type="hidden" name="id_info" value="<?php echo $d['id_info']; ?>">
        <div class="input-group">
          <div class="input-group-prepend">
            <input type="file" name="gambar"/><img src="images/banner/<?php echo $d['gbr_info']; ?>" width="100"/>
        </div>
      </div>
      <br />
      <div class="input-group">
          <div class="input-group-prepend">
            <input type="text" name="judul_info" value="<?php echo $d['judul_info']; ?>" class="form-control" placeholder="judul info"/>
        </div>
      </div>
      <br />
      <div class="input-group">
          <div class="input-group-prepend">
            <textarea name="ket_info" class="form-control"><?php echo $d['ket_info']; ?></textarea>
        </div>
      </div>
      <br />
    </div>
<?php } ?>
<input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
<a href="?menu=banner" class="btn btn-danger ">
  <span class="icon text-white-50">
  </span>
  <span class="text">Kembali</span>
</a>
</form>
