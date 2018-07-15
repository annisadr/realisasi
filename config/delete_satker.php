<?php 
	$kdsatker = $_GET['kdsatker'];

	include 'koneksi.php';

		$hapus	="DELETE FROM r_satker WHERE kdsatker='$kdsatker'";
		$query	= mysqli_query($konek, $hapus);

		//echo "Data Telah Terhapus"
		echo "<br><br><br><br><strong><center><h1>Data Satuan Kerja yang dipillih Telah di Hapus</h1>";
		
		//echo "<meta http-equiv='refresh' content='o; url=../admin/index.php?page=info'>";

?>

<META HTTP-EQUIV='REFRESH' CONTENT ='0; URL=../admin/index.php?page=persatker'>