<div class="container">

    <div class="module-head">
        <h3><large>REALISASI PNBP PER - SATKER</large></h3><hr><br>
        <a href="index.php?page=tunit" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-plus"></span> Tambah Data 
        </a>
    </div><br>

    <div class="row">
    	<form class="form-horizontal" action="" method="POST">
    		<div class="form-group">
                <label class="control-label col-sm-3" for="select">Unit :</label>
                <div class="col-sm-7">
                    <select class="form-control" id="kdunit" name="kdunit">
                        <option selected="selected" value="">--Pilih Unit--</option>
                        <?php
                        include '../config/koneksi.php';
                        $sel_prov="select * from r_unit_2018";
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
    			<div class="col-sm-10" align="right">
    				<button type="submit" class="btn btn-primary" name="cari">Search</button>
    			</div>
    		</div>
    	</form>
    </div>


    <div class="row">
    	<a href="#">
      <span class="glyphicon glyphicon-print"></span>
    </a>

	<div class="module-body table">
		<table id="datatable" cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
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
					include '../config/koneksi.php';
					$no_urut = 0;
					
                    if(!isset($_POST['cari'])){
                    	$no_urut = 0;
                    	$query = mysqli_query($konek, "SELECT S.kdsatker, S.nmsatker, S.kdunit, S.kdaktif, sum(D.jml_setoran) AS realisasi FROM d_simponi_2017 AS D LEFT JOIN r_satker_2017 as S on D.kdsatker = S.kdsatker WHERE S.kdaktif = 1 GROUP BY S.nmsatker") or die(mysqli_error($konek));

                    	if(mysqli_num_rows($query) == 0){
                    		echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
                    	}
                    	else{
                    		$no = 1;
                    		while ($data = mysqli_fetch_array($query)) {
                    			$no_urut++;
                    			echo '<tr align="center">';
                    				echo '<td><font size="2px">'.$no_urut.'</font></td>';
									echo '<td><font size="2px">'.$data['kdsatker'].'</font></td>';
									echo '<td><font size="2px">'.$data['nmsatker'].'</font></td>';
									echo '<td><font size="2px">'.$data['kdunit'].'</font></td>';
									echo '<td><font size="2px">'.$data['kdaktif'].'</font></td>';
									echo '<td><font size="2px">'.$data['realisasi'].'</font></td>';
									echo '<td><a href=#><span class="glyphicon glyphicon-edit"></span></a>
									</td>';
								echo '</tr>';
								$no++;
							}
						}
					}

                    else{
                        $kdunit = $_POST['kdunit'];
                        $kdsatker = $_POST['kdsatker'];
                        $no_urut = 0;

                        $query  = mysqli_query($konek, "SELECT S.kdsatker, S.nmsatker, S.kdunit, S.kdaktif, sum(D.jml_setoran) AS realisasi FROM d_simponi_2017 AS D LEFT JOIN r_satker_2017 as S on D.kdsatker = S.kdsatker WHERE S.kdaktif = '1' AND S.kdunit = '$kdunit' AND S.kdsatker = '$kdsatker' OR S.kdaktif = '1' AND S.kdunit = '$kdunit' GROUP BY S.nmsatker")or die(mysqli_error($konek));
                                if(mysqli_num_rows($query) == 0){
                                    echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
                                }
                                else{
                                    $no = 1;
                                    while ($data = mysqli_fetch_array($query)) {
                                    	$no_urut++;
                                        echo '<tr align="center">';
                                            echo '<td><font size="2px">'.$no_urut.'</font></td>';
											echo '<td><font size="2px">'.$data['kdsatker'].'</font></td>';
											echo '<td><font size="2px">'.$data['nmsatker'].'</font></td>';
											echo '<td><font size="2px">'.$data['kdunit'].'</font></td>';
											echo '<td><font size="2px">'.$data['kdaktif'].'</font></td>';
											echo '<td><font size="2px">'.$data['realisasi'].'</font></td>';
											echo '<td><a href=#><span class="glyphicon glyphicon-edit"></span></a>
									</td>';
                                        echo '</tr>';
                                        $no++;
                                    }
                                }
                    }

                    // }        
                ?>
				<!-- <?php
					include '../config/koneksi.php';
					$no_urut = 0;
					$query = mysqli_query($konek, "SELECT S.kdsatker, S.nmsatker, S.kdunit, S.kdaktif, sum(D.jml_setoran) AS realisasi FROM d_simponi_2017 AS D LEFT JOIN r_satker_2017 as S on D.kdsatker = S.kdsatker WHERE S.kdaktif = '1' GROUP BY S.nmsatker") or die(mysqli_error());
					if(mysqli_num_rows($query) == 0){
						echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
					}
					else{
						$no = 1;
						while ($data = mysqli_fetch_array($query)) {
							$no_urut++;
							echo '<tr align="center">';
								echo '<td><font size="2px">'.$no_urut.'</font></td>';
								echo '<td><font size="2px">'.$data['kdsatker'].'</font></td>';
								echo '<td><font size="2px">'.$data['nmsatker'].'</font></td>';
								echo '<td><font size="2px">'.$data['kdunit'].'</font></td>';
								echo '<td><font size="2px">'.$data['kdaktif'].'</font></td>';
								echo '<td><font size="2px">'.$data['realisasi'].'</font></td>';
								echo '<td><a href=#><span class="glyphicon glyphicon-edit"></span></a>
                                <a href=#><span class="glyphicon glyphicon-trash"></span></a</td>';
							echo '</tr>';
							$no++;
						}
					}
				?> -->
				<tr>
					<td colspan='5' style="padding-left: 50px;">Total</td>
					<td align="center">
						<?php

							$querytampil = mysqli_query($konek, "SELECT SUM(D.jml_setoran) as realisasi
								FROM r_unit_2018 AS U
								LEFT JOIN r_satker_2017 AS S ON S.kdunit = U.kdunit
								LEFT JOIN d_simponi_2017 AS D ON D.kdsatker = S.kdsatker
								WHERE	S.kdaktif = 1")or die(mysqli_error($konek));
							$data = mysqli_fetch_array($querytampil);
							echo "".$data['realisasi']."";
						?>
					</td>
					<td colspan='3' style="padding-left: 50px;"></td>
				</tr>	
			</tbody>
		</table>
	</div>
    </div>  
</div>
<br>
<script>
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