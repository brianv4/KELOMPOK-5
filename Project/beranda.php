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
          <!-- login modal-->
         
          <!-- login modal-->
        </div>

        </div>
      </nav>
      <!-- Intro Section-->
      <!--Login Koneksi-->
      
        <!--Login Koneksi-->
        <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
  ?>
  <!--Kursus-->
      <div class="modal fade" role="dialog" id="loginModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Login Anggota</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
        <form action="cek_login.php" method="post">
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
</form>
            </div>
           
        </div>
        
    </div>
    <!--Kursus-->

    
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
                  <!--<div class="wow fadeInLeft" data-wow-delay="0.3s"><a class="btn btn-white dark-grey-text font-bold ml-0" href="https://www.youtube.com/watch?v=60ItHLz5WEA" target="_blank"><i class="fa fa-play mr-1"></i> View Demo</a><a class="btn btn-outline-white" href="#">Learn more</a></div>-->
                </div>
              </div>
            </div>
          </div>s
        </div>
      </section>
  </header>

    <section id="contact" style="background-image:url('img/panorama-3094696_1920.jpg');">
  <div class="rgba-black-strong py-5">
    <div class="container">
      <div class="wow fadeIn">
        <h2 class="h1 text-white pt-5 pb-3 text-center">Contact us</h2>
      </div>
      <div class="card mb-5 wow fadeInUp" data-wow-delay=".4s">
        <div class="card-body p-5">
          <div class="row">
            <div class="col-md-8">
              <form action="https://formspree.io/youremail@example.com" method="POST">
                <div class="row">
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class="form-control" id="name" type="text" name="name" required="required"/>
                      <label for="name">Your name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class="form-control" id="email" type="text" name="_replyto" required="required"/>
                      <label for="email">Your email</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="md-form">
                      <input class="form-control" id="subject" type="text" name="subject" required="required"/>
                      <label for="subject">Subject</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="md-form">
                      <textarea class="md-textarea" id="message" name="message" required="required"></textarea>
                      <label for="message">Your message</label>
                    </div>
                  </div>
                </div>
                <div class="center-on-small-only mb-4">
                  <button class="btn btn-indigo ml-0" type="submit"><i class="fa fa-paper-plane-o mr-2"></i> Send</button>
                </div>
              </form>
            </div>
            <div class="col-md-4">
              <ul class="list-unstyled text-center">
                <li class="mt-4"><i class="fa fa-map-marker indigo-text fa-2x" ></i>
                  <br> <a class="mt-2" href="https://goo.gl/maps/roahqehHAP6Hdw6E9" target="_blank">Perum Kalirejo, Blok E-25/26, Kab.Probolinggo</a>                  
                </li>
                <li class="mt-4"><i class="fa fa-phone indigo-text fa-2x"></i>
                  <p class="mt-2">+ 01 234 567 89</p>
                </li>
                <li class="mt-4"><i class="fa fa-envelope indigo-text fa-2x"></i>
                  <p class="mt-2">contact@company.com</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
      <!--modal 
      <div class="modal fade" role="dialog" id="loginModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Modal Login Form</h3>
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
    -->
      <!--modal-->
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