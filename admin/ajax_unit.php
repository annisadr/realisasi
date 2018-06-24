<option selected="selected" value="">--Pilih Salah Satu--</option>
<?php 
    include '../config/koneksi.php';
    
    $sel_prov="select * from r_satker_2017 where kdunit='".$_POST["kdunit"]."' AND kdaktif = 1";
    $q=mysqli_query($konek,$sel_prov);
    while($data_prov=mysqli_fetch_array($q)){
    
    ?>
        <option value="<?php echo $data_prov["kdsatker"] ?>"><?php echo $data_prov["kdsatker"] ?> | <?php echo $data_prov["nmsatker"] ?></option><br>
    
    <?php
    }
?>