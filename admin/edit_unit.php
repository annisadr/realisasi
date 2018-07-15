<?php

error_reporting(0);

include '../config/koneksi.php';

$kdunit  = $_GET['kdunit'];
$edit    = "SELECT * FROM r_unit WHERE kdunit = '$kdunit'";
$hasil   = mysqli_query($konek, $edit)or die(mysql_error());
$data    = mysqli_fetch_array($hasil);

?>
  
<div class="container">
<div class="row">
  <h2>Edit Data Unit<hr></h2>
  <h6>
    <a href="index.php?page=lpnbp">Realisasi PNBP Per - Unit</a> > Edit data Unit
  </h6><br><br>
  <p><i>Please, fill it with correctly!</i></p>
  <form action="../config/proses_editunit.php" method="POST" class="form-horizontal">
    
    <div class="form-group">
      <label class="control-label col-sm-3" for="kdunit">Kode Unit</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="kdunit" value="<?php echo $data['kdunit']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="baes1">Baes1</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="baes1" value="<?php echo $data['baes1']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="nmunit">Nama Unit</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="nmunit" value="<?php echo $data['nmunit']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kdaktif">Kode Aktif</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="kdaktif" value="<?php echo $data['kdaktif']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="url">URL</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="url" value="<?php echo $data['url']; ?>">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-7 col-sm-2">
        <p align="right">
          <a href="#"><button type="submit" class="btn btn-warning">Update</button></a>
          <a href="index.php?page=lpnbp"><button type="button" class="btn btn-primary">Cancel</button></a>
        </p>
      </div>
    </div>
  </form>
</div>
</div>