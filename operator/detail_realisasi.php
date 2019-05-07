<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $kdunit = $_GET['kdunit'];
  $wbws = $_GET['wbws'];

  $edit    = "SELECT * FROM d_simponi WHERE kdunit = '$kdunit' AND wbws = '$wbws'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

  $id_user = $_GET['id_user'];

  $edit1    = "SELECT * FROM user WHERE id_user = '$id_user'";
  $hasil1   = mysqli_query($konek, $edit1)or die(mysql_error());
  $data1    = mysqli_fetch_array($hasil1);

?>
<div class="container">
  <div class="col-sm-12">
  <div class="well">
    <h5><a href="index.php?page=realisasi">Realisasi PNBP</a> /
      <a href="index.php?page=realisasi">Data Realisasi PNBP</a> / Data Lengkap Realisasi</h5>
  </div>

  <div class="col-md-12" style="min-height:500px">
  <h3><b>Data Lengkap</b> Realisasi</h3>
    <hr>
    <p align="left">
      <a href="#">
        <button type="button" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-print"></span> Print
        </button>
      </a>
    </p>

    <form class="form-horizontal" action="#" method="POST">
    <input type="hidden" name="kdunit" value="<?php echo $kdunit?>">
    <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">Data Lengkap Realisasi</div>
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
        <th><font size="2px">Kode Unit</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kdunit'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Wajib Bayar/Wajib Setor</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['wbws'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Tanggal Setor</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tanggal_str'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode Klus</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kode_klus'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode Billing</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kode_billing'];?></font></i></td>
      </tr>
       <tr>
        <th><font size="2px">Kode BP</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kode_bp'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">NTPN</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['NTPN'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">ntbntp</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['ntbntp'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode UF</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kode_uf'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Kode MU</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['kode_mu'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Akun</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['akun'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Jumlah Setoran</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['jml_setoran'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Tanggal</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tanggal'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Tahun</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['tahun'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Akun 3d</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['akun_3d'];?></font></i></td>
      </tr>
      <tr>
        <th><font size="2px">Akun 4d</font></th>
        <td width="800"><i><font size="2px"><?php echo $data['akun_4d'];?></font></i></td>
      </tr>
  </table>
  <p align="right">&nbsp;&nbsp;
    <a href="index.php?page=realisasi&&id_user=<?php echo $data1['id_user']; ?>&&kdunit=<?php echo $data1['kdunit']; ?>"><button type="button" class="btn btn-primary">Kembali</button></a>
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