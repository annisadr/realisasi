<?php
 
 include "koneksi.php";


 $kdunit		 	=	$_POST['kdunit'];
 $nmunit 			=	$_POST['nmunit'];
 $kdaktif			=	$_POST['kdaktif'];
 $url 				=	$_POST['url'];
 

 $input="INSERT INTO r_unit(kdunit,baes1,nmunit,kdaktif,url) values('$kdunit','033$kdunit','$nmunit','$kdaktif','$url')";
 $data=mysqli_query($konek,$input) or die (mysqli_error($konek));

 if($data){
  echo "<h1><strong><center>Data Unit Sudah ditambahkan</h1>";
  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?page=lpnbp&&id_user='.$data['id_user'].'&&kdunit='.$data['kdunit'].'">'; 
 }

?>