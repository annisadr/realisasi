<style type="text/css">
    #myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
</style>
<div class="col-sm-12">
    <div class="well">
    	<h5><a href="index.php?page=lpnbp">Realisasi PNBP</a> /
    		Sekretariat Jenderal</h5>      
    </div>
    <div class="container">
        <a href="index.php?page=su" class="btn btn-primary btn-lg">
        <span class="glyphicon glyphicon-plus"></span> Tambah Data 
    </a><br><br><br>
    </div>

    <div class="row">
    	<form class="form-horizontal" action="" method="POST">
    		<div class="form-group">
                <label class="control-label col-sm-3" for="select">Unit :</label>
                <div class="col-sm-7">
                    <select class="form-control" id="unit" name="unit">
                        <option selected="selected">01 | SEKRETARIAT JENDERAL</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
    			<label class="control-label col-sm-3" for="select">Satuan Kerja :</label>
    			<div class="col-sm-7">
                    <select class="form-control" id="nmsatker" name="kdsatker">
                        <option selected="selected">--Pilih Satuan Kerja--</option>
                            <?php
                            $nmsatker = "SELECT S.kdsatker, S.nmsatker FROM r_unit_2018 AS U
                            LEFT JOIN r_satker_2017 AS S ON S.kdunit = U.kdunit WHERE S.kdunit = '01' AND S.kdaktif = 1 ORDER BY nmsatker";
                            $querynmsatker = mysqli_query($konek,$nmsatker);
                            while ($datanmsatker = mysqli_fetch_array($querynmsatker)) {
                            ?>
                        <option value="<?php echo $datanmsatker['kdsatker'] ?>">
                            <?php echo $datanmsatker["kdsatker"] ?> | 
                            <?php echo $datanmsatker["nmsatker"] ?>
                        </option>
                            <?php
                                }
                            ?>
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
    				<a href="#" data-toggle="tooltip" data-placement="right" title="Periode Maksimal 31 Hari">
                        <input type="date" class="form-control input-md" id="tanggalawal" name="tanggalawal"/>            
                    </a>
    			</div>
    			<div class="col-sm-1" align="center">s/d</div>
    			<div class="col-sm-2">
    				<a href="#" data-toggle="tooltip" data-placement="right" title="Periode Maksimal 31 Hari">
                        <input type="date" class="form-control input-md" id="tanggalakhir" name="tanggalakhir"/>
                    </a>
    			</div>
    		</div>
    		<div class="form-group">
    			<label class="control-label col-sm-4"></label>
    			<div class="col-sm-6" align="right">
    				<button type="submit" class="btn btn-primary" name="cari">Search</button>
    			</div>
    		</div>

            <div class="form-group">
                <div class="col-sm-1" style="padding-left: 50px;">
                    <span class="glyphicon glyphicon-search"></span>
                </div>
                <div class="col-sm-3" style="padding-left: 50px;">
                    <input type="text" class="form-control input-md" id="myInput" onkeyup="myFunction()" placeholder="Search for Wajib Bayar.." title="Type in a name">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-6" align="left" style="padding-left: 30px;">
                    
                </div>
            </div>
    	</form>

    </div>
    
    <div class="row">
    	<table class="table table-striped table-hover table-responsive" id="myTable">
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
				</tr>
			</thead>
			
			<tbody>
				<?php
					include '../config/koneksi.php';
                    $no_urut = 0;
					
                    if(!isset($_POST['cari'])){

                        $query  = mysqli_query($konek, "SELECT U.kdunit, S.kdsatker, D.wbws, D.kode_klus, D.kode_billing, D.kode_bp, D.NTPN, D.ntbntp, D.kode_uf, D.jml_setoran, D.tanggal
                            FROM r_satker_2017 as S
                            LEFT join r_unit_2018 AS U on S.kdunit = U.kdunit
                            LEFT JOIN d_simponi_2017 as D on D.kdsatker = S.kdsatker
                            WHERE S.kdaktif = 1 AND D.kdunit = 01
                            GROUP BY D.tanggal")or die(mysqli_error($konek));
                                if(mysqli_num_rows($query) == 0){
                                    echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
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
                                        echo '</tr>';
                                        $no++;
                                    }
                                }
                    }

                    else{
                        $kdsatker = $_POST['kdsatker'];
                        $jenis = $_POST['jenis'];
                        $tanggalawal = $_POST['tanggalawal'];
                        $tanggalakhir = $_POST['tanggalakhir'];

                        $query  = mysqli_query($konek, "SELECT U.kdunit, S.kdsatker, D.wbws, D.kode_klus, D.kode_billing, D.kode_bp, D.NTPN, D.ntbntp, D.kode_uf, D.jml_setoran, D.tanggal
                            FROM r_satker_2017 as S
                            LEFT join r_unit_2018 AS U on S.kdunit = U.kdunit
                            LEFT JOIN d_simponi_2017 as D on D.kdsatker = S.kdsatker
                            WHERE S.kdaktif = 1 AND D.kdunit = 01 AND D.kode_uf = '$jenis' AND S.kdsatker = '$kdsatker' AND D.tanggal BETWEEN '$tanggalawal' AND '$tanggalakhir' OR S.kdaktif = 1 AND D.kdunit = 01 AND D.kode_uf = '$jenis' OR S.kdaktif = 1 AND D.kdunit = 01 AND S.kdsatker = '$kdsatker' OR S.kdaktif = 1 AND D.kdunit = 01 AND D.tanggal BETWEEN '$tanggalawal' AND '$tanggalakhir'
                            GROUP BY D.tanggal")or die(mysqli_error($konek));
                                if(mysqli_num_rows($query) == 0){
                                    echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
                                }
                                else{
                                    $no = 1;
                                    while ($data = mysqli_fetch_array($query)) {
                                        echo '<tr align="center">';
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
                                        echo '</tr>';
                                        $no++;
                                    }
                                }
                    }

                    // }        
                ?>

					
				<tr>
					<td colspan='8' align="left">Total</td>
					<td colspan="3" align="center">
						<?php

                            if(!isset($_POST['cari'])){
                                $querytampil = mysqli_query($konek, "SELECT SUM(D.jml_setoran) as jumlah
                                    FROM r_unit_2018 AS U
                                    LEFT JOIN r_satker_2017 AS S ON S.kdunit = U.kdunit
                                    LEFT JOIN d_simponi_2017 AS D ON D.kdsatker = S.kdsatker
                                    WHERE S.kdunit = 01 AND S.kdaktif = 1")  or die(mysqli_error($konek));
                                $data = mysqli_fetch_array($querytampil);
                                echo "".$data['jumlah']."";    
                            }
                            else{
                                $kdsatker = $_POST['kdsatker'];
                                $jenis = $_POST['jenis'];
                                $tanggalawal = $_POST['tanggalawal'];
                                $tanggalakhir = $_POST['tanggalakhir'];

                                $querytampil = mysqli_query($konek, "SELECT SUM(D.jml_setoran) as jumlah
                                    FROM r_unit_2018 AS U
                                    LEFT JOIN r_satker_2017 AS S ON S.kdunit = U.kdunit
                                    LEFT JOIN d_simponi_2017 AS D ON D.kdsatker = S.kdsatker
                                    WHERE S.kdunit = 01 AND S.kdaktif = 1 AND D.kode_uf = '$jenis' AND S.kdsatker = '$kdsatker' AND D.tanggal BETWEEN '$tanggalawal' AND '$tanggalakhir' OR S.kdaktif = 1 AND D.kdunit = 01 AND D.kode_uf = '$jenis' OR S.kdaktif = 1 AND D.kdunit = 01 AND S.kdsatker = '$kdsatker' OR S.kdaktif = 1 AND D.kdunit = 01 AND D.tanggal BETWEEN '$tanggalawal' AND '$tanggalakhir'
                            GROUP BY D.tanggal")  or die(mysqli_error($konek));
                                $data = mysqli_fetch_array($querytampil);
                                echo "".$data['jumlah']."";
                            }
							
						?>
					</td>
				</tr>	
			</tbody>
		</table>
      </div>
    </div>
    <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script>
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