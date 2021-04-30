<p>Ubah Daftar Satuan</p>

<?php
  include 'master/koneksi.php';
  $id_satuan = $_GET['id_satuan'];
  $data = mysqli_query($koneksi,"select * from tabel_satuan where id_satuan='$id_satuan'");
  while($d = mysqli_fetch_array($data)){
?>

<form method="POST" action="?menu=proses_ubah_satuan">
<div class="form-group">
  <input type="hidden" name="id_satuan" value="<?php echo $d['id_satuan']; ?>">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr> Satuan</div>
          </div>
          <input type="text" name="satuan" class="form-control" value="<?php echo $d['nm_satuan'];?>" placeholder="Satuan" required="required"  />
        </div>
      </div>
<?php
    }
?>
<input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
<a href="?menu=satuan" class="btn btn-danger ">
  <span class="icon text-white-50">
  </span>
  <span class="text">Kembali</span>
</a>
</form>
