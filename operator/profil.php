<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $kdunit = $_GET['kdunit'];

  $edit1    = "SELECT * FROM r_unit WHERE kdunit = '$kdunit'";
  $hasil1   = mysqli_query($konek, $edit)or die(mysql_error());
  $data1    = mysqli_fetch_array($hasil);

  $id_user = $_GET['id_user'];

  $edit    = "SELECT * FROM user WHERE id_user = '$id_user'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>
<div class="container">
  <div class="module-head">
        <h3><large>MANAJEMEN USER</large></h3><hr><br>
      </div>
  <form class="form-horizontal" action="#" method="POST">
    <input type="hidden" name="id_user" value="<?php echo $data1['id_user'];?>">
    <div class="panel-group">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <p align="center"><b>Profil</b></p>
        </div>
        <div class="panel-body">
          <table align="center">
          <tr>
          <td><br><p align="center"><font size="5px"><b>KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT</b></font><br>
                  <font size="6px"><b>BIRO KEUANGAN</b></font><br>Jl. Pattimura 20, Jakarta Selatan 12110</p></td>
          </tr>
        </table>

          <table class="table table-bordered">

            <tr>
              <td style="padding-left: 300px;">
                <p align="left">
                  <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">

                  <div class="form-group">
                    <label class="control-label col-sm-3" for="nama">Nama</label>
                    <label class="control-label col-sm-1">:</label>
                    <label class="control-label col-sm-5"><p align="left"><?php echo $data['nama']; ?></p></label>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3" for="no_tlp">Nomor Telepon</label>
                    <label class="control-label col-sm-1">:</label>
                    <label class="control-label col-sm-2"><p align="left"><?php echo $data['no_tlp']; ?></p></label>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3" for="no_hp">Nomor Handphone</label>
                    <label class="control-label col-sm-1">:</label>
                    <label class="control-label col-sm-2"><p align="left"><?php echo $data['no_hp']; ?></p></label>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3" for="email">Email</label>
                    <label class="control-label col-sm-1">:</label>
                    <label class="control-label col-sm-2"><p align="left"><?php echo $data['email']; ?></p></label>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3" for="nip">Nomor Induk Pegawai</label>
                    <label class="control-label col-sm-1">:</label>
                    <label class="control-label col-sm-2"><p align="left"><?php echo $data['nip']; ?></p></label>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3" for="jenis_identitas">Jenis Identitas</label>
                    <label class="control-label col-sm-1">:</label>
                    <label class="control-label col-sm-2"><p align="left"><?php echo $data['jenis_identitas']; ?></p></label>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3" for="no_identitas">Nomor Identitas</label>
                    <label class="control-label col-sm-1">:</label>
                    <label class="control-label col-sm-2"><p align="left"><?php echo $data['no_identitas']; ?></p></label>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3" for="kdunit">Kode Unit</label>
                    <label class="control-label col-sm-1">:</label>
                    <label class="control-label col-sm-2"><p align="left"><?php echo $data['kdunit']; ?></p></label>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3" for="kdsatker">Kode Satuan Kerja</label>
                    <label class="control-label col-sm-1">:</label>
                    <label class="control-label col-sm-2"><p align="left"><?php echo $data['kdsatker']; ?></p></label>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3" for="username">Username</label>
                    <label class="control-label col-sm-1">:</label>
                    <label class="control-label col-sm-2"><p align="left"><?php echo $data['username']; ?></p></label>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3" for="password">Password</label>
                    <label class="control-label col-sm-1">:</label>
                    <label class="control-label col-sm-4"><p align="left"><?php echo $data['password']; ?></p></label>
                    <a href="#" type="button" class="control-label col-sm-2" data-toggle="modal" data-target="#myModal">Ubah Password</a>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3" for="level">Level</label>
                    <label class="control-label col-sm-1">:</label>
                    <label class="control-label col-sm-1"><p align="left"><?php echo $data['level']; ?></p></label>
                  </div>
                </p>
              </td>
            </tr>
            
          </table>
          <p align="right">&nbsp;&nbsp;
              <a href="index.php?page=euser&&id_user=<?php echo $data['id_user']; ?>&&kdunit=<?php echo $data['kdunit']; ?>"><button type="button" class="btn btn-warning btn-lg">Ubah Profil  </button></a>
            </p>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" style="padding-top: 50px;">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header" style="background-color:#3bacd6";>
            <button type="button" class="close" data-dismiss="modal">&times;</button>            
            <h4 class="modal-title" align="center"><b>Ubah Password</b></h4>
          </div>
          <div class="modal-body">
            <form action="config/ubah_password.php" class="form-horizontal" method="POST">
              <div class="form-group">
                <input type="hidden" name="id_user" value="<?php echo $data['id_user'];?>">
                <label class="col-sm-1"></label>
                <label class="col-sm-4">Password</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                      <input type="password" class="form-control" name="password" placeholder="password" required>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-4">Konfirmasi Password</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                      <input type="password" class="form-control" name="kpassword" placeholder="Konfirmasi Password" required>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-4"></label>
                  <div class="col-sm-7" align="right">
                      <button class="btn btn-primary">Simpan</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
<div id="Modalmy" class="modal fade" role="dialog" style="padding-top: 50px;">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header" style="background-color:#3bacd6";>
            <button type="button" class="close" data-dismiss="modal">&times;</button>            
            <h4 class="modal-title" align="center"><b>Ubah Foto Profil</b></h4>
          </div>
          <div class="modal-body">
            <form action="config/ubah_foto.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" name="id_user" value="<?php echo $data['id_user'];?>">
                <label class="col-sm-2"></label>
                <label class="col-sm-2">Foto</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-5">
                      <input type="file" name="fileToUpload" id="fileToUpload" required>
                  </div>
              </div>
              
              <div class="form-group">
                  <label class="control-label col-sm-4"></label>
                  <div class="col-sm-6" align="right">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div>
  </div>