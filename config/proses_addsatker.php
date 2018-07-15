<?php
 
 include "koneksi.php";

 
 $kdsatker 			=	$_POST['kdsatker'];
 $nmsatker		 	=	$_POST['nmsatker'];
 
 $kdunit			=	$_POST['kdunit'];
 $kdlokasi			=	$_POST['kdlokasi'];
 $kdkabkota	 		=	$_POST['kdkabkota'];
 $nomorsp			=	$_POST['nomorsp'];
 $kdkppn 			=	$_POST['kdkppn'];
 $kdjnssat 			=	$_POST['kdjnssat'];
 $kdupdate 			=	$_POST['kdupdate'];
 $tgupdate			=	$_POST['tgupdate'];
 $nodsupdate		=	$_POST['nodsupdate'];
 $jnssekolah		=	$_POST['jnssekolah'];
 $kdpusda	 		=	$_POST['kdpusda'];
 $kdsatblu	 		=	$_POST['kdsatblu'];
 $isblu		 		=	$_POST['isblu'];
 $kdstatblu			=	$_POST['kdstatblu'];
 $nosp_dipal 		=	$_POST['nosp_dipal'];
 $nosp_bantu 		=	$_POST['nosp_bantu'];
 $kdreceh	 		=	$_POST['kdreceh'];
 $kdaktif	 		=	$_POST['kdaktif'];
 $likuidasi 		=	$_POST['likuidasi'];

 

 $input="INSERT INTO r_satker(kdsatker,nmsatker,kddept,kdunit,kdlokasi,kdkabkota,nomorsp,kdkppn,kdjnssat,kdupdate,tgupdate,nodsupdate,jnssekolah,kdpusda,kdsatblu,isblu,kdstatblu,nosp_dipal,nosp_bantu,kdreceh,kdaktif,likuidasi) values('$kdsatker','$nmsatker','033','$kdunit','$kdlokasi','$kdkabkota','$nomorsp','$kdkppn','$kdjnssat','$kdupdate','$tgupdate','$nodsupdate','$jnssekolah','$kdpusda','$kdsatblu','$isblu','$kdstatblu','$nosp_dipal','$nosp_bantu','$kdreceh','$kdaktif','$likuidasi')";
 $data=mysqli_query($konek,$input) or die (mysqli_error($konek));

 if($data){
  echo "<h1><strong><center>Data Satuan Kerja Sudah ditambahkan</h1>";
  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?page=persatker">'; 
 }

?>