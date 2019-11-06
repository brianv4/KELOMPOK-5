<?php include('koneksi.php');?>

<!DOCTYPE html>
<html class="full-height" lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sri Rejeki</title>
    <meta name="description" content="Material design landing page template built by TemplateFlip.com"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">

  </head>
  <body>
      <header>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
        <div class="container"><a class="navbar-brand" href="#"><strong>Sri Rejeki</strong></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
             <li class="nav-item"><a class="nav-link active" href="beranda.html">Beranda</a></li>
              <li class="nav-item"><a class="nav-link" href="profil.html">Profil</a></li>
              <li class="nav-item"><a class="nav-link" href="galeri.html">Galeri</a></li>
              <li class="nav-item"><a class="nav-link" href="formdaftar.html">Daftar</a></li>
              <li class="nav-item"><a class="nav-link" href="info.html">Info</a></li>
            </ul><a class="btn btn-primary btn-rounded my-0" href="https://templateflip.com/templates/material-landing" target="_blank">Login</a>
          </div>
        </div>
      </nav>

      <section class="text-center py-5 indigo darken-1 text-white" id="pricing">
        <div class="container">
          <div class="wow fadeIn">
            
            <p class="px-5 mb-5 pb-3 lead">
           
            </p>
          </div>
          <div class="main">
           <?php
           if(empty($_GET['page']) OR $_GET['page'] == NULL) {
            include('content/home.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page'] == 'tambah') {
            include('content/tambah.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page'] == 'detail') {
            include('content/detail.php');
        }    
        elseif(!empty($_GET['page']) && $_GET['page'] == 'update') {
            include('content/update.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page'] == 'hapus') {
            include('content/delete.php');
        }       
           ?>
           
          
      </section>      

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script>new WOW().init();</script>
</body>
</html>  