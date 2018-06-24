<?php
	include 'koneksi.php';
	
	$id_faq     = $_POST['id_faq'];
	$pertanyaan	= $_POST['pertanyaan'];
	$jawaban	= $_POST['jawaban'];
    $tgl_jawab  =date('Y-m-d');
	$update 	= "UPDATE faq SET jawaban='$jawaban', tgl_jawab='$tgl_jawab' WHERE id_faq='$id_faq'";
	$updatefaq	= mysqli_query($konek, $update)or die(mysqli_error());
if ($updatefaq)
    {
    	echo "<strong><center>Data Berhasil Diubah";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?page=faq">';
    }
else {
    	//echo "<strong><center>Data Gagal Diubah";
    	//echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=edit_info">';
    	print"
    		<script>
    			alert(\"Data Gagal Diubah!\");
    			history.back(-1);
    		</script>";
    }
?>