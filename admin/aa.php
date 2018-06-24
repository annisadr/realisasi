<?php
  include '../config/koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Pagination in PHP</title>
  <style>
    .pagination{margin-top: 30px;}
    .pagination li{display: inline-block; margin: o 5px;}
    .pagination li a{display: inline-block; padding: 8px 12px; border: 1px solid #eee;}
    .pagination li a.active{font-weight: bold; background: #f5f5f5;}
  </style>
</head>
<body>

  <h1>Pagination</h1>

  <?php
    if (isset($_GET['page'])) {
      $page = $_GET['page'];
    }else{
      $page = 1;
    }

    if ($page == ''|| $page == 1) {
      $page = 0;
    }else{
      $page = ($page*10)-10;
    }

    $sql = 'SELECT * FROM d_simponi_2017 LIMIT '.$page.', 10';
    $data = $konek->query($sql);

    //print_r($data->fetch_all());

    while ($row = $data->fetch_assoc()) {
      echo $row['wbws'].'<br/>';
    }

    //pagination
    $sql = 'SELECT * FROM d_simponi_2017';
    $data = $konek->query($sql);
    $records = $data->num_rows;
    $records_pages = $records/10;
    $records_pages = ceil($records_pages);
    $prev = $page-1;
    $next = $page+1;

    echo '<ul class="pagination">';
    $jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamanya
    $jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
    $start_number = ($page > $jumlah_number) ? $page - $jumlah_number : 1; // Untuk awal link member
    $end_number = ($page < ($jumlah_page - $jumlah_number)) ? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number

    if ($records_pages>=2) {
      for($r=1; $r <= $records_pages; $r++){
        $active = $r == $page ? 'class="active"' : '';
        echo '<li><a href="?page='.$r.'" '.$active.'>'.$r.'</a></li>';
      }
    }


  ?>

</body>
</html>