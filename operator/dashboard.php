<div class="container">
  <div class="col-sm-12">
      <div class="module-head">
        <h3><large>DASHBOARD</large></h3><hr><br>
      </div>
      <p align="right">
        <?php
        date_default_timezone_set('Asia/Jakarta');
        echo "<b>Login hari ini:</b> " . date("d/m/Y | h:i:s");
        ?>
      </p>

      <p align="left">
        Username : </span> <?php echo $data['nama'];?>
      </p>

      <h1><center><i><b>Selamat Datang di Halaman Operator</b></i></center></h1><br>

      <div class="row">
        <div class="col-sm-12">
          <div class="well">
            <!-- <a href="#">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a href="#">
              <span class="glyphicon glyphicon-print"></span>
            </a> -->
            <script src="../js/jquery.min.js" type="text/javascript"></script>
            <script src="../js/highcharts.js" type="text/javascript"></script>
            <script type="text/javascript" >
            var chart1; // globally available
            $(document).ready(function() {
              chart1 = new Highcharts.Chart({
                chart: {
                  renderTo: 'container',
                  type: 'column'
                },   
                title: {
                  text: 'Grafik Realisasi PNBP Per - Unit'
                },
                xAxis: {
                  categories: ['Unit']
                },
                yAxis: {
                  title: {
                    text: 'Realisasi PNBP'
                  }
                },
                series:             
                [

                <?php 

                include('../config/koneksi.php'); 

                  $sql   = "SELECT nmunit FROM r_unit";
                  $query = mysqli_query($konek, $sql )  or die(mysql_error($konek));
                  while( $ret = mysqli_fetch_array( $query ) ){
                    $merek=$ret['nmunit'];                     
                    $sql_jumlah   = "SELECT sum(D.jml_setoran) AS realisasi FROM r_satker as S
                    LEFT join r_unit AS U on S.kdunit = U.kdunit
                    LEFT JOIN d_simponi as D on D.kdsatker = S.kdsatker
                    WHERE S.kdaktif = 1 AND U.nmunit = '$merek' GROUP BY U.kdunit";

                    $query_jumlah = mysqli_query($konek,$sql_jumlah ) or die(mysql_error($konek));
                    while( $data = mysqli_fetch_array( $query_jumlah ) ){
                      $jumlah = $data['realisasi'];                 
                    }             
                    ?>
                    {
                      name: '<?php echo $merek; ?>',
                      data: [<?php echo $jumlah; ?>]
                    },
                    <?php } ?>
                    ]
                  });
            });  
            
              
            </script>

    <div id='container'></div>    
          </div>
        </div>
      </div>
    </div>
</div>