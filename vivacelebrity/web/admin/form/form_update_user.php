<p>Tambah Daftar User</p>
<?php
  include 'master/koneksi.php';
  $id_user = $_GET['id_user'];
  $data = mysqli_query($koneksi,"select * from tabel_user where id_user='$id_user'");
  while($d = mysqli_fetch_array($data)){
?>

<form method="POST" action="?menu=proses_ubah_user">
<div class="form-group">
  <input type="hidden" name="id_user" value="<?php echo $d['id_user']; ?>">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"><abbr title="wajib diisi"></abbr>Nama</div>
    </div>
    <input type="text" name="nama" class="form-control" value="<?php echo $d['nm_user']; ?>" placeholder="Nama" required="required"  />
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"><abbr title="wajib diisi"></abbr>No. HP</div>
    </div>
    <input type="text" name="no_hp" class="form-control" value="<?php echo $d['hp']; ?>" placeholder="No. HP" required="required"  />
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"><abbr title="wajib diisi"></abbr>Email</div>
    </div>
    <input type="text" name="email" class="form-control" value="<?php echo $d['email']; ?>" placeholder="Email" required="required"  />
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"><abbr title="wajib diisi"></abbr>Password</div>
    </div>
    <input type="password" name="password" class="form-control" value="<?php echo $d['password']; ?>" placeholder="Passwrod" required="required"  />
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"><abbr title="wajib diisi"></abbr>Alamat</div>
    </div>
    <input type="text" name="alamat" class="form-control" value="<?php echo $d['alamat_user']; ?>" placeholder="Alamat" required="required"  />
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text">Status</div>
    </div>
    <select name="status" class="form-control">
    <option value="<?php echo $d['status'];?>" hidden><?php echo $d['status'];?></option>
    <option value="active">active</option>
    <option value="inactive">inactive</option>  
    </select>
  </div>
</div>
<?php
    }
?>

<input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
<a href="?menu=list_user" class="btn btn-danger ">
  <span class="icon text-white-50">
  </span>
  <span class="text">Kembali</span>
</a>
</form>
