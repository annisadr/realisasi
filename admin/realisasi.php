<script type="text/javascript" src="../jquery-3.2.1.min.js"></script>
<body>
    <div class="container">
        <div class="module-head">
            <h3><large>REALISASI PNBP</large></h3><hr><br>
        </div><br>
        <div class="col-sm-3" align="right">
            <a href="index.php?page=trealisasi" class="btn btn-primary btn-lg">
                <span class="glyphicon glyphicon-plus"></span> Tambah Data Realisasi PNBP
            </a>
        </div>
    </div><br>

    <div id="content" class="col-lg-12 col-sm-12">
        
        <form class="form-horizontal" action="" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-3" for="select">Unit :</label>
                <div class="col-sm-7">
                    <select class="form-control" id="kdunit" name="kdunit">
                        <option selected="selected">--Pilih Unit--</option>
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
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="select">Satuan Kerja :</label>
                <div class="col-sm-7">
                    <select class="form-control" id="kdsatker" name="kdsatker">
                        <option selected="selected">--Pilih Satuan Kerja--</option>
                            
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="select">Jenis Laporan :</label>
                <div class="col-sm-7">
                    <select class="form-control" id="jenis" name="jenis">
                        <option>--Pilih Jenis Laporan--</option>
                        <option value="U">U</option>
                        <option value="F">F</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="select">Tanggal :</label>
                <div class="col-sm-2">
                    <a href="#">
                        <input type="date" class="form-control input-md" id="tanggalawal" name="tanggalawal"/>            
                    </a>
                </div>
                <div class="col-sm-1" align="center">s/d</div>
                <div class="col-sm-2">
                    <a href="#">
                        <input type="date" class="form-control input-md" id="tanggalakhir" name="tanggalakhir"/>
                    </a>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10" align="right">
                    <button type="submit" class="btn btn-success" name="cari">
                        <span class="glyphicon glyphicon-search"></span> Search</button>
                </div>
            </div>
        </form>
        <?php

        if(isset($_POST['cari'])){
            $kdunit = $_POST['kdunit'];
            $kdsatker = $_POST['kdsatker'];
            $jenis = $_POST['jenis'];
            $tanggalawal = $_POST['tanggalawal'];
            $tanggalakhir = $_POST['tanggalakhir'];

            ?>
            <script>
                window.location='index.php?page=realisasi&&kdunit=<?php echo $kdunit; ?>&&kdsatker=<?php echo $kdsatker; ?>&&jenis=<?php echo $jenis; ?>&&tanggalawal=<?php echo $tanggalawal; ?>&&tanggalakhir=<?php echo $tanggalakhir; ?>';
            </script>
        
            <?php
        }
        ?>

        <?php
        if(isset($_GET['kdunit'],$_GET['kdsatker'],$_GET['jenis'],$_GET['tanggalawal'],$_GET['tanggalakhir'])){
            ?>

            <div class="box-content"><br><br><br>

                <div class="col-sm-1" align="right">
                    <a href="print_realisasi.php&&kdunit=<?php echo $kdunit; ?>&&kdsatker=<?php echo $kdsatker; ?>&&jenis=<?php echo $jenis; ?>&&tanggalawal=<?php echo $tanggalawal; ?>&&tanggalakhir=<?php echo $tanggalakhir; ?>" class="btn btn-info btn-md">
                        <span class="glyphicon glyphicon-print"></span> Print
                    </a>
                </div><br><br><br>

                <table>
                    <?php
                    $getkdunit = $_GET['kdunit'];
                    $getkdsatker = $_GET['kdsatker'];
                    $getjenis = $_GET['jenis'];
                    $gettanggalawal = $_GET['tanggalawal'];
                    $gettanggalakhir = $_GET['tanggalakhir'];
                    ?>
                    <tr>
                        <td style="padding-left: 30px; padding-right: 30px;">Kode Unit</td>
                        <td style="padding-left: 20px; padding-right: 20px;">:</td>
                        <td><?php echo $getkdunit; ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 30px; padding-right: 30px;">Kode Satuan Kerja</td>
                        <td style="padding-left: 20px; padding-right: 20px;">:</td>
                        <td><?php echo $getkdsatker; ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 30px; padding-right: 30px;">Kode U/F</td>
                        <td style="padding-left: 20px; padding-right: 20px;">:</td>
                        <td><?php echo $getjenis; ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 30px; padding-right: 30px;">Tanggal Awal</td>
                        <td style="padding-left: 20px; padding-right: 20px;">:</td>
                        <td><?php echo $gettanggalawal; ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 30px; padding-right: 30px;">Tanggal Akhir</td>
                        <td style="padding-left: 20px; padding-right: 20px;">:</td>
                        <td><?php echo $gettanggalakhir; ?></td>
                    </tr>

                </table><br><br>


                <table class="table table-striped table-bordered table-hover table-responsive" id="datatable">

                    <thead>
                        <tr style="font-size: 10px; text-align: center; background-color: #d9d9d9; border-color: black;">
                            <th style="text-align: center;">NO</th>
                            <th style="text-align: center;">KODE UNIT</th>
                            <th style="text-align: center;">KODE SATKER</th>
                            <th style="text-align: center;">WAJIB BAYAR / WAJIB SETOR</th>
                            <th style="text-align: center;">KODE KLUS</th>
                            <th style="text-align: center;">KODE BILLING</th>
                            <th style="text-align: center;">KODE BP</th>
                            <th style="text-align: center;">NTPN</th>
                            <th style="text-align: center;">NTB / NTP</th>
                            <th style="text-align: center;">KODE UF</th>
                            <th style="text-align: center;">JUMLAH</th>
                            <th style="text-align: center;">TANGGAL</th>
                            <th style="text-align: center;">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../config/koneksi.php";

                        $sql = mysqli_query($konek, "SELECT * FROM d_simponi as S LEFT JOIN r_satker as D on D.kdsatker = S.kdsatker LEFT JOIN r_unit as U on U.kdunit = D.kdunit WHERE D.kdaktif = 1 AND D.kdunit = '$getkdunit' AND D.kdsatker = '$getkdsatker' AND S.kode_uf = '$getjenis' AND S.tanggal BETWEEN '$gettanggalawal' AND '$gettanggalakhir'");
                        $no=0;

                        while ($tampil = mysqli_fetch_array($sql)) {

                            $no++;
                            // gradasi warna
                            if($no%2==1) { $warna=""; } else {$warna="#F5F5F5";}

                            echo '<tr bgcolor='.$warna.'>';
                            echo '<td>'.$no.'</td>';	//menampilkan nomor urut
    						echo '<td><font size="1px">'.$tampil['kdunit'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['kdsatker'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['wbws'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['kode_klus'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['kode_billing'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['kode_bp'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['NTPN'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['ntbntp'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['kode_uf'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['jml_setoran'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['tanggal'].'</font></td>';
                            echo '<td><a href="index.php?page=drealisasi&&kdunit='.$tampil['kdunit'].'&&wbws='.$tampil['wbws'].'&&NTPN='.$tampil['NTPN'].'"><span class="glyphicon glyphicon-zoom-in"></span></a>
                            <a href="index.php?page=erealisasi&&kdunit='.$tampil['kdunit'].'&&wbws='.$tampil['wbws'].'&&NTPN='.$tampil['NTPN'].'"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="../config/delete_realisasi.php?kdunit='.$tampil['kdunit'].'&&wbws='.$tampil['wbws'].'&&NTPN='.$tampil['NTPN'].'"><span class="glyphicon glyphicon-trash"></span></a></td>';
                            echo '</tr>';
                        }
                        ?>
                            
                    </tbody>
                    <tr>
                    <td colspan='10' style="padding-left: 50px;">Total</td>
                    <td colspan="1">
                        <?php

                            $querytampil = mysqli_query($konek, "SELECT SUM(D.jml_setoran) as realisasi
                                FROM r_unit AS U
                                LEFT JOIN r_satker AS S ON S.kdunit = U.kdunit
                                LEFT JOIN d_simponi AS D ON D.kdsatker = S.kdsatker
                                WHERE S.kdaktif = 1 AND D.kdunit = '$getkdunit' AND S.kdsatker = '$getkdsatker' AND D.kode_uf = '$getjenis' AND D.tanggal BETWEEN '$gettanggalawal' AND '$gettanggalakhir'")or die(mysqli_error($konek));
                            $data = mysqli_fetch_array($querytampil);
                            echo "".$data['realisasi']."";
                        ?>
                    </td>
                    <td colspan='2' style="padding-left: 50px;"></td>
                </tr>
                </table>
            </div>
            <?php
        }
        ?>

            <?php
        if(!isset($_GET['kdunit'],$_GET['kdsatker'],$_GET['jenis'],$_GET['tanggalawal'],$_GET['tanggalakhir'])){
            ?>

            <div class="box-content"><br><br><br>
                <div class="col-sm-1" align="right">
                    <a href="#" class="btn btn-info btn-md">
                        <span class="glyphicon glyphicon-print"></span> Print
                    </a>
                </div><br><br><br>

                <table class="table table-striped table-bordered table-hover table-responsive" id="datatable">

                    <thead>
                        <tr style="font-size: 10px; text-align: center; background-color: #d9d9d9; border-color: black;">
                            <th style="text-align: center;">NO</th>
                            <th style="text-align: center;">KODE UNIT</th>
                            <th style="text-align: center;">KODE SATKER</th>
                            <th style="text-align: center;">WAJIB BAYAR / WAJIB SETOR</th>
                            <th style="text-align: center;">KODE KLUS</th>
                            <th style="text-align: center;">KODE BILLING</th>
                            <th style="text-align: center;">KODE BP</th>
                            <th style="text-align: center;">NTPN</th>
                            <th style="text-align: center;">NTB / NTP</th>
                            <th style="text-align: center;">KODE UF</th>
                            <th style="text-align: center;">JUMLAH</th>
                            <th style="text-align: center;">TANGGAL</th>
                            <th style="text-align: center;">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../config/koneksi.php";

                        $sql = mysqli_query($konek, "SELECT * FROM d_simponi as S LEFT JOIN r_satker as D on D.kdsatker = S.kdsatker LEFT JOIN r_unit as U on U.kdunit = D.kdunit WHERE D.kdaktif = 1");
                        $no=0;

                        while ($tampil = mysqli_fetch_array($sql)) {

                            $no++;
                            // gradasi warna
                            if($no%2==1) { $warna=""; } else {$warna="#F5F5F5";}

                            echo '<tr bgcolor='.$warna.'>';
                            echo '<td>'.$no.'</td>';    //menampilkan nomor urut
                            echo '<td><font size="1px">'.$tampil['kdunit'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['kdsatker'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['wbws'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['kode_klus'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['kode_billing'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['kode_bp'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['NTPN'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['ntbntp'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['kode_uf'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['jml_setoran'].'</font></td>';
                            echo '<td><font size="1px">'.$tampil['tanggal'].'</font></td>';
                            echo '<td><a href="index.php?page=drealisasi&&kdunit='.$tampil['kdunit'].'&&wbws='.$tampil['wbws'].'&&NTPN='.$tampil['NTPN'].'"><span class="glyphicon glyphicon-zoom-in"></span></a>
                            <a href="index.php?page=erealisasi&&kdunit='.$tampil['kdunit'].'&&wbws='.$tampil['wbws'].'&&NTPN='.$tampil['NTPN'].'"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="../config/delete_realisasi.php?kdunit='.$tampil['kdunit'].'&&wbws='.$tampil['wbws'].'&&NTPN='.$tampil['NTPN'].'"><span class="glyphicon glyphicon-trash"></span></a></td>';
                            echo '</tr>';
                        }
                        ?>
                            
                    </tbody>
                    <tr>
                        <td colspan='10' style="padding-left: 50px;">Total</td>
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
                        <td colspan='2' style="padding-left: 50px;"></td>
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