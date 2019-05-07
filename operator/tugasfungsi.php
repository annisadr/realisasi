
<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $id_user = $_GET['id_user'];
  $kdunit = $_GET['kdunit'];

  $edit    = "SELECT * FROM user WHERE id_user = '$id_user'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data1    = mysqli_fetch_array($hasil);

?>
<div class="container">
  <div class="module-head">
      <h3><large>TUGAS DAN FUNGSI</large></h3><hr><br>
  </div>
    
    <hr>
     <form class="form-horizontal" method="POST">
          <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM tugasdanfungsi ORDER BY id_tusi DESC")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<center><i>';
                      echo 'Belum ada berita!';
                      echo '</i></center>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<div class="col-md-12">';
                        echo '<div class="thumbnail">';
                        echo '<br>';
                        echo '<p><b>'.$data['judul_tusi'].'</b></p>';
                        echo '<hr>';
                        echo '<p align="justify">'.substr($data['tugasdanfungsi'], 0,300).'&nbsp;<a data-toggle="tooltip" data-placement="bottom" title="Baca selanjutnya" href=index.php?page=lihattusi&&id_tusi='.$data['id_tusi'].'&&id_user='.$data1['id_user'].'&&kdunit='.$data1['kdunit'].'>baca selanjutnya ..</a></p>';
                        echo '<p align="right"><i><font size="1px">'.$data['tgl_tusi'].'&nbsp;&nbsp;&nbsp;</font></i></p>';
                        echo '</div>';
                        echo '</div>';
                        $no++;  
                      }
                    }
              
                ?>
                    
        </tbody>
      </table>
    </form>
   
  </div>
</div>
  