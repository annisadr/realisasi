<div class="container">
<div class="row">
  <h2>Tambah Data FAQ<hr></h2>
  <h6>
    <a href="index.php?page=faq">FAQ</a> > Tambah data FAQ
  </h6><br><br>
  <p><i>Please, fill your information with correctly!</i></p>
  <form action="../config/proses_tambahfaq.php" method="POST" class="form-horizontal">
    
    <div class="form-group">
      <label class="control-label col-sm-3" for="pertanyaan" required>PERTANYAAN:</label>
      <div class="col-sm-5">          
        <textarea class="form-control" id="pertanyaan" rows="5" name="pertanyaan"></textarea>
      </div>
    </div>

    <!-- <div class="form-group">
      <label class="control-label col-sm-3" for="tgltanya">TANGGAL TANYA:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control input-md" id="datepicker" name="tgltanya"/>
      </div>
    </div> -->

    <div class="form-group">
      <label class="control-label col-sm-3" for="jawaban">JAWABAN:</label>
      <div class="col-sm-5">          
        <textarea class="form-control" id="jawaban" rows="5" name="jawaban"></textarea>
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
        <a href="index.php?page=operator"><button type="submit" class="btn btn-basic">Cancle</button></a>
      </div>
    </div>

  </form>
</div>
</div>