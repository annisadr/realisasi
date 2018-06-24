<?php
	include 'koneksi.php';
	
	$id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $provinsi = $_POST['provinsi'];
    $kabkota = $_POST['kabkota'];
    $negara = $_POST['negara'];
    $no_tlp = $_POST['no_tlp'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $nip = $_POST['nip'];
    $jenis_identitas = $_POST['jenis_identitas'];
    $no_identitas = $_POST['no_identitas'];
    $kdunit = $_POST['kdunit'];
    $kdsatker = $_POST['kdsatker'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    


	$update 	= "UPDATE user SET nama='$nama', alamat='$alamat', rt='$rt', rw='$rw', kelurahan='$kelurahan', kecamatan='$kecamatan', provinsi='$provinsi', kabkota='$kabkota', negara='$negara', no_tlp='$no_tlp', no_hp='$no_hp', email='$email', nip='$nip', jenis_identitas='$jenis_identitas', no_identitas='$no_identitas', kdunit='$kdunit', kdsatker='$kdsatker', username='$username', password='$password' WHERE id_user='$id_user'";
	$updateuser = mysqli_query($konek, $update)or die(mysqli_error());
if ($updateuser)
    {
    	echo "<strong><center>Data Berhasil Diubah";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?page=menuser">';
    }
else {
    	//echo "<strong><center>Data Gagal Diubah";
    	//echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=edit_info">';
    	print"
    		<script>
    			alert(\"Data Gagal Diubah!\");
    			history.back(-1);
    		</script>";
    }
?>