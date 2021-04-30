<p>Tambah Daftar Kategori</p>


<form method="POST" action="?menu=proses_tambah_kategori">
<div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr> Kategori</div>
          </div>
          <input type="text" name="kategori" class="form-control" value="" placeholder="Kategori" required="required"  />
        </div>
      </div>

<input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
<a href="?menu=kategori" class="btn btn-danger ">
  <span class="icon text-white-50">
  </span>
  <span class="text">Kembali</span>
</a>
</form>
