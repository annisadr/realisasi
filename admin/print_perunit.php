<!DOCTYPE html>
<html>
<head>
  <title>Print Faq</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body onload="window.print()">

<div class="row">
        <table class="table table-striped table-hover table-responsive">
            <thead>
				<tr style="font-size: 12px; background-color: #d9d9d9; border-color: black;">
					<th style="text-align: center;">NO</th>
					<th style="text-align: center;">KODE UNIT</th>
					<th style="text-align: center;">BAES1</th>
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
						SELECT U.kdunit, U.baes1, U.nmunit, U.kdaktif, sum(D.jml_setoran) AS realisasi, U.url
						FROM r_satker as S
						LEFT join r_unit AS U on S.kdunit = U.kdunit
						LEFT JOIN d_simponi as D on D.kdsatker = S.kdsatker
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
								echo '<td><font size="2px">'.$data['baes1'].'</font></td>';
								echo '<td><font size="2px"><a href = "index.php?page=drealnit&&kdunit='.$data['kdunit'].'">'.$data['nmunit'].'</a></font></td>';
								echo '<td><font size="2px">'.$data['kdaktif'].'</font></td>';
								echo '<td><font size="2px">'.$data['realisasi'].'</font></td>';
								echo '<td><a href="index.php?page=dunit&&kdunit='.$data['kdunit'].'"><span class="glyphicon glyphicon-zoom-in"></span></a>&nbsp;&nbsp;&nbsp;
                                <a href="index.php?page=eunit&&kdunit='.$data['kdunit'].'"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;&nbsp;
                                <a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>';
							echo '</tr>';
							$no++;
						}
					}
				?>
				<tr>
					<td colspan='5' style="padding-left: 50px;">Total</td>
					<td align="center">
						<?php

							$querytampil = mysqli_query($konek, "SELECT SUM(D.jml_setoran) as realisasi
								FROM r_unit AS U
								LEFT JOIN r_satker AS S ON S.kdunit = U.kdunit
								LEFT JOIN d_simponi AS D ON D.kdsatker = S.kdsatker
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

</body>
</html>