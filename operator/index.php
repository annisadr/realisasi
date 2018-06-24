<?php
  //menyambungkan koneksi
  include '../config/koneksi.php';

  session_start();

  if(isset($_GET['page'])) $page = $_GET['page'];
    else $page = 'index';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Biro Keuangan Kementerian Pekerjaan Umum dan Perumahan Rakyat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .dropbtn {
      cursor: pointer;
    }
    
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      text-decoration: none;
      display: none;
      position: absolute;
      background-color: white;
      min-width: 200px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      background-color: #254d74;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown:hover .dropdown-content {
      display: block;
      background-color: #254d74;
      color: black;
    }

    #myNavbar a, ul, li {
      color: white;
    }

    #myNavbar a:hover {
      color: black;
      background-color: #e6b800;
    }

    .navbar {
      background-color: #254d74;
      font-size: 25px; 
      font-family: Times New Roman, Times, serif; 
      padding-top: 10px; 
      padding-bottom: 10px;
    }

    #navbar a {
      color: white;
    }

    #navbar a:hover {
      background-color: #e6b800;
      color: black;
    }

    #dropdown a {
      color: black;
    }

    .affix {
      top: 0;
      width: 100%;
      z-index: 9999 !important;
    }

    .affix + .container-fluid {
      padding-top: 70px;
    }

    .center {
      text-align: center;
    }

    .pagination {
      display: inline-block;
    }

    .pagination a {
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color .3s;
      border: 1px solid #ddd;
      margin: 0 4px;
    }

    .pagination a.active {
      background-color: #4CAF50;
      color: white;
      border: 1px solid #4CAF50;
    }

    .pagination a:hover:not(.active) {background-color: #ddd;}

    footer {
      background-color: #1f4061; 
      color: white; 
      padding-top: 30px; 
      height: 200px;
    }
  </style>
</head>

<body>
  <div class="container-fluid" style="background-color:white;color:#fff;height:100px;">
    <img src="../gambar/Biro_Keuangan.png" style="padding-top: 10px;">
  </div>

  <nav class="navbar navbar-default bg-info" data-spy="affix" data-offset-top="197">
  <div class="container-fluid ">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
<!--       <ul>
        <img src="gambar/Biro_Keuangan.png" style="height: 70px; padding-left: 20px; padding-top: 5px; position: fixed;">
      </ul> -->
      <ul class="nav navbar-nav">
        <li>
          <a href="index.php?page=index">Dashboard</a>
        </li>

        <li class="dropdown">
          <a class="dropbtn">Profil</a>
          
          <ul style="font-size: 15px;">
            <li class="dropdown-content">
              <a href="index.php?page=strukturor">Struktur Organisasi</a>
              <a href="index.php?page=tf">Tugas dan Fungsi</a>
            </li>
          </ul>
        </li>

        <li>
          <a href="index.php?page=realisasi">Realisasi PNBP</a>
        </li>        

        <li>
          <a href="index.php?page=faq">FAQ</a>
        </li>

      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <!-- <?php
          if(isset($_SESSION['id'])){
            include 'logout.php';
          }
          else{
            include 'login.php';
          }
        ?> -->

        <li>
          <a href="../config/logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
    <div class="row">
      <?php
        if ($page=='index')
        include ('dashboard.php');
        elseif ($page=='strukturor')
        include ('struktur.php');
        elseif ($page=='tf')
        include ('tugasfungsi.php');
        elseif ($page=='tf1')
        include ('tftatalaksana.php');
        elseif ($page=='tf2')
        include ('tfpembinaan.php');
        elseif ($page=='tf3')
        include ('tfperbendaharaan.php');
        elseif ($page=='tf4')
        include ('tfevaluasi.php');
        elseif ($page=='faq')
        include ('faq.php');
        elseif ($page=='tambahfaq')
        include ('tambahfaq.php');
        elseif ($page=='realisasi')
        include ('realisasipnbp.php');
      ?>
    </div>
  </div>
  <br>

  <footer class="container-fluid" style="">
    

    <div class="col-sm-6">
      <p>COPYRIGHT</p>
      <p style="font-size: 11px;">Copyright @ 2018 Biro Keuangan Kementerian PU. All Rights Reserved.</p>
    </div>
    <div class="col-sm-6" style="text-align: right;;">
      <P>: DIKELOLA OLEH</P>
      <i style="font-size: 11px;">Biro Keuangan Kementerian Pekerjaan Umum dan Perumahan Rakyat</i>
      <p style="font-size: 11px;">Jl. Pattimura 20, Jakarta Selatan (12110)</p>
      <p style="font-size: 11px;">021-7250687</p>
    </div>
    
    
  </footer>
</body>
</html>
