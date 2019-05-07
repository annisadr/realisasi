<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_tusi = $_GET['id_tusi'];

    $edit    = "SELECT * FROM tugasdanfungsi WHERE id_tusi = '$id_tusi'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);



    $id_user = $_GET['id_user'];
      $kdunit = $_GET['kdunit'];

      $edit    = "SELECT * FROM user WHERE id_user = '$id_user'";
      $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
      $data1    = mysqli_fetch_array($hasil);

?>

<div class="container">
    <h3><b>Lihat Tugas dan Fungsi</b> Selengkapnya<hr></h3><h6>
    <a href="index.php?page=tf&&id_user=<?php echo $data1['id_user']; ?>&&kdunit=<?php echo $data1['kdunit']; ?>>">Tugas dan Fungsi</a> > Lihat Tugas dan Fungsi Selengkapnya
  </h6><br><br>

<div class="col-md-12" style="min-height:500px">
    <div class="thumbnail">
        <div class="caption">
            <h2 align="center"><b>" <?php echo $data['judul_tusi']; ?> "</b></h2>
            <hr>
            <br>
            <p><?php echo $data['tugasdanfungsi']; ?></p>
        </div>
    </div>
</div>
</div>