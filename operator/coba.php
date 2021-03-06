<?php
//koneksi dan menentukan database
error_reporting();
    include "../config/koneksi.php";
//index awal data yang ingin ditampilkan
$default_index = 0;
//batasan menampilkan data
$default_batas = 8;
//jika terdapat nilai batas di URL, gunakan untuk mengganti nilai default $default_batas
if(isset($_GET['batas']))
{
    $default_batas = $_GET['batas'];
}
//jika terdapat nilai halaman di URL, gunakan untuk mengganti nilai dafault dari $default_index
if(isset($_GET['halaman']))
{
    $default_index = ($_GET['halaman']-1) * $default_batas;
}
/*
 * ambil beberapa data kolom di tabel dengan data yang ditayangkan
 * mulai dari index ke ($default_index) dengan jumlah hingga
 * sebanyak ($default_batas)
*/
$ambil_data = mysql_query("SELECT kdsatker, kdunit, wbws, tanggal FROM d_simponi_2017 limit ".$default_index.", ".$default_batas);
#menghitung total baris di tabel country
$total_baris = mysql_num_rows(
        //mengambil data di tabel country
        mysql_query("SELECT * FROM d_simponi_2017")
    );
# MEMBUAT TOMBOL PAGING
$nomor_paging = 1;
$html_paging = "<ul class='pagination'>";
while($total_baris - $default_batas > 0)
{
    $html_paging .= "<li><a href='?halaman=".$nomor_paging."&batas=".$default_batas."'>".$nomor_paging."</a></li>";
    $nomor_paging++;
    $total_baris -= $default_batas;
}
if($total_baris > 0)
{
    $html_paging .= "<li><a href='?halaman=".$nomor_paging."&batas=".$default_batas."'>".$nomor_paging."</a></li>";
}
$html_paging .= "</ul>";
# MEMBUAT TABEL YANG MENAYANGKAN DATA
$output_html = "<table class='table table-bordered'>".
                    "<tr>".
                        "<th>Nomor</th>".
                        "<th>Kode Satker</th>".
                        "<th>Kode Unit</th>".
                        "<th>WBWS</th>".
                        "<th>Tanggal</th>".
                    "<tr/>";
//perulangan membuat list data
$nomor_baris = $default_index + 1;
while($data = mysql_fetch_assoc($ambil_data))
{
    $output_html .= "<tr>".
                        "<td>".$nomor_baris."</td>".
                        "<td>".$data["kdsatker"]."</td>".
                        "<td>".$data["kdunit"]."</td>".
                        "<td>".$data["WBWS"]."</td>".
                        "<td>".$data["tanggal"]."</td>".
                    "</tr>";
    $nomor_baris++;
}
$output_html .= "</table>";
?>
<html>
    <head>
        <!--styling instan dengan memanfaatkan framework bootstrap-->
        <link rel="stylesheet" href="../https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container">
            Tampilkan hingga : 
            <form method="get">
              <div class="form-group row">
                <div class="col-md-9">
                  <input class='form-control' name="batas" value='<?php echo $default_batas?>'/>
                </div>
                <div class="col-md-3">
                  <button class="btn btn-default btn-block" type="submit">Kirim</button>
                </div>
              </div>
            </form>
            <!--tayangkan tabel country-->
            <?php echo $output_html?>
            <?php echo $html_paging?>
        </div>
    </body>
</html>	