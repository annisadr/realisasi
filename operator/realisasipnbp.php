<style type="text/css">
	table { border-collapse: collapse; }

th {
  background-color: #2e6ab1;
  padding-left: 14px;
  padding-right: 8px;
  border: 1px solid #cccccc;
  text-align:left;
  color:#ffffff;
}

td {
  font-size: 11pt; 
  background-color: #F0F0F0;
  padding-left: 8px;
  padding-right: 8px;
  padding-top: 5px;
  padding-bottom: 5px;
  border: 1px solid #cccccc;
}

input,select { font-size: 10pt; }

</style>


<?php
$konek = mysqli_connect("localhost","root","","kpannisa");

// Langkah 1. Tentukan batas,cek halaman & posisi data
$batas   = 100;
$halaman = @$_GET['halaman'];
if(empty($halaman)){
	$posisi  = 0;
	$halaman = 1;
}
else{ 
  $posisi  = ($halaman-1) * $batas; 
}

// Langkah 2. Sesuaikan query dengan posisi dan batas
$query  = "SELECT * FROM d_simponi_2017 LIMIT $posisi,$batas";
$tampil = mysqli_query($konek, $query);

echo "<table>
      <tr><th>No</th><th>Nama</th><th>Alamat</th></tr>";

$no = $posisi+1;
while ($data=mysqli_fetch_array($tampil)){
  echo "<tr>
          <td>$no</td>
          <td>$data[kdunit]</td>
          <td>$data[wbws]</td>
        </tr>";
  $no++;
} 
echo "</table>";

// Langkah 3: Hitung total data dan halaman serta link 1,2,3 
$query2     = mysqli_query($konek, "select * from d_simponi_2017");
$jmldata    = mysqli_num_rows($query2);
$jmlhalaman = ceil($jmldata/$batas);

echo "<br> Halaman : ";

for($i=1;$i<=$jmlhalaman;$i++)
if ($i != $halaman){
	echo " <a href=\"paging.php?halaman=$i\">$i</a> | ";
}
else{ 
	echo " <b>$i</b> | "; 
}
echo "<p>Total anggota : <b>$jmldata</b> orang</p>";
?>