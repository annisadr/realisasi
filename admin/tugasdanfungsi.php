<div class="container">
  <div class="col-sm-12" style="text-align: justify;">
    <div class="module-head">
        <h3><large>TUGAS DAN FUNGSI</large></h3><hr><br>
    </div><br>
    <div class="col-sm-1" align="left">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Tambah Tugas dan Fungsi</button>
    </div><br><br><br>

    <form class="form-horizontal" method="POST">
    <table class="table table-striped table-bordered table-hover table-responsive">
      <thead>
        <tr style="font-size: 10px; text-align: center; background-color: #d9d9d9; border-color: black;">
          <th style="text-align: center;">NO</th>
          <th style="text-align: center;">JUDUL</th>
          <th style="text-align: center;">TANGGAL</th>
          <th style="text-align: center;">TUGAS DAN FUNGSI</th>
          <th style="text-align: center;">ACTION</th>
        </tr>
      </thead>
      <tbody>

          <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tugasdanfungsi ORDER BY id_tusi DESC")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="5" align="center"><i>Tidak ada data!</i></td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['judul_tusi'].'</td>';
                        echo '<td>'.$data['tgl_tusi'].'</td>';
                        echo '<td><p align="justify">'.substr($data['tugasdanfungsi'], 0,100).'&nbsp; ...</p></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=index.php?page=etusi&&id_tusi='.$data['id_tusi'].'><span class="glyphicon glyphicon-edit"></span></a>&nbsp;
                        <a data-toggle="tooltip" data-placement="left" title="Delete" href=../config/proses_deletetusi.php?id_tusi='.$data['id_tusi'].'><span class="glyphicon glyphicon-trash"></span></a></td>';
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
            ?>              
      </tbody>
    </table>
  </form>
</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="background-color:#3bacd6";>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center"><b>Tambahkan tugas dan fungsi</b></h4>
          </div>
          <div class="modal-body">
            <form action="../config/proses_tambahtusi.php" class="form-horizontal" method="POST"  enctype="multipart/form-data">
              <div class="form-group">
                <label class="col-sm-1"></label>
                <label class="col-sm-2">Judul</label>
                <label class="col-sm-1">:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="judul_tusi" placeholder="Judul Tugas dan Fungsi" required>
                  </div>
              </div>
                    <input type="hidden" class="form-control" name="tgl_tusi" placeholder="Tanggal" value="<?php $tgl=date('d-m-Y'); echo $tgl; ?>" required>
              <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-2">Tugas dan Fungsi</label>
                  <label class="col-sm-1">:</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" id="tugasdanfungsi" name="tugasdanfungsi" placeholder="Tugas dan Fungsi" required>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-5"></label>
                  <div class="col-sm-6" align="right">
                      <button type="submit" class="btn btn-primary">Tambah Tugas dan Fungsi</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div>
  </div>
</div>