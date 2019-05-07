<?php

	include 'koneksi.php';

    $id_tusi      = $_POST['id_tusi'];
	$judul_tusi    		= $_POST['judul_tusi'];
    $tgl_tusi     = $_POST['tgl_tusi'];
	$tugasdanfungsi 		= $_POST['tugasdanfungsi'];


	$update 	= "UPDATE tugasdanfungsi SET judul_tusi='$judul_tusi', tgl_tusi='$tgl_tusi', tugasdanfungsi='$tugasdanfungsi' WHERE id_tusi='$id_tusi'";
	$updateberita	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updateberita)
    	{
    		echo "<br><br><br><strong><center><i>Tugas dan Fungsi berhasil diedit!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?page=tf">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Balasan gagal ditambah!\");
    				history.back(-1);
    			</script>";
    	}
?>
