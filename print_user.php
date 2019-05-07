<!DOCTYPE html>
<html>
<head>
	<title>Print Kartu Ujian Masuk</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="layout.css">
	<script src="bootstrap/jquery-3.2.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

		<?php

			include 'config/koneksi.php';

			$id_user    = $_GET['id_user'];

			$query     = "SELECT * FROM user WHERE id_user='$id_user'";
			$cek       = mysqli_query($konek, $query)or die(mysqli_error($konek));
			$data      = mysqli_fetch_array($cek);

		?>

		<form class="form-horizontal" action="" method="POST">
	    <div class="panel-group">
	    <div class="panel panel-primary">
	      <div class="panel-heading"><p align="center"><b>KARTU UJIAN MASUK SMK MANDALAHAYU II BEKASI</b></p></div>
	      <div class="panel-body">
		<!-- <div class="module-body table">
		<table class="table table-striped table-hover table-responsive">
			<thead>
                <tr style="font-size: 10px; text-align: center; background-color: #d9d9d9; border-color: black;">
                    <th style="text-align: center;">ID</th>
                    <th style="text-align: center;">PERTANYAAN</th>
                    <th style="text-align: center;">TANGGAL PERTANYAAN</th>
                    <th style="text-align: center;">JAWABAN</th>
                    <th style="text-align: center;">TANGGAL JAWABAN</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                    include 'config/koneksi.php';
                    $query = mysqli_query($konek, "SELECT * FROM user")or die(mysqli_error($konek));
                    if(mysqli_num_rows($query) == 0){
                        echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
                    }
                    else{
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                            echo '<tr align="center">';
                                // echo '<td><font size="2px">'.$data['id_user'].'</font></td>';
                                // echo '<td><font size="2px">'.$data['pertanyaan'].'</font></td>';
                                // echo '<td><font size="2px">'.$data['tgl_tanya'].'</font></td>';
                                // echo '<td><font size="2px">'.$data['jawaban'].'</font></td>';
                                // echo '<td><font size="2px">'.$data['tgl_jawab'].'</font></td>';
                            echo '</tr>';
                            $no++;
                        }
                    }
                ?>  
            </tbody>
		</table>
	</div> -->

		<table class="table">
          <tr>
          <td><br><p align="center"><font size="5px"><b>KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT</b></font><br>
                  <font size="6px"><b>BIRO KEUANGAN</b></font><br>Jl. Pattimura 20, Jakarta Selatan 12110</p></td>
          </tr>
        </table>
	        
	        <br>
	        <br>
	     <table class="table table-bordered">  
	     	<tr>
	        <th width="200">ID User</th>
	        <td><i><?php echo $data['id_user']; ?></i></td>
	      </tr> 
	      <tr>
	        <th>Nama</th>
	        <td><i><?php echo $data['nama']; ?></i></td>
	      </tr>  
	       <tr>
	        <th>Alamat</th>
	        <td><i><?php echo $data['alamat']; ?></i></td>
	      </tr>   
	      <tr>
	        <th>RT</th>
	        <td><i><?php echo $data['rt']; ?></i></td>
	      </tr>
	      <tr>
	        <th>RW</th>
	        <td><i><?php echo $data['rw'] ?></i></td>
	      </tr> 
	      
	  </table>
	<p align="right">Bekasi, <?php
			date_default_timezone_set('Asia/Jakarta');
			echo date("d M Y");
			?>
		</p>
	</div>
</body>
</html>