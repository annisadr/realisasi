<?php

session_start();
$out=session_destroy();
if($out)
{
	echo "<strong><center>Anda Sudah Keluar Dari Halaman";

}
?>

<META HTTP-EQUIV="REFRESH" CONTENT = '1;url=../index.php'>
