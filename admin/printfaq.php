<!DOCTYPE html>
<html>
<head>
  <title>Print Faq</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body onload="window.print()">

<div class="row">
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
                    include '../config/koneksi.php';
                    $query = mysqli_query($konek, "SELECT * FROM faq")or die(mysqli_error($konek));
                    if(mysqli_num_rows($query) == 0){
                        echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
                    }
                    else{
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                            echo '<tr align="center">';
                                echo '<td><font size="2px">'.$data['id_faq'].'</font></td>';
                                echo '<td><font size="2px">'.$data['pertanyaan'].'</font></td>';
                                echo '<td><font size="2px">'.$data['tgl_tanya'].'</font></td>';
                                echo '<td><font size="2px">'.$data['jawaban'].'</font></td>';
                                echo '<td><font size="2px">'.$data['tgl_jawab'].'</font></td>';
                            echo '</tr>';
                            $no++;
                        }
                    }
                ?>  
            </tbody>
        </table>
      </div>

</body>
</html>