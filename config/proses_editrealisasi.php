<?php
	include 'koneksi.php';
	
	$kdunit         = $_POST['kdunit'];
    $kdsatker       = $_POST['kdsatker'];
    $wbws           = $_POST['wbws'];
    $tanggal_str    = $_POST['tanggal_str'];
    $kode_klus      = $_POST['kode_klus'];
    $kode_billing   = $_POST['kode_billing'];
    $kode_bp        = $_POST['kode_bp'];
    $NTPN           = $_POST['NTPN'];
    $ntbntp         = $_POST['ntbntp'];
    $kode_uf        = $_POST['kode_uf'];
    $kode_mu        = $_POST['kode_mu'];
    $akun           = $_POST['akun'];
    $jml_setoran    = $_POST['jml_setoran'];
    $akun_3d        = $_POST['akun_3d'];
    $akun_4d        = $_POST['akun_4d'];
    $tahun          = $_POST['tahun'];
    


	$update 	= "UPDATE d_simponi SET kdunit='$kdunit', kdsatker='$kdsatker', wbws='$wbws', tanggal_str='$tanggal_str', kode_klus='033$kdunit$kdsatker', kode_billing='$kode_billing',kode_bp='$kode_bp', NTPN='$NTPN', ntbntp='$ntbntp', kode_uf='$kode_uf', kode_mu='$kode_mu', akun='$akun', jml_setoran='$jml_setoran', tahun='$tahun' WHERE kdunit='$kdunit' AND wbws='$wbws'";
	$updateuser = mysqli_query($konek, $update)or die(mysqli_error());
if ($updateuser)
    {
    	echo "<strong><center><h1>Data Realisasi Berhasil Diubah</h1>";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?page=realisasi">';
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