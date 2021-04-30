<p>Tambah Daftar Banner</p>


<form method="POST" action="?menu=proses_tambah_banner" enctype="multipart/form-data">
<div class="form-group">
      <div class="input-group">
          <div class="input-group-prepend">
            <input type="file" name="gambar" class="form-control"/>
        </div>
      </div>
      <br />
      <div class="input-group">
          <div class="input-group-prepend">
            <input type="text" name="judul_slide" class="form-control" placeholder="Judul Slide"/>
        </div>
      </div>
      <br />
      <div class="input-group">
          <div class="input-group-prepend">            
            <textarea name="ket_slide" class="form-control"></textarea>
        </div>
      </div>
    <br /><br />

<input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
<a href="?menu=banner" class="btn btn-danger ">
  <span class="icon text-white-50">
  </span>
  <span class="text">Kembali</span>
</a>
</div>
</form>

