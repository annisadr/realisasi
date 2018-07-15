<?php 
	$wbws = $_GET['wbws'];
	$kdunit = $_GET['kdunit'];

	include 'koneksi.php';

		$hapus	="DELETE FROM d_simponi WHERE wbws='$wbws' AND kdunit = '$kdunit'";
		$query	= mysqli_query($konek, $hapus);

		//echo "Data Telah Terhapus"
		echo "<br><br><br><br><strong><center><h1>Data Realisasi telah di hapus</h1>";
		
		//echo "<meta http-equiv='refresh' content='o; url=../admin/index.php?page=info'>";

?>

<META HTTP-EQUIV='REFRESH' CONTENT ='0; URL=../admin/index.php?page=realisasi'>