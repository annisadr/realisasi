<?php

error_reporting(0);

include '../config/koneksi.php';

$kdsatker  = $_GET['kdsatker'];
$edit    = "SELECT * FROM r_satker WHERE kdsatker = '$kdsatker'";
$hasil   = mysqli_query($konek, $edit)or die(mysql_error());
$data    = mysqli_fetch_array($hasil);

?>
  
<div class="container">
<div class="row">
  <h2>Edit Data Satuan Kerja<hr></h2>
  <h6>
    <a href="index.php?page=persatker">Realisasi PNBP Per - Satuan Kerja</a> > Edit data Satuan Kerja
  </h6><br><br>
  <p><i>Please, fill it with correctly!</i></p>
  <form action="../config/proses_editsatker.php" method="POST" class="form-horizontal">
    
    <div class="form-group">
      <label class="control-label col-sm-3" for="kdsatker">Kode Satuan Kerja</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="kdsatker" value="<?php echo $data['kdsatker']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="nmsatker">Nama Satuan Kerja</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="nmsatker" value="<?php echo $data['nmsatker']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kdunit">Kode Unit</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <select class="form-control" id="kdunit" name="kdunit" required>
          <?php
          $kdunit = $data['kdunit'];
          include '../config/koneksi.php';
            $sel_prov="select * from r_unit WHERE kdunit='$kdunit'";
            $q=mysqli_query($konek,$sel_prov);
            while($data_prov=mysqli_fetch_array($q)){
          ?>
          <option value="<?php echo $data_prov["kdunit"] ?>" <?php if($data['kdunit'] == '$data["kdunit"]'){ echo 'selected'; } ?>><?php echo $data_prov["kdunit"] ?> | <?php echo $data_prov["nmunit"] ?></option>
          <?php
            }
          ?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kdlokasi">Kode Lokasi</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="kdlokasi" value="<?php echo $data['kdlokasi']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kdkabkota">Kode Kabutan Kota</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="kdkabkota" value="<?php echo $data['kdkabkota']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="nomorsp">Nomor SP</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="nomorsp" value="<?php echo $data['nomorsp']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kdkppn">Kode KPPN</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="kdkppn" value="<?php echo $data['kdkppn']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kdjnssat">Kode Jenis Satuan</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="kdjnssat" value="<?php echo $data['kdjnssat']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kdupdate">Kode Update</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="kdupdate" value="<?php echo $data['kdupdate']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="tgupdate">Tanggal Update</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="tgupdate" value="<?php echo $data['tgupdate']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="nodsupdate">nodsupdate</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="nodsupdate" value="<?php echo $data['nodsupdate']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="jnssekolah">Jenis Sekolah</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="jnssekolah" value="<?php echo $data['jnssekolah']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kdpusda">Kode Pusda</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="kdpusda" value="<?php echo $data['kdpusda']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kdsatblu">Kode Satuan BLU</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="kdsatblu" value="<?php echo $data['kdsatblu']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="isblu">isblu</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="isblu" value="<?php echo $data['isblu']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kdstatblu">Kode Status BLU</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="kdstatblu" value="<?php echo $data['kdstatblu']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="nosp_dipal">nosp_dipal</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="nosp_dipal" value="<?php echo $data['nosp_dipal']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="nosp_bantu">nosp_bantu</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="nosp_bantu" value="<?php echo $data['nosp_bantu']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kdreceh">Kode Receh</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="kdreceh" name="kdreceh" value="<?php echo $data['kdreceh']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kdaktif">Kode Aktif</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="kdaktif" name="kdaktif" value="<?php echo $data['kdaktif']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="likuidasi">likuidasi</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="likuidasi" name="likuidasi" value="<?php echo $data['likuidasi']; ?>">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-7 col-sm-2">
        <p align="right">
          <a href="#"><button type="submit" class="btn btn-warning">Update</button></a>
          <a href="index.php?page=persatker"><button type="button" class="btn btn-primary">Cancel</button></a>
        </p>
      </div>
    </div>
  </form>
</div>
</div>