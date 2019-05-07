<?php

	// error_reporting(0);
	
	include 'koneksi.php';

	$judul_tusi		  				= $_POST["judul_tusi"];
	$tgl_tusi						= $_POST["tgl_tusi"];
	$tugasdanfungsi					= $_POST["tugasdanfungsi"];

	$insert			= "INSERT INTO tugasdanfungsi VALUES ('','$judul_tusi','$tgl_tusi','$tugasdanfungsi')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	
	
	echo "<br><br><br><strong><center><i>Anda berhasil menambah berita!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?page=tf">';  

?>