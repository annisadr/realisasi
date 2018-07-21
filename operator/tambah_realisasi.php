<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $id_user = $_GET['id_user'];
  $kdunit = $_GET['kdunit'];
  $kdsatker = $_GET['kdsatker'];
  $jenis = $_GET['jenis'];
  $tanggalakhir = $_GET['tanggalawal'];

  $edit    = "SELECT * FROM r_unit WHERE kdunit = '$kdunit'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

  $id_user = $_GET['id_user'];

  $edit1    = "SELECT * FROM user WHERE id_user = '$id_user'";
  $hasil1   = mysqli_query($konek, $edit1)or die(mysql_error());
  $data1    = mysqli_fetch_array($hasil1);

?>

<script type="text/javascript">
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
</script>

<script type="text/javascript" src="../jquery-3.2.1.min.js"></script>
<div class="container">
<div class="row">
  <h2>Tambah Data Realisasi PNBP<hr></h2>
  <h6>
    <a href="index.php?page=realisasi&&id_user=<?php echo $data1['id_user']; ?>&&kdunit=<?php echo $data['kdunit']; ?>">Realisasi PNBP</a> > Tambah
  </h6><br><br>
  <p><i>Please, fill with correctly!</i></p>
  <form action="config/proses_addrealisasi.php" method="POST" class="form-horizontal">
  
    <ol class="breadcrumb" style="background-color: #cceeff;">
      <h5>DATA REALISASI PNBP</h5>
    </ol>

    <div class="form-group">
      <input type="hidden" name="id_user" value="<?php echo $data1['id_user'];?>">
      <label class="control-label col-sm-2" for="wbws">Unit</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <select class="form-control" id="kdunit" name="kdunit" required>
          <option selected="selected"><?php echo $data['kdunit'];?> | <?php echo $data['nmunit'];?></option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="wbws">Satuan Kerja</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <select class="form-control" id="kdsatker" name="kdsatker">
          <option selected="selected" value="">--Pilih Satuan Kerja--</option>
              <?php
          include '../config/koneksi.php';
          $sel_prov="select * from r_satker where kdunit='$kdunit'";
          $q=mysqli_query($konek,$sel_prov);
          while($data_prov=mysqli_fetch_array($q)){
              ?>
              <option value="<?php echo $data_prov["kdsatker"] ?>"><?php echo $data_prov["kdsatker"] ?> | <?php echo $data_prov["nmsatker"] ?></option>
              <?php
          }
          ?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="wbws">Wajib Bayar / Wajib Setor</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="wbws" name="wbws" placeholder="Nama Wajib Bayar / Wajib Setor" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="tanggal_str">Tanggal Setor</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="tanggal_str" name="tanggal_str" placeholder="Ex : 01-Jan-2017">
      </div>
    </div>

    <!-- <div class="form-group">
      <label class="control-label col-sm-2" for="kode_klus">Kode Klus</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="kode_klus" name="kode_klus" placeholder="Kode Klus">
      </div>
    </div> -->

    <div class="form-group">
      <label class="control-label col-sm-2" for="kode_billing">Kode Billing</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="kode_billing" name="kode_billing" placeholder="Kode Billing">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kode_bp">Kode Bp</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="kode_bp" name="kode_bp" placeholder="Kode BP">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="NTPN">Nomor Transaksi Penerimaan Negara</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="NTPN" name="NTPN" placeholder="NTPN">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="ntbntp">Nomor Transaski Bank / Nomor Transaksi Pos</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="ntbntp" name="ntbntp" placeholder="NTB / NTP">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kode_uf">Kode U/F</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-2">
        <select class="form-control" id="kode_uf" name="kode_uf" required>
          <option selected="selected" value="">-- Pilih Kode U/F --</option>
          <option value="U">U</option>
          <option value="F">F</option>
        </select>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="kode_mu">Kode Mata Uang</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <select class="form-control" id="kode_mu" name="kode_mu" required>
          <option value="IDR" selected="selected" value="">-- Pilih Kode Mata Uang --</option>
          <option value="IDR">IDR</option>
          <option value="USD">USD</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="akun">Akun</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="akun" name="akun" placeholder="Akun">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="jml_setoran">Jumlah Setoran</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="jml_setoran" name="jml_setoran" placeholder="Ex : 1000000" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="tanggal">Tanggal</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="tahun">Tahun</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-lg-offset-6 col-lg-5">
        <a><button type="submit" class="btn btn-success btn-lg">Submit</button></a>
        <a href="index.php?page=realisasi&&id_user=<?php echo $data1['id_user']; ?>&&kdunit=<?php echo $data['kdunit']; ?>"><button type="button" class="btn btn-primary btn-lg">Cancel</button></a>
      </div>
    </div>
  </form>
</div>
</div>

<script type="text/javascript">
  $("#unit").change(function() {
    var kdunit = $("#unit").val();
    console.log(kdunit);
    $.ajax({
      type: "POST",
      dataType: "html",
      url: "ajax_unit.php",
      data: "kdunit="+kdunit,
      success: function(msg){
          // console.log('ASASasAS');
          jika tidak ada data
          if(msg == ''){
              alert('Tidak ada data Unit');
          }
          
          // jika dapat mengambil data,, tampilkan di combo box kota
          else{
              $("#kdsatker").html(msg);   
          }
          
      }
    });
  });