<?php
 
 include "koneksi.php";


 $nama			 	=	$_POST['nama'];
 $alamat 			=	$_POST['alamat'];
 $rt 				=	$_POST['rt'];
 $rw 				=	$_POST['rw'];
 $kelurahan			=	$_POST['kelurahan'];
 $kecamatan 		=	$_POST['kecamatan'];
 $provinsi 			=	$_POST['provinsi'];
 $kabkota 			=	$_POST['kabkota'];
 $negara 			=	$_POST['negara'];
 $no_tlp 			=	$_POST['no_tlp'];
 $no_hp 			=	$_POST['no_hp'];
 $email 			=	$_POST['email'];
 $nip 				=	$_POST['nip'];
 $jenis_identitas 	=	$_POST['jenis_identitas'];
 $no_identitas 		=	$_POST['no_identitas'];
 $kdunit 			=	$_POST['kdunit'];
 $kdsatker 			=	$_POST['kdsatker'];
 $username 			=	$_POST['username'];
 $password 			=	md5($_POST['password']);
 $level 			=	$_POST['level'];
 

 $input="INSERT INTO user(id_user,nama,alamat,rt,rw,kelurahan,kecamatan,provinsi,kabkota,negara,no_tlp,no_hp,email,nip,jenis_identitas,no_identitas,kdunit,kdsatker,username,password,level) values('','$nama','$alamat','$rt','$rw','$kelurahan','$kecamatan','$provinsi','$kabkota','$negara','$no_tlp','$no_hp','$email','$nip','$jenis_identitas','$no_identitas','$kdunit','$kdsatker',$username','$password','$level')";
 $data=mysqli_query($konek,$input) or die (mysqli_error($konek));

 if($data){
  echo "<h1><strong><center>Data User Sudah ditambahkan</h1>";
  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?page=menuser">'; 
 }

?>