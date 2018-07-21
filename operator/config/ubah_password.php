<?php
	include '../../config/koneksi.php';
	
	$id_user           = $_POST['id_user'];
    $password          = md5($_POST['password']);
    $kpassword          = md5($_POST['kpassword']);

    if ($_POST['password']==$_POST['kpassword'] ) {
//proses simpan data, $_POST['pw'] dan $_POST['pw1'] adalah name dari masing masing text password 
        $update     = "UPDATE user SET password='$password' WHERE id_user='$id_user'";
        $updateuser = mysqli_query($konek, $update)or die(mysqli_error());

        if ($updateuser)
    {
        echo "<br><br><br><strong><center><i><h1>Password Berhasil Diubah</h1>";
        // echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../operator/index.php?page=profil&&id_user='.$data['id_user'].'&&kdunit='.$data['kdunit'].'">';
        print "
        <script>
        history.back(-2);
        </script>";
    }

}else {
echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
}
    
     


?>
