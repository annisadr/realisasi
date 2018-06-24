<div class="container">

    <div class="module-head">
        <h3><large>REALISASI PNBP PER - UNIT</large></h3><hr><br>
        <a href="index.php?page=tunit" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-plus"></span> Tambah Data 
        </a>
    </div><br>

    <a href="#">
      <span class="glyphicon glyphicon-print"></span>
    </a>

	<div class="module-body table">
		<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
			<thead>
				<tr style="font-size: 12px; background-color: #d9d9d9; border-color: black;">
					<th style="text-align: center;">NO</th>
					<th style="text-align: center;">KODE UNIT</th>
					<th style="text-align: center;">NAMA UNIT</th>
					<th style="text-align: center;">KODE AKTIF</th>
					<th style="text-align: center;">JUMLAH SETORAN</th>
					<th style="text-align: center;">ACTION</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include '../config/koneksi.php';
					$no_urut = 0;
					$query = mysqli_query($konek, "
						SELECT U.kdunit, U.nmunit, U.kdaktif, sum(D.jml_setoran) AS realisasi, U.url
						FROM r_satker_2017 as S
						LEFT join r_unit_2018 AS U on S.kdunit = U.kdunit
						LEFT JOIN d_simponi_2017 as D on D.kdsatker = S.kdsatker
						WHERE S.kdaktif = 1
						GROUP BY U.kdunit") or die(mysqli_error());
					if(mysqli_num_rows($query) == 0){
						echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
					}
					else{
						$no = 1;
						while ($data = mysqli_fetch_array($query)) {
							$no_urut++;
							echo '<tr align="center">';
								echo '<td><font size="2px">'.$no_urut.'</font></td>';
								echo '<td><font size="2px">'.$data['kdunit'].'</font></td>';
								echo '<td><font size="2px"><a href = "index.php?page='.$data['url'].'">'.$data['nmunit'].'</a></font></td>';
								echo '<td><font size="2px">'.$data['kdaktif'].'</font></td>';
								echo '<td><font size="2px">'.$data['realisasi'].'</font></td>';
								echo '<td><a href=#><span class="glyphicon glyphicon-edit"></span></a>
                                <a href=#><span class="glyphicon glyphicon-trash"></span></a</td>';
							echo '</tr>';
							$no++;
						}
					}
				?>
				<tr>
					<td colspan='4' style="padding-left: 50px;">Total</td>
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
<br />