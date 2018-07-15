<?php

include '../config/koneksi.php';

$id_user  = $_GET['id_user'];
$edit    = "SELECT id_user, nama, alamat, rt, rw, kelurahan, kecamatan, provinsi, kabkota, negara, no_tlp, no_hp, email, nip, jenis_identitas, no_identitas, kdunit, kdsatker, username, password, level FROM user WHERE id_user = '$id_user'";
$hasil   = mysqli_query($konek, $edit)or die(mysql_error());
$data    = mysqli_fetch_array($hasil);

?>
  
<div class="container">
<div class="row">
  <h2>Edit Data FAQ<hr></h2>
  <h6>
    <a href="index.php?page=menuser">Manajemen User</a> > Edit data User
  </h6><br><br>
  <p><i>Please, fill your information with correctly!</i></p>
  <form action="../config/proses_edituser.php" method="POST" class="form-horizontal">

    <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="nama" name="nama" style="text-transform: capitalize;" placeholder="Nama Panjang" value="<?php echo $data['nama']; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="alamat">Alamat</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control"id="alamat" rows="2" name="alamat" placeholder="Alamat" value="<?php echo $data['alamat']; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="almt"></label>
      <label class="control-label col-sm-1"></label>
      <div class="col-sm-1">
        <input type="text" class="form-control" id="rt" name="rt" placeholder="RT" value="<?php echo $data['rt']; ?>">
      </div>
      <div class="col-sm-1">
        <input type="text" class="form-control" id="rw" name="rw" placeholder="RW" value="<?php echo $data['rw']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kelurahan">Kelurahan</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="kelurahan" name="kelurahan" style="text-transform: capitalize;" placeholder="Kelurahan" value="<?php echo $data['kelurahan']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kecamatan">Kecamatan</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="kecamatan" name="kecamatan" style="text-transform: capitalize;" placeholder="Kecamatan" value="<?php echo $data['kecamatan']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="provinsi">Provinsi</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="provinsi" name="provinsi" style="text-transform: capitalize;" placeholder="Provinsi" value="<?php echo $data['provinsi']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kabkota">Kabupaten/Kota</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="kabkota" name="kabkota" style="text-transform: capitalize;" placeholder="Kabupaten" value="<?php echo $data['kabkota']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="negara">Negara</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="negara" name="negara" style="text-transform: capitalize;" placeholder="Negara" value="<?php echo $data['negara']; ?>">
      </div>
    </div>

    <div class="form-group" required>
      <label class="control-label col-sm-2" for="kontak">Kontak</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="no_tlp" name="no_tlp" placeholder="Nomor Telepon" value="<?php echo $data['no_tlp']; ?>">
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Handphone" value="<?php echo $data['no_hp']; ?>">
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="email" name="email" placeholder="Alamat E-mail" value="<?php echo $data['email']; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nip">NIP</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <input type="number" class="form-control" id="nip" name="nip" placeholder="Nomor Induk Pegawai" value="<?php echo $data['nip']; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="jenis_identitas">Identitas</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-2">
        <select class="form-control" id="sel1" name="jenis_identitas">
          <option value="">Tidak Memilih</option>
          <option value="KTP" <?php if($data['jenis_identitas'] == 'KTP'){ echo 'selected'; } ?>>KTP</option>
          <option value="SIM" <?php if($data['jenis_identitas'] == 'SIM'){ echo 'selected'; } ?>>SIM</option>
          <option value="PASSPORT" <?php if($data['jenis_identitas'] == 'PASSPORT'){ echo 'selected'; } ?>>PASSPORT</option>
        </select>
      </div>
      <div class="col-sm-3">
        <input type="number" class="form-control" id="no_identitas" name="no_identitas" placeholder="Nomor Identitas" value="<?php echo $data['no_identitas']; ?>">
      </div>
    </div><br><br>


    <ol class="breadcrumb" style="background-color: #cceeff;">
      <h5>DATA UNIT/SATUAN KERJA</h5>
    </ol>

    <div class="form-group">
      <label class="control-label col-sm-2" for="select">Unit</label>
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
      <label class="control-label col-sm-2" for="select">Satuan Kerja</label>
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
    <br><br>


    <ol class="breadcrumb" style="background-color: #cceeff;">
      <h5>DATA AKUN</h5>
    </ol>
    <?php

    include '../config/koneksi.php';

    $id_user  = $_GET['id_user'];
    $edit    = "SELECT id_user, nama, alamat, rt, rw, kelurahan, kecamatan, provinsi, kabkota, negara, no_tlp, no_hp, email, nip, jenis_identitas, no_identitas, kdunit, kdsatker, username, password, level FROM user WHERE id_user = '$id_user'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

    ?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $data['username']; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $data['password']; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="level">Level</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="level" name="level" disabled value="<?php echo $data['level']; ?>" required>
      </div>
    </div><br><br>
    
    <div class="form-group col-sm-12">
      <p align="right">&nbsp;&nbsp;
        <a href="#"><button type="submit" class="btn btn-warning btn-lg">Update</button></a>
        <a href="index.php?page=menuser"><button type="button" class="btn btn-primary btn-lg">Cancel</button></a>
      </p>
    </div>

  </form>
</div>
</div>

<script>
    $("#kdunit").change(function(){
    
        // variabel dari nilai combo box provinsi
        var kdunit = $("#kdunit").val();
        
        // mengirim dan mengambil data
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "ajax_unit.php",
            data: "kdunit="+kdunit,
            success: function(msg){
                
                // jika tidak ada data
                if(msg == ''){
                    alert('Tidak ada data Kota');
                }
                
                // jika dapat mengambil data,, tampilkan di combo box kota
                else{
                    $("#kdsatker").html(msg);                                                      
                }
                
            }
        });     
    });
</script>