<?php
 
 include "koneksi.php";

 $kdunit 			=	$_POST['kdunit'];
 $kdsatker 			=	$_POST['kdsatker'];
 $wbws			 	=	$_POST['wbws'];
 $tanggal_str		=	$_POST['tanggal_str'];
 $kode_billing		=	$_POST['kode_billing'];
 $kode_bp	 		=	$_POST['kode_bp'];
 $NTPN 				=	$_POST['NTPN'];
 $ntbntp 			=	$_POST['ntbntp'];
 $kode_uf 			=	$_POST['kode_uf'];
 $kode_mu 			=	$_POST['kode_mu'];
 $akun	 			=	$_POST['akun'];
 $jml_setoran		=	$_POST['jml_setoran'];
 $tanggal			=	$_POST['tanggal_str'];
 $tahun	 			=	$_POST['tahun'];
 

 $input="INSERT INTO d_simponi(kdunit,kdsatker,wbws,tanggal_str,kode_klus,kode_billing,kode_bp,NTPN,ntbntp,kode_uf,kode_mu,akun,jml_setoran,tanggal,tahun,akun_3d,akun_4d) values('$kdunit','$kdsatker','$wbws','$tanggal_str','033$kdunit$kdsatker','$kode_billing','$kode_bp','$NTPN','$ntbntp','$kode_uf','$kode_mu','$akun','$jml_setoran','$tanggal','$tahun','SUBSTRING($akun, 1, 3)','SUBSTRING($akun, 1, 4)')";
 $data=mysqli_query($konek,$input) or die (mysqli_error($konek));

 if($data){
  echo "<br><br><br><h1><strong><center><i>Data Realisasi PNBP Sudah ditambahkan</h1>";
  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?page=realisasi">'; 
 }

?>