<?php
    include "../config/koneksi.php";
?>
<script type="text/javascript" src="../jquery-3.2.1.min.js"></script>

<div class="container">
<div class="row">
  <h2>Tambah Data Operator<hr></h2>
  <h6>
    <a href="index.php?page=menuser">Manajamen User</a> > Tambah
  </h6><br><br>
  <p><i>Please, fill your information with correctly!</i></p>
  <form action="../config/proses_addoperator.php" method="POST" class="form-horizontal">
    
    <!-- <div class="form-group">
      <label class="control-label col-sm-3" for="id">ID:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="id" name="id">
      </div>
    </div> -->

    <ol class="breadcrumb" style="background-color: #cceeff;">
      <h5>DATA OPERATOR</h5>
    </ol>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="nama" name="nama" style="text-transform: capitalize;" placeholder="Nama Panjang" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="alamat">Alamat</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-9">          
        <textarea class="form-control" id="alamat" rows="2" name="alamat" placeholder="Alamat" required></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="alamat"></label>
      <label class="control-label col-sm-1"></label>
      <div class="col-sm-1">
        <input type="text" class="form-control" id="rt" name="rt" placeholder="RT">
      </div>
      <div class="col-sm-1">
        <input type="text" class="form-control" id="rw" name="rw" placeholder="RW">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kelurahan">Kelurahan</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="kelurahan" name="kelurahan" style="text-transform: capitalize;" placeholder="Kelurahan">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kecamatan">Kecamatan</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="kecamatan" name="kecamatan" style="text-transform: capitalize;" placeholder="Kecamatan">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="provinsi">Provinsi</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="provinsi" name="provinsi" style="text-transform: capitalize;" placeholder="Provinsi">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="kabkota">Kabupaten/Kota</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="kabkota" name="kabkota" style="text-transform: capitalize;" placeholder="Kabupaten">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="negara">Negara</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="negara" name="negara" style="text-transform: capitalize;" placeholder="Negara">
      </div>
    </div>

    <div class="form-group" required>
      <label class="control-label col-sm-2" for="kontak">Kontak</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="no_tlp" name="no_tlp" placeholder="Nomor Telepon">
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Handphone">
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="email" name="email" placeholder="Alamat E-mail" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="nip">NIP</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <input type="number" class="form-control" id="nip" name="nip" placeholder="Nomor Induk Pegawai" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="jenis_identitas">Identitas</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-2">
        <select class="form-control" id="sel1" name="jenis_identitas">
          <option value="">Tidak Memilih</option>
          <option value="KTP">KTP</option>
          <option value="SIM">SIM</option>
          <option value="PASSPORT">PASSPORT</option>
        </select>
      </div>
      <div class="col-sm-3">
        <input type="number" class="form-control" id="no_identitas" name="no_identitas" placeholder="Nomor Identitas">
      </div>
    </div><br><br>


    <ol class="breadcrumb" style="background-color: #cceeff;">
      <h5>DATA UNIT/SATUAN KERJA</h5>
    </ol>

    <div class="form-group">
      <label class="control-label col-sm-2" for="select">Unit</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <select class="form-control" id="kdunit" name="kdunit" required>
          <option selected="selected" value="">--Pilih Salah Satu--</option>
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
      <label class="control-label col-sm-2" for="select">Satuan Kerja</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-4">
        <select class="form-control" id="kdsatker" name="kdsatker">
          <option selected="selected" value="">--Pilih Salah Satu--</option>
        </select>
      </div>
    </div>
    <br><br>

    <ol class="breadcrumb" style="background-color: #cceeff;">
      <h5>DATA AKUN</h5>
    </ol>

    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-3">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="level">Level</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-2">
        <select class="form-control" id="sel1" name="level" required>
          <option value="">Tidak Memilih</option>
          <option value="Admin">Admin</option>
          <option value="Operator">Operator</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="level">Foto</label>
      <label class="control-label col-sm-1">:</label>
      <div class="col-sm-6">
        <input type="file" name="fileToUploadFoto" id="fileToUploadFoto">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-lg-12">
        <p align="right">
          <a href="#"><button type="submit" class="btn btn-success btn-lg">Submit</button></a>
          <a href="index.php?page=menuser"><button type="button" class="btn btn-basic btn-lg">Cancel</button></a>
        </p>
      </div>
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
                    alert('Tidak ada data Unit');
                }
                
                // jika dapat mengambil data,, tampilkan di combo box kota
                else{
                    $("#kdsatker").html(msg);                                                      
                }
                
            }
        });     
    });
</script>