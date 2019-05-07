
<hmtl>
	<head>
		<title>belajar morris</title>
		<link rel="stylesheet" href=" ../morris-0.5.1.css">
		<script src=" ../jquery.min.js"></script>
		<script src=" ../raphael-min.js"></script>
		<script src=" ../morris-0.5.1.min.js"></script>
	</head>

	<body>

		<?php
include '../config/koneksi.php';
$query = "SELECT * FROM d_simponi_2017";
$result = mysql_query($query);
 
while($row = mysql_fetch_assoc($result)){
$output[] = $row;
}
?>
 
<div class=”grafik”></div>
 
<script>
// Menggunakan Morris.Bar
Morris.Bar({
// ID Element dimana grafik ditempatkan
element: 'grafik',
 
// Data dari chart yang akan ditampilkan
data<?php echo json_encode($output); ?>,
 
// Sumbu X
xkey: 'tanggal',
 
// Sumbu Y
ykeys: ['jml_setoran'],
 
// Label
labels: ['Realisasi']
});
</script>
 

		<div class=”grafik”></div>
		
	</body>
</hmtl>