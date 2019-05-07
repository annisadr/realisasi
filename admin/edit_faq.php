<?php

error_reporting(0);

include '../config/koneksi.php';

$id_faq  = $_GET['id_faq'];
$edit    = "SELECT id_faq, pertanyaan, tgl_tanya, jawaban FROM faq WHERE id_faq = '$id_faq'";
$hasil   = mysqli_query($konek, $edit)or die(mysql_error());
$data    = mysqli_fetch_array($hasil);

?>
  
<div class="container">
<div class="row">
  <h2>Edit Data FAQ<hr></h2>
  <h6>
    <a href="index.php?page=faq">FAQ</a> > Edit data FAQ
  </h6><br><br>
  <p><i>Please, fill your information with correctly!</i></p>
  <form action="../config/proses_editfaq.php" method="POST" class="form-horizontal">

    <input type="text" name="id_faq" value="<?php echo $id_faq ?>">
    
    <div class="form-group">
      <label class="control-label col-sm-3" for="pertanyaan">PERTANYAAN:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="pertanyaan" value="<?php echo $data['pertanyaan']; ?>">
      </div>
    </div>

    <!-- <div class="form-group">
      <label class="control-label col-sm-3" for="tgltanya">TANGGAL TANYA:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control input-md" id="datepicker" name="tgltanya" value="<?php echo $data['tgl_tanya']; ?>"/>
      </div>
    </div> -->

    <div class="form-group">
      <label class="control-label col-sm-3" for="jawaban">JAWABAN:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" rows="5" name="jawaban" value="<?php echo $data['jawaban']; ?>">
      </div>
    </div>

    <!-- <div class="form-group">
      <label class="control-label col-sm-3" for="tgljawab">TANGGAL JAWAB:</label>
      <div class="col-sm-3">
        <input type="date" class="form-control input-md" id="datepicker" name="tgljawab"/>
      </div>
    </div> -->
    
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-5">
        <a href="#"><button type="submit" class="btn btn-success">Submit</button></a>
        <a href="index.php?page=operator"><button type="submit" class="btn btn-basic">Cancel</button></a>
      </div>
    </div>

  </form>
</div>
</div>