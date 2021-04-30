<p>Tambah Daftar User</p>


<form method="POST" action="?menu=proses_tambah_user">
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"><abbr title="wajib diisi"></abbr>Nama</div>
    </div>
    <input type="text" name="nama" class="form-control" value="" placeholder="Nama" required="required"  />
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"><abbr title="wajib diisi"></abbr>No. HP</div>
    </div>
    <input type="text" name="no_hp" class="form-control" value="" placeholder="No. HP" required="required"  />
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"><abbr title="wajib diisi"></abbr>Email</div>
    </div>
    <input type="text" name="email" class="form-control" value="" placeholder="Email" required="required"  />
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"><abbr title="wajib diisi"></abbr>Password</div>
    </div>
    <input type="password" name="password" class="form-control" value="" placeholder="Passwrod" required="required"  />
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"><abbr title="wajib diisi"></abbr>Alamat</div>
    </div>
    <input type="text" name="alamat" class="form-control" value="" placeholder="Alamat" required="required"  />
  </div>
</div>

<input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
<a href="?menu=list_user" class="btn btn-danger ">
  <span class="icon text-white-50">
  </span>
  <span class="text">Kembali</span>
</a>
</form>
