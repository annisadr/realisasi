<?php

error_reporting(0);

include '../config/koneksi.php';

$kdunit  = $_GET['kdunit'];
$wbws  = $_GET['wbws'];
$edit    = "SELECT kdsatker, kdunit, wbws, tanggal_str, kode_klus, kode_billing, kode_bp, NTPN, ntbntp, kode_uf, kode_mu, akun, jml_setoran, tanggal, tahun, akun_3d, akun_4d FROM d_simponi WHERE kdunit = '$kdunit' AND wbws = '$wbws'";
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
  
<div class="container">
<div class="row">
  <h2>Edit Data Realisasi<hr></h2>
  <h6>
    <a href="index.php?page=lpnbp">Realisasi PNBP</a> > Edit data Realisasi
  </h6><br><br>
  <p><i>Please, fill it with correctly!</i></p>
  <form action="config/proses_editrealisasi.php" method="POST" class="form-horizontal">
    
    <div class="form-group">
      <label class="control-label col-sm-3" for="select">Unit</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <select class="form-control" id="kdunit" name="kdunit">
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
      <label class="control-label col-sm-3" for="select">Satuan Kerja</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
      <select class="form-control" id="kdsatker" name="kdsatker">
          <?php 
          // echo $data['kdsatker'];
          $kodesatker = $data['kdsatker'];

          $select = "SELECT * FROM r_satker WHERE kdsatker='$kodesatker'";
          $a      = mysqli_query($konek,$select);
          $data   = mysqli_fetch_array($a);

        ?>
          <option selected="selected" <?php if($data['kdsatker'] == '$data["kdsatker"]'){ echo 'selected'; } ?>><?php echo $data['kdsatker']; ?> | <?php echo $data["nmsatker"] ?></option>
                            
        </select>
      </div>
    </div>

    <?php

    include '../config/koneksi.php';

    $kdunit  = $_GET['kdunit'];
    $wbws  = $_GET['wbws'];
    $edit    = "SELECT kdsatker, kdunit, wbws, tanggal_str, kode_klus, kode_billing, kode_bp, NTPN, ntbntp, kode_uf, kode_mu, akun, jml_setoran, tanggal, tahun, akun_3d, akun_4d FROM d_simponi WHERE kdunit = '$kdunit' AND wbws = '$wbws'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

    ?>

    <div class="form-group">
      <label class="control-label col-sm-3" for="wbws">Wajib Bayar / Wajib Setor</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" name="wbws" value="<?php echo $data['wbws']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="tanggal_str">Tanggal Setor</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">          
        <input type="text" class="form-control" name="tanggal_str" placeholder="Ex : 01-May-2018" value="<?php echo $data['tanggal_str']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kode_klus">Kode Klus</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="kode_klus" name="kode_klus" placeholder="Kode Klus" value="<?php echo $data['kode_klus']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kode_billing">Kode Billing</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="kode_billing" name="kode_billing" placeholder="Kode Billing" value="<?php echo $data['kode_billing']; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kode_bp">Kode Bp</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="kode_bp" name="kode_bp" placeholder="Kode Bp" value="<?php echo $data['kode_bp']; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="NTPN">Nomor Transaksi Penerimaan Negara</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="NTPN" name="NTPN" placeholder="Nomor Transaksi Penerimaan Negara" value="<?php echo $data['NTPN']; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="ntbntp">Nomor Transaski Bank / Nomor Transaksi Pos</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="ntbntp" name="ntbntp" placeholder="NTB/NTP" value="<?php echo $data['ntbntp']; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kode_uf">Kode U/F</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-2">
        <select class="form-control" id="sel1" name="kode_uf">
          <option value="U" <?php if($data['kode_uf'] == 'U'){ echo 'selected'; } ?>>U</option>
          <option value="F" <?php if($data['kode_uf'] == 'F'){ echo 'selected'; } ?>>F</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="kode_mu">Kode Mata Uang</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-2">
        <select class="form-control" id="sel1" name="kode_mu">
          <option value="IDR" <?php if($data['kode_mu'] == 'IDR'){ echo 'selected'; } ?>>IDR</option>
          <option value="USD" <?php if($data['kode_mu'] == 'USD'){ echo 'selected'; } ?>>USD</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="akun">Akun</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="akun" name="akun" placeholder="Akun" value="<?php echo $data['akun']; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="jml_setoran">Jumlah Setoran</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="jml_setoran" name="jml_setoran" placeholder="Jumlah Setoran" value="<?php echo $data['jml_setoran']; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="tanggal">Tanggal</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" value="<?php echo $data['tanggal']; ?>">
      </div>
    </div>

    <!-- <div class="form-group">
      <label class="control-label col-sm-3" for="tanggal">Tanggal</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" value="<?php echo $data['tanggal']; ?>">
      </div>
    </div> -->

    <div class="form-group">
      <label class="control-label col-sm-3" for="tahun">Tahun</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <input onkeypress="return hanyaAngka(event)" type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" value="<?php echo $data['tahun']; ?>">
      </div>
    </div>

    <!-- <div class="form-group">
      <label class="control-label col-sm-3" for="akun_3d">Akun 3d</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <input type="number" class="form-control" id="akun_3d" name="akun_3d" placeholder="Akun 3d" value="<?php echo $data['akun_3d']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="akun_4d">Akun 4d</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <input type="number" class="form-control" id="akun_4d" name="akun_4d" placeholder="Akun 4d" value="<?php echo $data['akun_4d']; ?>">
      </div>
    </div> -->

    <div class="form-group">        
      <div class="col-sm-offset-7 col-sm-2">
        <p align="right">
          <a href="#"><button type="submit" class="btn btn-warning">Update</button></a>
          <a href="index.php?page=realisasi"><button type="button" class="btn btn-primary">Cancel</button></a>
        </p>
      </div>
    </div>
  </form>
</div>
</div>