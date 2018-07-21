<?php 
	$id_user = $_GET['id_user'];

	include 'koneksi.php';

		$hapus	="DELETE FROM user WHERE id_user='$id_user'";
		$query	= mysqli_query($konek, $hapus);

		//echo "Data Telah Terhapus"
		echo "<br><br><br><br><strong><center><h1><i>Akun telah di hapus</i></h1>";
		
		//echo "<meta http-equiv='refresh' content='o; url=../admin/index.php?page=info'>";

?>

<META HTTP-EQUIV='REFRESH' CONTENT ='0; URL=../admin/index.php?page=menuser'>