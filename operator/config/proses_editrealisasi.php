<?php
	include '../../config/koneksi.php';
	
     $kdunit            =   $_POST['kdunit'];
     $kdsatker          =   $_POST['kdsatker'];
     $wbws              =   $_POST['wbws'];
     $tanggal_str       =   $_POST['tanggal_str'];
     $kode_billing      =   $_POST['kode_billing'];
     $kode_bp           =   $_POST['kode_bp'];
     $NTPN              =   $_POST['NTPN'];
     $ntbntp            =   $_POST['ntbntp'];
     $kode_uf           =   $_POST['kode_uf'];
     $kode_mu           =   $_POST['kode_mu'];
     $akun              =   $_POST['akun'];
     $jml_setoran       =   $_POST['jml_setoran'];
     $tanggal           =   $_POST['tanggal'];
     $tahun             =   $_POST['tahun'];
    


	$update    = "UPDATE d_simponi SET kdunit='$kdunit', kdsatker='$kdsatker', wbws='$wbws', tanggal_str='$tanggal_str', kode_klus='033$kdunit$kdsatker', kode_billing='$kode_billing',kode_bp='$kode_bp', NTPN='$NTPN', ntbntp='$ntbntp', kode_uf='$kode_uf', kode_mu='$kode_mu', akun='$akun', jml_setoran='$jml_setoran', tanggal='$tanggal', tahun='$tahun', akun_3d='SUBSTRING($akun, 1, 3)', akun_4d='SUBSTRING($akun, 1, 4)' WHERE kdunit='$kdunit' AND wbws='$wbws'";
	$updateuser = mysqli_query($konek, $update)or die(mysqli_error());

     include '../../config/koneksi.php';
    $id_user = $_POST['id_user'];
       $kdunit = $_POST['kdunit'];

       $edit    = "SELECT * FROM user WHERE id_user = '$id_user'";
       $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
       $data    = mysqli_fetch_array($hasil);

if ($updateuser)
    {
    	echo "<strong><center><h1>Data Realisasi Berhasil Diubah</h1>";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?page=realisasi&&kdunit='.$data['kdunit'].'&&id_user='.$data['id_user'].'">';

    	//echo "<strong><center>Data Gagal Diubah";
    	//echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=edit_info">';
}else{    	print"
    		<script>
    			alert(\"Data Gagal Diubah!\");
    			history.back(-1);
    		</script>";
    }
?>