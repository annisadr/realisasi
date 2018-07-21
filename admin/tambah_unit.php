<script type="text/javascript">
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
</script>

<div class="container">
<div class="row">
  <h2>Tambah Data Unit<hr></h2>
  <h6>
    <a href="index.php?page=lpnbp">Laporan per-Unit</a> > Tambah
  </h6><br><br>
  <p><i>Please, fill with correctly!</i></p>
  <form action="../config/proses_addunit.php" method="POST" class="form-horizontal">
    
    <!-- <div class="form-group">
      <label class="control-label col-sm-3" for="id">ID:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="id" name="id">
      </div>
    </div> -->

    <ol class="breadcrumb" style="background-color: #cceeff;">
      <h5>DATA UNIT</h5>
    </ol>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kdunit">Kode Unit:</label>
      <div class="col-sm-5">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="kdunit" name="kdunit" placeholder="Kode Unit" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nmunit">Nama Unit:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="nmunit" name="nmunit" placeholder="Nama Unit" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kdaktif">Kode Aktif:</label>
      <div class="col-sm-5">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="kdaktif" name="kdaktif" placeholder="Kode Aktif" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="url">Nama URL:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="url" name="url" placeholder="Nama URL" required>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-lg-offset-2 col-lg-5">
        <a href="#"><button type="submit" class="btn btn-success btn-lg">Submit</button></a>
        <a href="index.php?page=operator"><button type="submit" class="btn btn-basic btn-lg">Cancel</button></a>
      </div>
    </div>
  </form>

</div>
</div>