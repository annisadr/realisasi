<?php
	include '../../config/koneksi.php';

	
	$id_user           = $_POST['id_user'];
    $nama              = $_POST['nama'];
    $username          = $_POST['username'];
    $no_tlp            = $_POST['no_tlp'];
    $no_hp             = $_POST['no_hp'];
    $email             = $_POST['email'];
    $nip               = $_POST['nip'];
    $kdsatker          = $_POST['kdsatker'];
    $jenis_identitas   = $_POST['jenis_identitas'];
    $no_identitas      = $_POST['no_identitas'];

    


	$update 	= "UPDATE user SET nama='$nama', no_tlp='$no_tlp', no_hp='$no_hp', email='$email', nip='$nip', jenis_identitas='$jenis_identitas', no_identitas='$no_identitas', kdsatker='$kdsatker', username='$username' WHERE id_user='$id_user'";
	$updateuser = mysqli_query($konek, $update)or die(mysqli_error());

    include '../../config/koneksi.php';
    $id_user = $_POST['id_user'];
   

   $edit    = "SELECT * FROM user WHERE id_user = '$id_user'";
   $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
   $data    = mysqli_fetch_array($hasil);
   
if ($updateuser)
    {
    	echo "<h1><strong><center><i>Data Berhasil Diubah</h1>";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=profil&&kdunit='.$data['kdunit'].'&&id_user='.$data['id_user'].'">';

    
    }else{
        print"
            <script>
                alert(\"Data Gagal Diubah!\");
                history.back(-1);
            </script>";
    }
?>