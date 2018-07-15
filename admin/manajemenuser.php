<div class="container">
    <h3><large>MANAJEMEN USER</large></h3><hr><br>
        <a href="index.php?page=su" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-plus"></span> Tambah Data 
        </a>
    </div><br>
</div>
    
    <div class="row">
        <table class="table table-striped table-bordered table-hover table-responsive" id="datatable">
            <thead>
                <tr style="font-size: 10px; text-align: center; background-color: #d9d9d9; border-color: black;">
                    <th style="text-align: center;">NO</th>
                    <th style="text-align: center;">ID</th>
                    <th style="text-align: center;">NAMA</th>
                    <th style="text-align: center;">NO. TLP</th>
                    <th style="text-align: center;">NO. HP</th>
                    <th style="text-align: center;">EMAIL</th>
                    <th style="text-align: center;">NIP</th>
                    <th style="text-align: center;">NO. IDENTITAS</th>
                    <th style="text-align: center;">KODE UNIT</th>
                    <th style="text-align: center;">KODE SATKER</th>
                    <th style="text-align: center;">USERNAME</th>
                    <th style="text-align: center;">LEVEL</th>
                    <th style="text-align: center;">ACTION</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                    include '../config/koneksi.php';
                    $no_urut = 0;
                    $query = mysqli_query($konek, "SELECT * FROM user") or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){
                        echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
                    }
                    else{
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                            $no_urut++;
                            echo '<tr align="center">';
                                echo '<td><font size="2px">'.$no_urut.'</font></td>';
                                echo '<td><font size="2px">'.$data['id_user'].'</font></td>';
                                echo '<td style="text-transform: capitalize;"><font size="2px">'.$data['nama'].'</font></td>';
                                echo '<td><font size="2px">'.$data['no_tlp'].'</font></td>';
                                echo '<td><font size="2px">'.$data['no_hp'].'</font></td>';
                                echo '<td><font size="2px">'.$data['email'].'</font></td>';
                                echo '<td><font size="2px">'.$data['nip'].'</font></td>';
                                echo '<td><font size="2px">'.$data['no_identitas'].'</font></td>';
                                echo '<td><font size="2px">'.$data['kdunit'].'</font></td>';
                                echo '<td><font size="2px">'.$data['kdsatker'].'</font></td>';
                                echo '<td><font size="2px">'.$data['username'].'</font></td>';
                                echo '<td><font size="2px">'.$data['level'].'</font></td>';
                                echo '<td><a href=index.php?page=duser&&id_user='.$data['id_user'].'><span class="glyphicon glyphicon-zoom-in"></span></a>&nbsp;&nbsp;&nbsp;
                                <a href=index.php?page=euser&&id_user='.$data['id_user'].'><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;&nbsp;
                                <a href="../config/delete_useroperator.php?id_user='.$data['id_user'].'"><span class="glyphicon glyphicon-trash"></span></a></td>';
                            echo '</tr>';
                            $no++;
                        }
                    }
                ?>
            </tbody>
        </table>
      </div>
    </div>

<!--     <script>
        function myFunction() {
        // Declare variables 
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
        } else {
        tr[i].style.display = "none";
        }
        } 
        }
        }
</script>
 -->


   