<?php

session_start();
$out=session_destroy();
if($out)
{
	echo "<strong><center><h1>Anda Sudah Keluar Dari Halaman</h1>";

}
?>

<META HTTP-EQUIV="REFRESH" CONTENT = '1;url=../index.php'>
