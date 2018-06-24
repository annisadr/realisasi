<?php
	error_reporting();
	include "koneksi.php";

	$username  = $_POST["username"];
	$password  = md5($_POST['password']);

	$query     ="SELECT * FROM user WHERE username='$username' AND password='$password'";

	$login     = mysqli_query($konek,$query) or die(mysqli_error($konek));
	$jlhrecord = mysqli_num_rows($login);

	$data      = mysqli_fetch_array($login,MYSQLI_BOTH);

	$username  = $data['username'];
	$password  = md5($_POST['password']);
	$level	   = $data['level'];


if($jlhrecord > 0){

	session_start();
	$_SESSION['id_user']=$id_user;
	$_SESSION['username']=$username;
	$_SESSION['level']=$level;

	//redirect level
		if($level == Admin){
			header('Location:../admin/index.php?page=index');
		}
		elseif ($level == Operator){
			header('Location:../operator/index.php?page=index');
		}
}

else{

	print "
	<script>
	alert(\"Username atau Password Anda Salah! Silahkan Login kembali\");
				history.back(-1);
			</script>";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../index.php">';  
}

?>