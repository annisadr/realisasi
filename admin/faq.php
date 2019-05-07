<div class="container">
    <h3><large>FAQ</large></h3><hr><br>
        <a href="index.php?page=tambahfaq" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-plus"></span> Tambah Data 
        </a>

        <a href="printfaq.php" target ="_blank" role="button" type="button" class="btn btn-success btn-lg">
          <span class="glyphicon glyphicon-plus"></span> PRINT NIH CERITANYA
        </a>
    </div><br>
</div>
    
    <div class="row">
        <table class="table table-striped table-hover table-responsive">
            <thead>
                <tr style="font-size: 10px; text-align: center; background-color: #d9d9d9; border-color: black;">
                    <th style="text-align: center;">NO</th>
                    <th style="text-align: center;">ID</th>
                    <th style="text-align: center;">PERTANYAAN</th>
                    <th style="text-align: center;">TANGGAL PERTANYAAN</th>
                    <th style="text-align: center;">JAWABAN</th>
                    <th style="text-align: center;">TANGGAL JAWABAN</th>
                    <th style="text-align: center;">ACTION</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                    include '../config/koneksi.php';
                    $no_urut = 0;
                    $query = mysqli_query($konek, "SELECT * FROM faq") or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){
                        echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
                    }
                    else{
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                            $no_urut++;
                            echo '<tr align="center">';
                                echo '<td><font size="2px">'.$no_urut.'</font></td>';
                                echo '<td><font size="2px">'.$data['id_faq'].'</font></td>';
                                echo '<td><font size="2px">'.$data['pertanyaan'].'</font></td>';
                                echo '<td><font size="2px">'.$data['tgl_tanya'].'</font></td>';
                                echo '<td><font size="2px">'.$data['jawaban'].'</font></td>';
                                echo '<td><font size="2px">'.$data['tgl_jawab'].'</font></td>';
                                echo '<td><a href=index.php?page=editfaq&&id_faq='.$data['id_faq'].'><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="../config/delete_faq.php?id_faq='.$data['id_faq'].'"><span class="glyphicon glyphicon-trash"></span></a</td>';
                            echo '</tr>';
                            $no++;
                        }
                    }
                ?>  
            </tbody>
        </table>
      </div>
    </div>