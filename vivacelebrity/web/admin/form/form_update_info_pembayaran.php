<p>Ubah Data Pembayaran</p>
<?php
  include 'master/koneksi.php';
  $id_info_pembayaran = $_GET['id_info_pembayaran'];
  $data = mysqli_query($koneksi,"select * from tabel_info_pembayaran where id_info_pembayaran='$id_info_pembayaran'");
  while($d = mysqli_fetch_array($data)){
?>

<form method="POST" action="?menu=proses_ubah_data_pembayaran" enctype="multipart/form-data">
<div class="form-group">
	<input type="hidden" name="id_info_pembayaran" value="<?php echo $d['id_info_pembayaran']; ?>">
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">Bank</div>
          </div>
          <select name="bank" class="form-control">
          <option value="<?php echo $d['nama_bank'];?>" hidden><?php echo strtoupper($d['nama_bank']);?></option>
          <option value="bca">BCA</option> 
          <option value="bri">BRI</option> 
          <option value="mandiri">Mandiri</option> 
          </select>
        </div>
     </div>
     <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>No. Rek</div>
          </div>
          <input type="text" name="no_rek" class="form-control" value="<?php echo $d['no_rek'];?>" placeholder="No. Rekening" required="required"  />
        </div>
      </div>
     <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Atas Nama</div>
          </div>
          <input type="text" name="atas_nama" class="form-control" value="<?php echo $d['atas_nama'];?>" placeholder="Atas Nama" required="required"  />
        </div>
      </div>
    </div>
<?php } ?>
<input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
<a href="?menu=data_pembayaran" class="btn btn-danger ">
  <span class="icon text-white-50">
  </span>
  <span class="text">Kembali</span>
</a>
</form>
