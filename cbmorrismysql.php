<?php
include "config/koneksi.php";

$query = "SELECT U.kdunit, S.kdsatker, S.nmsatker
                            FROM r_satker_2017 as S
                            LEFT join r_unit_2018 AS U on S.kdunit = U.kdunit
                            LEFT JOIN d_simponi_2017 as D on D.kdsatker = S.kdsatker
                            WHERE S.kdaktif = 1 AND D.kdunit = 08
                            GROUP BY D.tanggal";
$result = mysqli_query($konek, $query);
$chart_data = '';
while ($row = mysqli_fetch_array($result))
{
	$chart_data .= "{ kdsatker:'".$row["kdsatker"]."', nmsatker:".$row["nmsatker"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>


<html>
<head>
<title> Tutorial Morris Bag.1 </title>
<link rel="stylesheet" href=" morris-0.5.1.css">
<script src="jquery-3.2.1.min.js"></script>
<script src="raphael.min.js"></script>
<script src="morris.js-0.5.1/morris.min.js"></script>
</head>
<body>
<div id="chart"></div>
<script>
// Menggunakan Morris.Line
Morris.Line({
	element : 'chart',
	data:[<?php echo $chart_data; ?>],
	xkeys:'kdsatker',
	ykeys:['nmsatker'],
	labels:['Namaunit'],
	hideOver:'auto'
});
</script>
</body>
</html>