<?php
 
 include 'koneksi.php';


 $pertanyaan=$_POST['pertanyaan'];
 $jawaban=$_POST['jawaban']; 
 $tgl_tanya=date('Y-m-d');
 

 $input="INSERT INTO faq(id_faq,pertanyaan,tgl_tanya,jawaban,tgl_jawab) values('','$pertanyaan','$tgl_tanya','$jawaban','')";
 $data=mysqli_query($konek,$input) or die (mysqli_error($konek));

 if($data){
  echo "<strong><center>Pertanyaan Anda Terkirim";
  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../operator/index.php?page=faq">'; 
 }

?>