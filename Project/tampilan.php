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
      <div class="menu">
      	<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
	    	<div class="container"><a class="navbar-brand" href="#"><strong>Sri Rejeki</strong></a>
	        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
	        	<div class="collapse navbar-collapse" id="navbarContent">
	            	<ul class="navbar-nav ml-auto">
			             <li class="nav-item"><a class="nav-link active" href="tampilan.php?page=beranda">Beranda</a></li>
			             <li class="nav-item submenu dropdown">
	                		<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil</a>
			                <ul class="dropdown-menu">
			                  <li class="nav-item"><a class="nav-link" href="tampilan.php?page=profil-struktur">Struktur Pengurusan</a></li>
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
      </div>
      <!-- Navbar-->

      <!-- Intro Section-->
      <div class="modal fade" role="dialog" id="loginModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Login user</h3>
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
<!--
    <section class="view hm-gradient" id="intro">
        <div class="full-bg-img d-flex align-items-center">
          <div class="container">
            <div class="row no-gutters">
              <div class="col-md-10 col-lg-6 text-center text-md-left margins">
                <div class="white-text">
                  <div class="wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 class="h1-responsive font-bold mt-sm-5">LKP SRI REJEKI</h1>
                    <div class="h6">
                      Lembaga Kursus Pelatihan Menjahit Swsta yang berdiri pada 12 Desember 2000. Perum Kalirejo blok E-25 Dringu Probolinggo
                    </div>
                  </div><br>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
-->
	</header>


    <div class="badan">
	<?php 
		if(isset($_GET['page'])){
			$page = $_GET['page'];
	 
			switch ($page) {
				case 'beranda':
					include "halaman/beranda.php";
					break;
				case 'profil-struktur':
					include "halaman/struktur.php";
					break;
				case 'profil':
					include "halaman/tutorial.php";
					break;
				case 'galeri':
					include "halaman/tutorial.php";
					break;	
				case 'pendaftaran-info':
					include "halaman/tutorial.php";
					break;		
				case 'pendaftaran-daftar':
					include "halaman/tutorial.php";
					break;
				default:
					echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
					break;
			}
		}else{
			include "halaman/beranda.php";
		}
		?>    	
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
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script>new WOW().init();</script>

  </body>
  </html>
