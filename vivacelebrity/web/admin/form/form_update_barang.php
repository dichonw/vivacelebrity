<?php
include 'master/koneksi.php';
$id_barang = $_GET['id_barang'];
$data = mysqli_query($koneksi,"SELECT DISTINCT b.id_barang, b.nm_barang, b.gmb_barang, b.id_satuan, s.nm_satuan, b.id_kategori, k.nm_kategori, b.deskripsi_barang, b.stok, b.harga_jual, b.harga_diskon, b.harga_jual_diskon FROM tabel_barang b inner join tabel_satuan s on b.id_satuan = s.id_satuan inner join tabel_kategori k on b.id_kategori = k.id_kategori where b.id_barang = '$id_barang';");
while($d = mysqli_fetch_array($data)){
?>
<p>Ubah Daftar Barang</p>


<form method="POST" action="?menu=proses_ubah_barang" style="margin-bottom: 50px;" enctype="multipart/form-data">
      <div class="form-group">
        <input type="hidden" name="id_barang" value="<?php echo $d['id_barang']; ?>">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr> Barang</div>
          </div>
          <input type="text" name="barang" class="form-control" value="<?php echo $d['nm_barang'];?>" placeholder="Kategori" required="required"  />
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <input type="file" name="gambar"/><img src="images/<?php echo $d['gmb_barang']; ?>" width="100"/>
        </div>
      </div>
    </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">Satuan</div>
          </div>
          <select name="satuan" class="form-control">
          <option value="<?php echo $d['id_satuan'];?>" hidden><?php echo $d['nm_satuan'];?></option>
           <?php 
            $satQuery = "SELECT * FROM tabel_satuan";
            $executeSat = mysqli_query($koneksi, $satQuery);
            while ($satuan=mysqli_fetch_array($executeSat)) {
           ?>
             <option value="<?php echo $satuan['id_satuan'];?>"><?php echo $satuan['nm_satuan'];?></option> 
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
          <option value="<?php echo $d['id_kategori'];?>" hidden><?php echo $d['nm_kategori'];?></option>
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
          <textarea class="form-control" id="deskripsi barang" name="deskripsi" rows="3" placeholder="Deskripsi Barang" value="<?php echo $d['deskripsi_barang'];?>"><?php echo $d['deskripsi_barang'];?></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr> Stok</div>
          </div>
          <input type="number" name="stok" class="form-control" value="<?php echo $d['stok'];?>" placeholder="Stok" required="required"  />
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr> Harga</div>
          </div>
          <input type="number" name="harga" class="form-control" value="<?php echo $d['harga_jual'];?>" placeholder="Harga" required="required"  />
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr> Diskon</div>
          </div>
          <input type="number" name="diskon" class="form-control" value="<?php echo $d['harga_diskon'];?>" placeholder="Diskon"/>
        </div>
      </div>
<?php
    }
?>
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
