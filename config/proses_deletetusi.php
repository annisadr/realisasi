<?php

	include 'koneksi.php';

	$id_tusi = $_GET ['id_tusi'];

	$hapus 	 = "DELETE FROM tugasdanfungsi WHERE id_tusi='$id_tusi'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Tugas dan Fungsi berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../admin/index.php?page=tf'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }	

?>