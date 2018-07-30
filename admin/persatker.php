<script type="text/javascript" src="../jquery-3.2.1.min.js"></script>
<body>
    <div class="container">
        <div class="module-head">
            <h3><large>REALISASI PNBP PER - SATKER</large></h3><hr><br>
        </div><br>
        <div class="col-sm-3">
            <a href="index.php?page=tsatker" class="btn btn-primary btn-lg">
              <span class="glyphicon glyphicon-plus"></span> Tambah Data Satuan Kerja
            </a>
        </div>
    </div><br>

    <div id="content" class="col-lg-12 col-sm-12">
        
        <form class="form-horizontal" action="" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-4" for="select">Unit :</label>
                <div class="col-sm-4">
                    <select class="form-control" id="kdunit" name="kdunit">
                        <option selected="selected" value="">--Pilih Unit--</option>
                        <?php
                        include '../config/koneksi.php';
                        $sel_prov="select * from r_unit";
                        $q=mysqli_query($konek,$sel_prov);
                        while($data_prov=mysqli_fetch_array($q)){
                            ?>
                            <option value="<?php echo $data_prov["kdunit"] ?>"><?php echo $data_prov["kdunit"] ?> | <?php echo $data_prov["nmunit"] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-sm-1" align="right">
                    <button type="submit" class="btn btn-success" name="cari">
                        <span class="glyphicon glyphicon-search"></span> Search
                    </button>
                </div>
            </div>
        </form>

        <?php

        if(isset($_POST['cari'])){
            $kdunit = $_POST['kdunit'];
            

            ?>
            <script>
                window.location='index.php?page=persatker&&kdunit=<?php echo $kdunit; ?>';
            </script>
        
            <?php
        }
        ?>

        <?php
        if(isset($_GET['kdunit'])){
            ?>

            <div class="box-content"><br><br><br>


                <table>
                    <?php
                        $getkdunit = $_GET['kdunit'];
                    ?>
                    <tr>
                        <div class="col-sm-1" align="right">
                            <a href="print_satkerunit.php?kdunit=<?php echo $getkdunit ?>" class="btn btn-info btn-md" target ="_blank">
                                <span class="glyphicon glyphicon-print"></span> Print
                            </a>
                        </div><br><br><br>
                    </tr>
                    <tr>
                        <td style="padding-left: 30px; padding-right: 30px;">Kode Unit</td>
                        <td style="padding-left: 20px; padding-right: 20px;">:</td>
                        <td><?php echo $getkdunit; ?></td>
                    </tr>

                </table><br><br>


                <table class="table table-striped table-bordered table-hover table-responsive" id="datatable">

                    <thead>
                        <tr style="font-size: 12px; background-color: #d9d9d9; border-color: black;">
                            <th style="text-align: center;">NO</th>
                            <th style="text-align: center;">KODE SATKER</th>
                            <th style="text-align: center;">NAMA SATKER</th>
                            <th style="text-align: center;">KODE UNIT</th>
                            <th style="text-align: center;">KODE AKTIF</th>
                            <th style="text-align: center;">JUMLAH SETORAN</th>
                            <th style="text-align: center;">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../config/koneksi.php";

                        $sql = mysqli_query($konek, "SELECT S.kdsatker, S.nmsatker, S.kdunit, S.kdaktif, sum(D.jml_setoran) AS realisasi FROM d_simponi AS D LEFT JOIN r_satker AS S ON S.kdsatker = D.kdsatker LEFT JOIN r_unit AS U on U.kdunit = S.kdunit WHERE S.kdaktif = 1 AND D.kdunit = '$getkdunit' GROUP BY S.kdsatker");
                        $no=0;

                        while ($tampil = mysqli_fetch_array($sql)) {

                            $no++;
                            // gradasi warna
                            if($no%2==1) { $warna=""; } else {$warna="#F5F5F5";}

                            echo '<tr bgcolor='.$warna.'>';
                                echo '<td>'.$no.'</td>';	//menampilkan nomor urut
                                echo '<td><font size="2px">'.$tampil['kdsatker'].'</font></td>';
                                echo '<td><font size="2px">'.$tampil['nmsatker'].'</font></td>';
                                echo '<td><font size="2px">'.$tampil['kdunit'].'</font></td>';
                                echo '<td><font size="2px">'.$tampil['kdaktif'].'</font></td>';
                                echo '<td><font size="2px">'.$tampil['realisasi'].'</font></td>';
                                echo '<td><a href="index.php?page=dsatker&&kdsatker='.$tampil['kdsatker'].'"><span class="glyphicon glyphicon-zoom-in"></span></a>
                                <a href="index.php?page=esatker&&kdsatker='.$tampil['kdsatker'].'"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="../config/delete_satker.php?kdsatker='.$tampil['kdsatker'].'"><span class="glyphicon glyphicon-trash"></span></a></td>';
                            echo '</tr>';
                        }
                        ?>
                            
                    </tbody>
                    <tr>
                    <td colspan='5' style="padding-left: 50px;">Total</td>
                    <td colspan="1">
                        <?php

                            $querytampil = mysqli_query($konek, "SELECT SUM(D.jml_setoran) as realisasi
                                FROM r_unit AS U
                                LEFT JOIN r_satker AS S ON S.kdunit = U.kdunit
                                LEFT JOIN d_simponi AS D ON D.kdsatker = S.kdsatker
                                WHERE   S.kdaktif = 1 AND D.kdunit = '$getkdunit'")or die(mysqli_error($konek));
                            $data = mysqli_fetch_array($querytampil);
                            echo "".$data['realisasi']."";
                        ?>
                    </td>
                    <td colspan='3' style="padding-left: 50px;"></td>
                </tr>
                </table>
            </div>
            <?php
        }
        ?>

            <?php
        if(!isset($_GET['kdunit'])){
            ?>

            <div class="box-content"><br><br><br>
                <table>
                    
                    <tr>
                        <div class="col-sm-1" align="right">
                            <a href="print_persatker.php" target ="_blank" class="btn btn-info btn-md">
                                <span class="glyphicon glyphicon-print"></span> Print
                            </a>
                        </div><br><br><br>
                    </tr>
                </table><br><br>

                <table class="table table-striped table-bordered table-hover table-responsive" id="datatable">

                    <thead>
                        <tr style="font-size: 12px; background-color: #d9d9d9; border-color: black;">
                            <th style="text-align: center;">NO</th>
                            <th style="text-align: center;">KODE SATKER</th>
                            <th style="text-align: center;">NAMA SATKER</th>
                            <th style="text-align: center;">KODE UNIT</th>
                            <th style="text-align: center;">KODE AKTIF</th>
                            <th style="text-align: center;">JUMLAH SETORAN</th>
                            <th style="text-align: center;">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../config/koneksi.php";

                        $sql = mysqli_query($konek, "SELECT S.kdsatker, S.nmsatker, S.kdunit, S.kdaktif, sum(D.jml_setoran) AS realisasi FROM d_simponi AS D LEFT JOIN r_satker AS S ON S.kdsatker = D.kdsatker LEFT JOIN r_unit AS U on U.kdunit = S.kdunit WHERE S.kdaktif = 1 GROUP BY S.kdsatker");
                        $no=0;

                        while ($tampil = mysqli_fetch_array($sql)) {

                            $no++;
                            // gradasi warna
                            if($no%2==1) { $warna=""; } else {$warna="#F5F5F5";}

                            echo '<tr bgcolor='.$warna.'>';
                                echo '<td>'.$no.'</td>';    //menampilkan nomor urut
                                echo '<td><font size="2px">'.$tampil['kdsatker'].'</font></td>';
                                echo '<td><font size="2px">'.$tampil['nmsatker'].'</font></td>';
                                echo '<td><font size="2px">'.$tampil['kdunit'].'</font></td>';
                                echo '<td><font size="2px">'.$tampil['kdaktif'].'</font></td>';
                                echo '<td><font size="2px">'.$tampil['realisasi'].'</font></td>';
                                echo '<td><a href="index.php?page=dsatker&&kdsatker='.$tampil['kdsatker'].'"><span class="glyphicon glyphicon-zoom-in"></span></a>
                                <a href="index.php?page=esatker&&kdsatker='.$tampil['kdsatker'].'"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="../config/delete_satker.php?kdsatker='.$tampil['kdsatker'].'"><span class="glyphicon glyphicon-trash"></span></a></td>';
                            echo '</tr>';
                        }
                        ?>
                            
                    </tbody>
                    <tr>
                        <td colspan='5' style="padding-left: 50px;">Total</td>
                        <td align="center">
                            <?php

                                $querytampil = mysqli_query($konek, "SELECT SUM(D.jml_setoran) as realisasi
                                FROM r_unit AS U
                                LEFT JOIN r_satker AS S ON S.kdunit = U.kdunit
                                LEFT JOIN d_simponi AS D ON D.kdsatker = S.kdsatker
                                WHERE   S.kdaktif = 1")or die(mysqli_error($konek));
                                $data = mysqli_fetch_array($querytampil);
                                echo "".$data['realisasi']."";
                            ?>
                        </td>
                        <td colspan='3' style="padding-left: 50px;"></td>
                    </tr>
                </table>
            </div>

            <?php
        }
        ?>

    </div>

</body>

<script type="text/javascript">
    $("#kdunit").change(function(){
    
        // variabel dari nilai combo box provinsi
        var kdunit = $("#kdunit").val();
        
        // mengirim dan mengambil data
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "ajax_unit.php",
            data: "kdunit="+kdunit,
            success: function(msg){
                
                // jika tidak ada data
                if(msg == ''){
                    alert('Tidak ada data Unit');
                }
                
                // jika dapat mengambil data,, tampilkan di combo box kota
                else{
                    $("#kdsatker").html(msg);                                                      
                }
                
            }
        });     
    });
</script>