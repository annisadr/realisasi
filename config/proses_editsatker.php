<?php
	include 'koneksi.php';
	
	
    $kdsatker       = $_POST['kdsatker'];
    $nmsatker       = $_POST['nmsatker'];
    $kdlokasi       = $_POST['kdlokasi'];
    $kdkabkota      = $_POST['kdkabkota'];
    $nomorsp        = $_POST['nomorsp'];
    $kdkppn         = $_POST['kdkppn'];
    $kdjnssat       = $_POST['kdjnssat'];
    $kdupdate       = $_POST['kdupdate'];
    $tgupdate       = $_POST['tgupdate'];
    $nodsupdate     = $_POST['nodsupdate'];
    $jnssekolah     = $_POST['jnssekolah'];
    $kdpusda        = $_POST['kdpusda'];
    $kdsatblu       = $_POST['kdsatblu'];
    $nosp_dipal     = $_POST['nosp_dipal'];
    $nosp_bantu     = $_POST['nosp_bantu'];
    $kdreceh        = $_POST['kdreceh'];
    $kdaktif        = $_POST['kdaktif'];
    $likuidasi       = $_POST['likuidasi'];
    


	$update 	= "UPDATE r_satker SET kdsatker='$kdsatker', nmsatker='$nmsatker', kdlokasi='$kdlokasi', kdkabkota='$kdkabkota', nomorsp='$nomorsp', kdkppn='$kdkppn', kdjnssat='$kdjnssat', kdupdate='$kdupdate', tgupdate='$tgupdate', nodsupdate='$nodsupdate', jnssekolah='$jnssekolah', kdpusda='$kdpusda', kdsatblu='$kdsatblu', nosp_bantu='$nosp_dipal', nosp_bantu='$nosp_bantu', kdreceh='$kdreceh', kdaktif='$kdaktif', likuidasi='$likuidasi' WHERE kdsatker='$kdsatker'";
	$updateuser = mysqli_query($konek, $update)or die(mysqli_error());
if ($updateuser)
    {
    	echo "<strong><center><h1>Data Satuan Kerja Berhasil Diubah</h1>";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?page=persatker">';
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