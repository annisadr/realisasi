<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $kdsatker = $_GET['kdsatker'];

  $edit    = "SELECT * FROM r_satker WHERE kdsatker = '$kdsatker'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>
<div class="container">
  <div class="col-sm-12">
  <div class="well">
    <h5><a href="index.php?page=persatker">Realisasi PNBP Per-Satuan Kerja</a> /
      Data Lengkap Satuan Kerja</h5>
  </div>

  <div class="col-md-12" style="min-height:500px">
  <h3><b>Data Lengkap</b> Satuan Kerja</h3>
    <hr>
    <p align="left">
      <a href="#">
        <button type="button" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-print"></span> Print
        </button>
      </a>
    </p>
    
    <form class="form-horizontal" action="#" method="POST">
    
    <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">Data Lengkap Satuan Kerja</div>
      <div class="panel-body">
        <table class="table">
          <tr>
          <td><br><p align="center"><font size="5px"><b>KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT</b></font><br>
                  <font size="6px"><b>BIRO KEUANGAN</b></font><br>Jl. Pattimura 20, Jakarta Selatan 12110</p></td>
          </tr>
        </table>
    
    <table class="table table-bordered">  
      <tr>
        <th><font size="2px">Kode Satuan Kerja</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdsatker'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Nama Satuan Kerja</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nmsatker'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode Department</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kddept'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode Unit</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdunit'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode Lokasi</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdlokasi'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode Kabupaten Kota</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdkabkota'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Nomor SP</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nomorsp'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode KPPN</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdkppn'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode Jenis Satuan</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdjnssat'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode Update</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdupdate'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Tanggal Update</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tgupdate'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">nodsupdate</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nodsupdate'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Jenis Sekolah</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['jnssekolah'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode Pusda</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdpusda'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode Satuan BLU</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdsatblu'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">IS BLU</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['isblu'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode Status BLU</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdstatblu'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">nosp dipal</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nosp_dipal'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">nosp bantu</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['nosp_bantu'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode Receh</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdreceh'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode Aktif</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdaktif'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">likuidasi</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['likuidasi'];?></font></i></td>
      </tr>
  </table>
  
  <p align="right">&nbsp;&nbsp;
    <a href="index.php?page=persatker"><button type="button" class="btn btn-primary">Kembali</button></a>
    <a href="#"><button type="button" class="btn btn-success">Ubah</button></a>
    <a href="#"><button type="button" class="btn btn-danger">Hapus</button></a>
  </p>

</div>
</div>
</form> 
</div>
</div>
</div>
</div>
</div>