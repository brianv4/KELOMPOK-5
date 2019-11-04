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
    <script type="text/javascript" src="jquery-1.4.3.min.js"></script>
    <!--menambahkan fancybox-->
    <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <!--menambahkan css fancybox-->
    <link href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript">
    $(document).ready(function(){
        $(".fancy").fancybox();
        });
    </script>
  </head>
  <body>
  
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
          <div class="container"><a class="navbar-brand" href="#"><strong>Sri Rejeki</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarContent">
              <ul class="navbar-nav ml-auto">
               <li class="nav-item"><a class="nav-link active" href="beranda.html">Beranda</a></li>
               <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Struktur Pengurusan</a></li>
                    <li class="nav-item"><a class="nav-link" href="profil.html">Profil</a></li>
                  </ul>
               </li>
                <li class="nav-item"><a class="nav-link" href="galeri.html">Galeri</a></li>
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendaftaran</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Info Daftar</a></li>
                    <li class="nav-item"><a class="nav-link" href="formdaftar.html">Daftar Online</a></li>
                  </ul>
               </li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
              </ul>
              <!--<a class="btn btn-primary btn-rounded my-0" href="" data-target="#loginModal">Login</a>-->
            <!-- login modal-->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal">LOGIN</button>
            <!-- login modal-->
          </div>
  
          </div>
        </nav>
  <br>
  <?php
    //koneksi ke database
    $conn = mysql_connect('localhost', 'root', '');
    mysql_select_db('lkpsri');
    //membaca data dari database
    $result = mysql_query("select * from galeri");
    //menampilkan foto
    
    ?>
          
<section class="py-5" id="team">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3 text-center">Dokumentasi</h2>
      <p class="px-5 mb-5 pb-3 lead text-center blue-grey-text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
        esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.
      </p>
    </div>
    <div class="row mb-lg-4 center-on-small-only">
      <div class="col-lg-6 col-md-12 mb-r wow fadeInLeft" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" <img src="kelompok-5/project/../../uploadpengurus/<?php echo $row['nama_file'];?>" alt="profil owner" width="200" border="0"/> /></div>
        <div class="col-md-6 float-right">
          <div class="h4">Nicole West</div>
          <h6 class="font-bold blue-grey-text mb-4">Lead Designer</h6>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="ml-1">@nicolewest</span></a>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 mb-r wow fadeInRight" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="img/woman-2.jpg" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h4">Hannah Cruz</div>
          <h6 class="font-bold blue-grey-text mb-4">Photographer</h6>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="ml-1">@hannahcruz</span></a>
        </div>
      </div>
    </div>
    <div class="row center-on-small-only">
      <div class="col-lg-6 col-md-12 mb-r wow fadeInLeft" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="img/man-1.jpg" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h4">Mark Hall</div>
          <h6 class="font-bold blue-grey-text mb-4">Web Developer</h6>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="ml-1">@markhall</span></a>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 mb-r wow fadeInRight" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="img/man-2.jpg" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h4">Vincent Harris</div>
          <h6 class="font-bold blue-grey-text mb-4">Web Developer</h6>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="ml-1">@vincentharris</span></a>
        </div>
      </div>
    </div>
  </div>
  
  
</section>
<div class="modal fade" role="dialog" id="loginModal">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h3 class="modal-title">Login User</h3>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <div class="modal-body">
                  <div class="form-group">
                      <input type="text" name="username" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Sign In</button>
              </div>
          </div>
      </div>
  </div>
   <footer class="page-footer indigo darken-2 center-on-small-only pt-0 mt-0">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container-fluid">
          <p>&copy; <a href="/">Sri Rejeki</a> - Design: <a href="#" target="#">EnvisionDev</a></p>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script>new WOW().init();</script>
  </body>
</html>