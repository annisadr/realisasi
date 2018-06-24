<html>
<head>
<title> Tutorial Morris Bag.1 </title>
<link rel="stylesheet" href=" morris-0.5.1.css">
<script src="jquery-3.2.1.min.js"></script>
<script src="raphael.min.js"></script>
<script src="morris.js-0.5.1/morris.min.js"></script>
</head>
<body>
<div id="grafik"></div>
<script>
// Menggunakan Morris.Line
Morris.Line({
 
// ID Element dimana grafik ditempatkan
element: 'grafik',
 
// Data dari chart yang akan ditampilkan
data: [
{ year: '2010', value: 20 },
{ year: '2011', value: 10 },
{ year: '2012', value: 5},
{ year: '2013', value: 5},
{ year: '2014', value: 20}
 
],
// Sumbu X
xkey: 'year',
 
// Sumbu Y
ykeys: ['value'],
 
// Label
labels: ['Value']
});
</script>
</body>
</html>