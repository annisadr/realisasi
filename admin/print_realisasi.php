<?php

  error_reporting(0);

  include '../config/koneksi.php';

  	$getkdunit = $_GET['kdunit'];
    $getkdsatker = $_GET['kdsatker'];
    $getjenis = $_GET['jenis'];
    $gettanggalawal = $_GET['tanggalawal'];
    $gettanggalakhir = $_GET['tanggalakhir'];

  $edit    = "SELECT * FROM d_simponi as S LEFT JOIN r_satker as D on D.kdsatker = S.kdsatker LEFT JOIN r_unit as U on U.kdunit = D.kdunit WHERE D.kdaktif = 1 AND D.kdunit = '$getkdunit' AND D.kdsatker = '$getkdsatker' AND S.kode_uf = '$getjenis' AND S.tanggal BETWEEN '$gettanggalawal' AND '$gettanggalakhir'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<!-- <body onload="window.print()"> -->

<div class="container">
        <table class="table table-bordered table-striped table-hover table-responsive" align="center">
        	<div align="LEFT">
        		<p>
        			<img class="center" src="../gambar/logo.png" height="100" style=" float: left; padding-right: 50px;">
        			<p style="padding-top: 20px;"><b style="font-size: 20px;">Kementerian Pekerjaan Umum dan Perumahan Rakyat<br>Biro Keuangan</b>
        			<br>Jl. Pattimura 20, Jakarta Selatan (12110)</p>
        		</p>
        	</div>
        	<!-- <p align="right">Jakarta, <?php
				date_default_timezone_set('Asia/Jakarta');
				echo date("d M Y");
				?>
			</p> --><br><br><br>
        	<h3 align="center">Laporan Realisasi PNBP Per - Unit</h3><br>
        	<!-- <p>
        		TIPE LAPORAN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laporan Realisasi PNBP Per - Unit
        	</p>
        	<p>
        		TIPE LAPORAN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laporan Realisasi PNBP Per - Unit
        	</p> -->
            <thead>
				<tr style="font-size: 12px; background-color: #d9d9d9; border-color: black;">
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
					$query = mysqli_query($konek, "SELECT * FROM d_simponi as S LEFT JOIN r_satker as D on D.kdsatker = S.kdsatker LEFT JOIN r_unit as U on U.kdunit = D.kdunit WHERE D.kdaktif = 1 AND D.kdunit = '$getkdunit' AND D.kdsatker = '$getkdsatker' AND S.kode_uf = '$getjenis' AND S.tanggal BETWEEN '$gettanggalawal' AND '$gettanggalakhir'") or die(mysqli_error());
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
								echo '<td><font size="2px"><a href = "#">'.$data['nmunit'].'</a></font></td>';
								echo '<td><font size="2px">'.$data['kdaktif'].'</font></td>';
								echo '<td><font size="2px">'.$data['realisasi'].'</font></td>';
							echo '</tr>';
							$no++;
						}
					}
				?>
				<tr>
					<td colspan='5' style="padding-left: 50px; background-color: #d9d9d9;">Total</td>
					<td align="center"><b>
						<?php

							$querytampil = mysqli_query($konek, "SELECT SUM(D.jml_setoran) as realisasi
								FROM r_unit AS U
								LEFT JOIN r_satker AS S ON S.kdunit = U.kdunit
								LEFT JOIN d_simponi AS D ON D.kdsatker = S.kdsatker
								WHERE	S.kdaktif = 1")or die(mysqli_error($konek));
							$data = mysqli_fetch_array($querytampil);
							echo "".$data['realisasi']."";
						?></b>
					</td>
					
				</tr>	
			</tbody>
        </table><br><br><br>

			<div class="col-sm-12" align="right">
				<p align="right" style="padding-right: 50px;">Kepala Biro Keuangan</p><br><br><br><br><br>
				<p align="right" style="padding-right: 40px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( Drs. Praptomo Widodo )</p>
			</div>

      </div>

</body>
</html>