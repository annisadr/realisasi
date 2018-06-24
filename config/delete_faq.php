<?php 
	$id_faq	= $_GET['id_faq'];

	include 'koneksi.php';

		$hapus	="DELETE FROM faq WHERE id_faq='$id_faq'";
		$query	= mysqli_query($konek, $hapus);

		//echo "Data Telah Terhapus"
		echo "<br><br><br><br><strong><center>Pertanyaan telah di hapus";
		
		//echo "<meta http-equiv='refresh' content='o; url=../admin/index.php?page=info'>";

?>

<META HTTP-EQUIV='REFRESH' CONTENT ='0; URL=../admin/index.php?page=faq'>