<?php
include 'master/koneksi.php';
?>
<p>Tambah Daftar Barang</p>


<form method="POST" action="?menu=proses_tambah_barang" style="margin-bottom: 50px;" enctype="multipart/form-data">
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr> Barang</div>
          </div>
          <input type="text" name="barang" class="form-control" value="" placeholder="Barang" required="required"  />
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <input type="file" name="gambar"/>
        </div>
      </div>
    </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">Satuan</div>
          </div>
          <select name="satuan" class="form-control">
           <option disabled selected> Satuan </option>
           <?php 
            $satQuery = "SELECT * FROM tabel_satuan ";
            $executeSat = mysqli_query($koneksi, $satQuery);
            while ($satuan=mysqli_fetch_array($executeSat)) {
           ?>
             <option value="<?=$satuan['id_satuan']?>"><?=$satuan['nm_satuan']?></option> 
           <?php
            }
           ?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">Kategori</div>
          </div>
          <select name="kategori" class="form-control">
           <option disabled selected> Kategori </option>
           <?php 
            $katQuery = "SELECT * FROM tabel_kategori ";
            $executeKat = mysqli_query($koneksi, $katQuery);
            while ($kategori=mysqli_fetch_array($executeKat)) {
           ?>
             <option value="<?=$kategori['id_kategori']?>"><?=$kategori['nm_kategori']?></option> 
           <?php
            }
           ?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Deskripsi</div>
          </div>
          <textarea class="form-control" id="deskripsi barang" name="deskripsi" rows="3" placeholder="Deskripsi Barang"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr> Stok</div>
          </div>
          <input type="number" name="stok" class="form-control" value="" placeholder="Stok" required="required"  />
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr> Harga</div>
          </div>
          <input type="number" name="harga" class="form-control" value="" placeholder="Harga" required="required"  />
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr> Diskon</div>
          </div>
          <input type="number" name="diskon" class="form-control" value="" placeholder="Diskon"/>
        </div>
      </div>

<input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
<a href="?menu=barang" class="btn btn-danger ">
  <span class="icon text-white-50">
  </span>
  <span class="text">Kembali</span>
</a>
</form>

<script>
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
</script>
