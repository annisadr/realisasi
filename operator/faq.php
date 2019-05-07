<div class="module">

    <div class="module-head">
        <h3><large>FAQ</large></h3><hr><br>
        <a href="index.php?page=tambahfaq" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-plus"></span> Tambah Data 
        </a>
    </div><br>

    <div class="module-body table">
        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
            <thead>
                <tr style="font-size: 12px; background-color: #d9d9d9; border-color: black;">
                    <th style="text-align: center;">ID</th>
                    <th style="text-align: center;">PERTANYAAN</th>
                    <th style="text-align: center;">TANGGAL PERTANYAAN</th>
                    <th style="text-align: center;">JAWABAN</th>
                    <th style="text-align: center;">TANGGAL JAWABAN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include '../config/koneksi.php';
                    $query = mysqli_query($konek, "SELECT * FROM faq") or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){
                        echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
                    }
                    else{
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                            echo '<tr align="center">';
                                echo '<td><font size="2px">'.$data['id_faq'].'</font></td>';
                                echo '<td><font size="2px">'.$data['pertanyaan'].'</font></td>';
                                echo '<td><font size="2px">'.$data['tgl_tanya'].'</font></td>';
                                echo '<td><font size="2px">'.$data['jawaban'].'</font></td>';
                                echo '<td><font size="2px">'.$data['tgl_jawab'].'</font></td>';
                            echo '</tr>';
                            $no++;
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</div><!--/.module-->
<br />