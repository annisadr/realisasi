<!-- tidak bisa 2 login -->
<?php
  //menyambungkan koneksi
  include 'config/koneksi.php';

 session_start();
  if(isset($_SESSION['username']) ){
    header("Location: halo.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Biro Keuangan Kementerian Pekerjaan Umum dan Perumahan Rakyat</title>
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <div class="login">
    <img src="gambar/Biro_Keuangan.png"><br><br>
    <h1 class="login-heading">
      Please login.</h1>
      <form action="config/loginproses.php" method="POST" role="form">
        <input type="text" name="username" placeholder="Username" required="required" class="input-txt" />
          <input type="password" name="password" placeholder="Password" required="required" class="input-txt" />
          <div class="login-footer">
             
            <button type="submit" role="button" name="login" class="btn btn--right" value="Login">Sign in  </button>
    
          </div>
      </form>
  </div>
</div>
  
  

    <script  src="js/index.js"></script>



</body>
</html>
