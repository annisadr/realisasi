<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $kdunit = $_GET['kdunit'];

  $edit    = "SELECT * FROM r_unit WHERE kdunit = '$kdunit'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<?php


include ('../config/koneksi.php');

$query = "SELECT U.kdunit, U.baes1, U.nmunit AS nmunit, U.kdaktif, sum(D.jml_setoran) AS realisasi, U.url
            FROM r_satker as S
            LEFT join r_unit AS U on S.kdunit = U.kdunit
            LEFT JOIN d_simponi as D on D.kdsatker = S.kdsatker
            WHERE S.kdaktif = 1 AND S.kdunit = '$kdunit'
            GROUP BY U.kdunit";
// $query = "SELECT S.nmunit AS nmunit, sum(D.jml_setoran) AS realisasi FROM r_satker as S
//                     LEFT join r_unit AS U on S.kdunit = U.kdunit
//                     LEFT JOIN d_simponi as D on D.kdsatker = S.kdsatker
//                     WHERE S.kdaktif = 1 GROUP BY U.kdunit";
$result = mysqli_query($konek, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
	$chart_data .= "{ nmunit:'".$row["nmunit"]."', realisasi:'".$row["realisasi"]."'}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>


<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<div id="myfirstchart" style="height: 250px;"></div>

<!-- <script type="text/javascript">
	new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2008', value: 20 },
    { year: '2009', value: 10 },
    { year: '2010', value: 5 },
    { year: '2011', value: 5 },
    { year: '2012', value: 20 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});
</script> -->

<script type="text/javascript">
	Morris.Line({
		element : 'chart',
		data:[<?php echo $chart_data; ?>],
		xkey:'month',
		ykeys:['sekjen'],
		labels:['Sekreatriat Jenderal'],
		hideHover:'auto'
	});
</script>