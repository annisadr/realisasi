<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $kdunit = $_GET['kdunit'];

  $edit    = "SELECT * FROM r_unit WHERE kdunit = '$kdunit'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>
<div class="container">
  <div class="col-sm-12">
  <div class="well">
    <h5><a href="index.php?page=lpnbp">Realisasi PNBP Per-Unit</a> /
      Data Lengkap Unit</h5>
  </div>

  <div class="col-md-12" style="min-height:500px">
  <h3><b>Data Lengkap</b> Unit</h3>
    <hr>
    <form class="form-horizontal" action="#" method="POST">
    
    <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">Data Lengkap Unit</div>
      <div class="panel-body">
        <table class="table">
          <tr>
          <td><br><p align="center"><font size="5px"><b>KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT</b></font><br>
                  <font size="6px"><b>BIRO KEUANGAN</b></font><br>Jl. Pattimura 20, Jakarta Selatan 12110</p></td>
          </tr>
        </table>
    
    <table class="table table-bordered">  
      <tr>
        <th><font size="2px">Kode Unit</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdunit'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Baes1</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['baes1'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Nama Unit</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nmunit'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode Aktif</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdaktif'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">URL</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['url'];?></font></i></td>
      </tr>
  </table>
  <p align="right">&nbsp;&nbsp;<a href="index.php?page=lpnbp"><button type="button" class="btn btn-primary">Kembali</button></a></p>

</div>
</div>
</form> 
</div>
</div>
</div>
</div>
</div>