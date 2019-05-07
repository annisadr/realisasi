<script type="text/javascript" src="../jquery-3.2.1.min.js"></script>
<div class="container">
<div class="row">
  <h2>Tambah Data Satuan Kerja<hr></h2>
  <h6>
    <a href="index.php?page=persatker">Laporan per-Satker</a> > Tambah
  </h6><br><br>
  <p><i>Please, fill with correctly!</i></p>
  <form action="../config/proses_addsatker.php" method="POST" class="form-horizontal">
    
    <!-- <div class="form-group">
      <label class="control-label col-sm-3" for="id">ID:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="id" name="id">
      </div>
    </div> -->

    <ol class="breadcrumb" style="background-color: #cceeff;">
      <h5>DATA SATUAN KERJA</h5>
    </ol>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kdsatker">Kode Satuan Kerja</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="kdsatker" name="kdsatker" placeholder="Kode Satuan Kerja" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nmsatker">Nama Satuan Kerja</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="nmsatker" name="nmsatker" placeholder="Nama Satuan Kerja" required>
      </div>
    </div>

    <!-- <div class="form-group">
      <label class="control-label col-sm-2" for="kddept">Kode Dept</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="kddept" name="kddept" placeholder="Kode Dept" required>
      </div>
    </div> -->

    <div class="form-group">
      <label class="control-label col-sm-2" for="kdunit">Kode Unit</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <select class="form-control" id="kdunit" name="kdunit" required>
          <option selected="selected">--Pilih Unit--</option>
          <?php
          include '../config/koneksi.php';
          $sel_prov="select * from r_unit";
          $q=mysqli_query($konek,$sel_prov);
          while($data_prov=mysqli_fetch_array($q)){
            ?>
            <option value="<?php echo $data_prov["kdunit"] ?>"><?php echo $data_prov["kdunit"] ?> | <?php echo $data_prov["nmunit"] ?></option>
            <?php
          }
          ?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kdlokasi">Kode Lokasi</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="kdlokasi" name="kdlokasi" placeholder="Kode Lokasi">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kdkabkota">Kode Kabupaten/Kota</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="kdkabkota" name="kdkabkota" placeholder="Kode Kabupaten/Kota">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nomorsp">Nomorsp</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="nomorsp" name="nomorsp" placeholder="Nomorsp">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kdkppn">Kode KPPN</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="kdkppn" name="kdkppn" placeholder="Kode KPPN">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="kdjnssat">Kode Jenis Satuan</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="kdjnssat" name="kdjnssat" placeholder="Kode Jenis Satuan">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kdupdate">Kode Update</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="kdupdate" name="kdupdate" placeholder="Kode Update" >
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="tgupdate">Tanggal Update</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="tgupdate" name="tgupdate" placeholder="Tanggal Update">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nodsupdate">Nodsupdate</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="nodsupdate" name="nodsupdate" placeholder="Nodsupdate">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="jnssekolah">Jenis Sekolah</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="jnssekolah" name="jnssekolah" placeholder="Jenis Sekolah">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kdpusda">Kode Pusda</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="kdpusda" name="kdpusda" placeholder="Kode Pusda">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kdsatblu">Kode Satuan BLU</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="kdsatblu" name="kdsatblu" placeholder="Kode Satuan BLU">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="isblu">IsBLU</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="isblu" name="isblu" placeholder="IsBLU">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kdstatblu">Kode Status BLU</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="kdstatblu" name="kdstatblu" placeholder="Kode Status BLU">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nosp_dipal">nosp_dipal</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="nosp_dipal" name="nosp_dipal" placeholder="nosp_dipal">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nosp_bantu">nosp_bantu</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="nosp_bantu" name="nosp_bantu" placeholder="nosp_bantu">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kdreceh">Kode Receh</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="kdreceh" name="kdreceh" placeholder="Kode Receh">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kdaktif">Kode Aktif</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="kdaktif" name="kdaktif" placeholder="Kode Aktif">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="likuidasi">likuidasi</label>
      <label class="control-label col-sm-1" for="nmsatker">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="likuidasi" name="likuidasi" placeholder="likuidasi">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-lg-offset-6 col-lg-5">
        <a href="#"><button type="submit" class="btn btn-success btn-lg">Submit</button></a>
        <a href="index.php?page=persatker"><button type="button" class="btn btn-basic btn-lg">Cancel</button></a>
      </div>
    </div>
  </form>

</div>
</div>