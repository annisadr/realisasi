<?php
 
 include "koneksi.php";


 $nama			 	=	$_POST['nama'];
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
 


 $input="INSERT INTO user(id_user,nama,no_tlp,no_hp,email,nip,jenis_identitas,no_identitas,kdunit,kdsatker,username,password,level) values('','$nama','$no_tlp','$no_hp','$email','$nip','$jenis_identitas','$no_identitas','$kdunit','$kdsatker','$username','$password','$level')";
 $data=mysqli_query($konek,$input) or die (mysqli_error($konek));

 if($data){
  echo "<br><br><br><h1><strong><center><i>Data User Sudah ditambahkan</i></h1>";
  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?page=menuser">'; 
 }

?>