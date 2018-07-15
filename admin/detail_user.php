<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $id_user = $_GET['id_user'];

  $edit    = "SELECT * FROM user WHERE id_user = '$id_user'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>
<div class="container">
  <div class="col-sm-12">
  <div class="well">
    <h5><a href="index.php?page=menuser">Manajemen User</a> /
      <a href="index.php?page=menuser">Data User</a> / Data Lengkap User</h5>
  </div>

  <div class="col-md-12" style="min-height:500px">
  <h3><b>Data Lengkap</b> User</h3>
    <hr>
    <p align="left">
      <a href="../print_user.php">
        <button type="button" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-print"></span> Print
        </button>
      </a>
    </p>

    <form class="form-horizontal" action="#" method="POST">
    
    <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">Data Lengkap User</div>
      <div class="panel-body">
        <table class="table">
          <tr>
          <td><br><p align="center"><font size="5px"><b>KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT</b></font><br>
                  <font size="6px"><b>BIRO KEUANGAN</b></font><br>Jl. Pattimura 20, Jakarta Selatan 12110</p></td>
          </tr>
        </table>
    
    <table class="table table-bordered">  
      <tr>
        <input type="hidden" name="id_user" value="<?php echo $id_user?>">
        <th><font size="2px">Nama</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nama'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Alamat</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['alamat'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">RT</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['rt'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">RW</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['rw'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kelurahan</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kelurahan'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kecamatan</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kecamatan'];?></font></i></td>
      </tr>
       <tr>
        <th><font size="2px">Provinsi</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['provinsi'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kabupaten / Kota</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kabkota'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Negara</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['negara'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">No Telepon</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['no_tlp'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">No Handphone</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['no_hp'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Email</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['email'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Nomor Induk Pegawai</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nip'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Jenis Identitas</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['jenis_identitas'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Nomor Identitas</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['no_indentitas'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Unit</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdunit'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Satuan Kerja</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdsatker'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Username</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['username'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Level</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['level'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Foto</font></th>
        <td width="800"><i><font size="2px"><a data-toggle="tooltip" data-placement="right" title="Lihat Gambar" href="<?php echo $data['syarat_foto'] ?>" target="_blank"><?php echo $data['syarat_foto'] ?></a></font></i></td>
      </tr>
  </table>
  <p align="right">&nbsp;&nbsp;<a href="index.php?page=menuser"><button type="button" class="btn btn-primary">Kembali</button></a></p>

</div>
</div>
</form> 
</div>
</div>
</div>
</div>
</div>