<script type="text/javascript" src="../jquery-3.2.1.min.js"></script>
<div class="col-sm-12">
    <div class="container">
    	<div class="module-head">
    		<h3><large>REALISASI PNBP</large></h3><hr><br>
    	</div><br>
    	<div class="col-sm-3" align="right">
    		<a href="index.php?page=trealisasi" class="btn btn-primary btn-lg">
    			<span class="glyphicon glyphicon-plus"></span> Tambah Data Realisasi PNBP
    		</a>
    	</div>
    	<div class="col-sm-9" align="right">
    		<a href="#" class="btn btn-default btn-md">
    			<span class="glyphicon glyphicon-refresh"></span> Refresh
    		</a>
    	</div>
    </div><br>

    <div class="row">
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
    			<div class="col-sm-3" align="right">
    				<a href="#" class="btn btn-info btn-md">
    					<span class="glyphicon glyphicon-print"></span> Print
    				</a>
                </div>
    			<div class="col-sm-7" align="right">
    				<button type="submit" class="btn btn-success" name="cari">
    					<span class="glyphicon glyphicon-search"></span> Search</button>
    			</div>
    		</div>
    	</form>

    </div>
    
    <div class="row">
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
                    include '../config/koneksi.php';
                    $no_urut = 0;
                    
                    if(!isset($_POST['cari'])){

                        $query  = mysqli_query($konek, "SELECT * FROM d_simponi as S LEFT JOIN r_satker as D on D.kdsatker = S.kdsatker LEFT JOIN r_unit as U on U.kdunit = D.kdunit WHERE D.kdaktif = 1")or die(mysqli_error($konek));
                                if(mysqli_num_rows($query) == 0){
                                    echo '<tr><td collspan="12" align="center">Tidak ada data!</td></tr>';
                                }
                                else{
                                    $no = 1;
                                    while ($data = mysqli_fetch_array($query)) {
                                        $no_urut++;
                                        echo '<tr align="center">';
                                            echo '<td><font size="2px">'.$no_urut.'</font></td>';
                                            echo '<td><font size="1px">'.$data['kdunit'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['kdsatker'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['wbws'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['kode_klus'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['kode_billing'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['kode_bp'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['NTPN'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['ntbntp'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['kode_uf'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['jml_setoran'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['tanggal'].'</font></td>';
                                            echo '<td><a href="index.php?page=drealisasi&&kdunit='.$data['kdunit'].'&&wbws='.$data['wbws'].'&&NTPN='.$data['NTPN'].'"><span class="glyphicon glyphicon-zoom-in"></span></a>
                                            <a href="index.php?page=erealisasi&&kdunit='.$data['kdunit'].'&&wbws='.$data['wbws'].'&&NTPN='.$data['NTPN'].'"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="../config/delete_realisasi.php?kdunit='.$data['kdunit'].'&&wbws='.$data['wbws'].'&&NTPN='.$data['NTPN'].'"><span class="glyphicon glyphicon-trash"></span></a></td>';
                                        echo '</tr>';
                                        $no++;
                                    }
                                }
                    }

                    else{
                        $kdunit = $_POST['kdunit'];
                        $kdsatker = $_POST['kdsatker'];
                        $jenis = $_POST['jenis'];
                        $tanggalawal = $_POST['tanggalawal'];
                        $tanggalakhir = $_POST['tanggalakhir'];

                        $query  = mysqli_query($konek, "SELECT *
FROM d_simponi as D
LEFT JOIN r_satker as S on D.kdsatker = S.kdsatker
LEFT JOIN r_unit as U on U.kdunit = D.kdunit
WHERE S.kdaktif = 1 AND S.kdunit = '$kdunit' AND D.kode_uf = '$jenis' AND S.kdsatker = '$kdsatker' AND D.tanggal BETWEEN '$tanggalawal' AND '$tanggalakhir'")or die(mysqli_error($konek));
                                if(mysqli_num_rows($query) == 0){
                                    echo '<tr><td collspan="12" align="center">Tidak ada data!</td></tr>';
                                }
                                else{
                                    $no = 1;
                                    while ($data = mysqli_fetch_array($query)) {
                                        $no_urut++;
                                        echo '<tr align="center">';
                                            echo '<td><font size="2px">'.$no_urut.'</font></td>';
                                            echo '<td><font size="1px">'.$data['kdunit'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['kdsatker'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['wbws'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['kode_klus'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['kode_billing'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['kode_bp'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['NTPN'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['ntbntp'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['kode_uf'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['jml_setoran'].'</font></td>';
                                            echo '<td><font size="1px">'.$data['tanggal'].'</font></td>';
                                            echo '<td><a href="index.php?page=drealisasi&&kdunit='.$data['kdunit'].'&&wbws='.$data['wbws'].'&&NTPN='.$data['NTPN'].'"><span class="glyphicon glyphicon-zoom-in"></span></a>
                                            <a href="index.php?page=erealisasi&&kdunit='.$data['kdunit'].'&&wbws='.$data['wbws'].'&&NTPN='.$data['NTPN'].'"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="../config/delete_realisasi.php?kdunit='.$data['kdunit'].'&&wbws='.$data['wbws'].'&&NTPN='.$data['NTPN'].'"><span class="glyphicon glyphicon-trash"></span></a></td>';
                                        echo '</tr>';
                                        $no++;
                                    }
                                }
                    }

                    // }        
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan='10' align="left">Total</td>
                    <td colspan="1" align="center">
                        <?php

                            if(!isset($_POST['cari'])){
                                $querytampil = mysqli_query($konek, "SELECT SUM(D.jml_setoran) as realisasi
                                FROM r_unit AS U
                                LEFT JOIN r_satker AS S ON S.kdunit = U.kdunit
                                LEFT JOIN d_simponi AS D ON D.kdsatker = S.kdsatker
                                WHERE   S.kdaktif = 1")  or die(mysqli_error($konek));
                                $data = mysqli_fetch_array($querytampil);
                                echo "".$data['realisasi']."";    
                            }
                            else{
                                $kdsatker = $_POST['kdsatker'];
                                $jenis = $_POST['jenis'];
                                $tanggalawal = $_POST['tanggalawal'];
                                $tanggalakhir = $_POST['tanggalakhir'];

                                $querytampil = mysqli_query($konek, "SELECT SUM(D.jml_setoran) as jumlah
                                    FROM r_unit AS U
                                    LEFT JOIN r_satker AS S ON S.kdunit = U.kdunit
                                    LEFT JOIN d_simponi AS D ON D.kdsatker = S.kdsatker
                                    WHERE S.kdunit = 01 AND S.kdaktif = 1 AND D.kode_uf = '$jenis' AND S.kdsatker = '$kdsatker' AND D.tanggal BETWEEN '$tanggalawal' AND '$tanggalakhir'")  or die(mysqli_error($konek));
                                $data = mysqli_fetch_array($querytampil);
                                echo "".$data['jumlah']."";
                            }
                            
                        ?>
                    </td>
                    <td colspan='2' align="left"></td>
                </tr>
            </tfoot>
        </table>
      </div>
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

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
