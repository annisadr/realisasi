<?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id_tusi = $_GET['id_tusi'];

    $edit    = "SELECT * FROM tugasdanfungsi WHERE id_tusi = '$id_tusi'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>

<div class="container">
  <h3><b>Edit</b> Tugas dan Fungsi</h3><hr>
  <h6>
    <a href="index.php?page=realisasi">Tugas dan Fungsi</a> > Edit Tugas dan Fungsi
  </h6>
</div>

  
<div class="col-md-10" style="min-height:500px">
  
    <br>
    <br>
    <form class="form-horizontal" action="../config/proses_edittusi.php" method="POST">
        <input type="hidden" name="id_tusi" value="<?php echo $id_tusi ?>">
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Judul</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="judul_tusi" type="text" value="<?php echo $data['judul_tusi']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Tanggal</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <input class="form-control" name="tgl_tusi" type="text" value="<?php echo $data['tgl_tusi']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1"></label>
            <label class="col-sm-2">Tugas dan Fungsi</label>
            <label class="col-sm-1">:</label>
            <div class="col-sm-7">
                <textarea class="form-control" name="tugasdanfungsi" type="text"><?php echo $data['tugasdanfungsi']; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-7" align="right">
                <button class="btn btn-primary">Edit</button>
            </div>
        </div>
    </form>
</div>