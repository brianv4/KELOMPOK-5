<!DOCTYPE html>
<html class="full-height" lang="en-US">
  <head>
    <?php 
    session_start();
    ?>
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
  <?php

  

  ?>
      <header>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
        <div class="container"><a class="navbar-brand" href="#"><strong>Sri Rejeki</strong></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
             <li class="nav-item"><a class="nav-link active" href="index.php">Beranda</a></li>
             <li class="nav-item"><a class="nav-link" href="#team">Profil</a></li>
             
              <li class="nav-item"><a class="nav-link" href="galeri.php">Galeri</a></li>
              <li class="nav-item submenu dropdown">
              <?php if (isset($_SESSION['status'])){ ?>
              
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendaftaran</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="peserta/kursus/formulir_kursus.php">kursus</a></li>
                  <li class="nav-item"><a class="nav-link" href="peserta/pelatihan/formulir_pelatihan.php">pelatihan</a></li>
                </ul>
              <!--<li class="nav-item"><a class="nav-link" href="peserta/calon_peserta/form_daftar.php">Pendaftaran</a></li>-->
              <?php
               
               
               }else{
                 ?>

                 <li class="nav-item"><a class="nav-link active" href="peserta/calon_peserta/form_daftar.php">Pendaftaran</a></li>
             
                 <?php
               }
                 ?>
              <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
             
             <?php if(!isset($_SESSION['username'])){  ?>
            
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#loginModal">LOGIN</button>
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginPelatihan">LOGIN</button> -->
            <?php 
            }else{
            ?>
            <li class="nav-link"><i>Selamat Datang</i></li>
            <li class="nav-item submenu dropdown">
                
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php echo $_SESSION['username'] ?></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Ubah Password</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                  </ul>
               </li>
            <?php }?>
            </ul>
            <!--<a class="btn btn-primary btn-rounded my-0" href="" data-target="#loginModal">Login</a>-->
          <!-- login modal-->
          
        </div>
        </div>
      </nav>
      <div></div>


        <!--Login Koneksi-->
        <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
  ?>

  <!--Form Login Kursus-->
      <div class="modal fade" role="dialog" id="loginModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Login Anggota</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
        <form action="cekloginlagi.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="user" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                    </div>
					</div> 
          <div class="modal-footer">
          
                    <input type="submit" name="login" class="btn btn-info" value="sign in">
                </div>
                    </div>  
                </div> 
        </form>
        <?php
        if (isset($_POST['login'])){
          $user = $_POST['user'];
          $pass = $_POST['pass'];
          $data_user = mysqli_query($koneksi, "SELECT * FROM calon_peserta WHERE username = '$user' AND password = '$pass'");
          $r = mysqli_fetch_array($data_user);
          $username = $r['username'];
          $password =$r['password'];
          $status = $r['status'];
          if($user == $username && $pass == $password){
            $_SESSION['status'] = $status;
            header('location:index2.php');

          }
          else
          {
            echo 'Login Gagal';
          }
        }
        ?>
      
            </div>
        </div>    
    </div>

  


<!--Login Koneksi-->
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
  ?>

    <!--Form Login Pelatihan
    <div class="modal fade" role="dialog" id="loginPelatihan">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Login Anggota</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
        <form action="cek_login_pelatihan.php" method="post">
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
    -->
  

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
          </div>
        </div>
      </section>
  </header>

<!--DESAIN-->
<div id="content">
        <section class="row no-gutters" id="features">
            <div class="col-lg-3 col-md-6 col-sm-12 deep-purple lighten-1 text-white">
              <div class="p-5 text-center wow zoomIn" data-wow-delay=".1s"><i class="fa fa-line-chart fa-2x"></i>
                <div class="h5 mt-3">Mandiri</div>
                <p class="mt-5">Belajar menjahit akan membuat Anda lebih mandiri.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 purple lighten-1 text-white">
              <div class="p-5 text-center wow zoomIn" data-wow-delay=".3s"><i class="fa fa-industry fa-2x"></i>
                <div class="h5 mt-3">Lebih hemat!</div>
                <p class="mt-5">Baju buatan sendiri lebih hemat daripada membeli baju yang ada di Mall.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 teal lighten-1 text-white">
              <div class="p-5 text-center wow zoomIn" data-wow-delay=".5s"><i class="fa fa-users fa-2x"></i>
                <div class="h5 mt-3">Sisi Kreatif Anda akan makin terasah</div>
                <p class="mt-5">Dengan belajar menjahit, Anda juga akan lebih kreatif untuk mengembangkan berbagai ide-ide unik Anda.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 light-blue lighten-1 text-white">
              <div class="p-5 text-center wow zoomIn" data-wow-delay=".7s"><i class="fa fa-bullhorn fa-2x"></i>
                <div class="h5 mt-3"> Bisnis</div>
                <p class="mt-5">Usaha pakaian jadi dan butik terkenal yang berawal dari sebuah mesin jahit.</p>
              </div>
            </div>
          </section>

<!--PROFIL-->
<section class="py-5" id="projects">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="text-center h1 my-4">Fasilitas Kami</h2>
      <p class="px-5 mb-5 pb-3 lead blue-grey-text text-center">
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
    <div class="row wow fadeInLeft" data-wow-delay=".3s">
      <div class="col-lg-6 col-xl-5 pr-lg-5 pb-5"><img class="img-fluid rounded z-depth-2" src="img/10.jpg" alt="project image"/></div>
      <div class="col-lg-6 col-xl-7 pl-lg-5 pb-4">
        <div class="row mb-3">
          <div class="col-1 mr-1"><i class="fa fa-book fa-2x cyan-text"></i></div>
          <div class="col-10">
            <h5 class="font-bold">Education</h5>
            <p class="grey-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda
              voluptate velit.
            </p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-1 mr-1"><i class="fa fa-code fa-2x red-text"></i></div>
          <div class="col-10">
            <h5 class="font-bold">Technology</h5>
            <p class="grey-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda
              voluptate velit.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-1 mr-1"><i class="fa fa-money fa-2x deep-purple-text"></i></div>
          <div class="col-10">
            <h5 class="font-bold">Finance</h5>
            <p class="grey-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda
              voluptate velit.
            </p>
          </div>
        </div>
      </div>
    </div>
    <hr/>
    <div class="row pt-5 wow fadeInRight" data-wow-delay=".3s">
      <div class="col-lg-6 col-xl-7 mb-3">
        <div class="row mb-3">
          <div class="col-1 mr-1"><i class="fa fa-bar-chart fa-2x indigo-text"></i></div>
          <div class="col-10">
            <h5 class="font-bold">Marketing</h5>
            <p class="grey-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda
              voluptate velit.
            </p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-1 mr-1"><i class="fa fa-music fa-2x pink-text"></i></div>
          <div class="col-10">
            <h5 class="font-bold">Entertainment</h5>
            <p class="grey-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda
              voluptate velit.
            </p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-1 mr-1"><i class="fa fa-smile-o fa-2x blue-text"></i></div>
          <div class="col-10">
            <h5 class="font-bold">Communication</h5>
            <p class="grey-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda
              voluptate velit.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-5 mb-3"><img class="img-fluid rounded z-depth-2" src="img/5.jpg" alt="project image"/></div>
    </div>
  </div>
</section>

<!--ALUR-->
<section class="text-center py-5 grey lighten-4" id="about">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3">Alur Pendaftaran</h2>
      <p class="px-5 mb-5 pb-3 lead blue-grey-text">
      Alur Pendafaran Lembaga Kursus dan Pelatihan Menjahit Sri Rejeki adalah sebagai berikut :
      </p>
    </div>
    <div class="row">
      <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay=".3s"><i class="fa fa-dashboard fa-3x orange-text"></i>
        <h3 class="h4 mt-3">1.</h3>
        <p class="mt-3 blue-grey-text">
        Calon peserta mengunjungi alamat web Lembaga Kursus dan Pelatihan Menjahit Sri Rejeki untuk mendapat
informasi lengkap mengenai Lembaga Kursus dan Pelatihan Menjahit Sri Rejeki.
        </p>
      </div>
      <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-comments-o fa-3x cyan-text"></i>
        <h3 class="h4 mt-3">2.</h3>
        <p class="mt-3 blue-grey-text">
        Jika peserta tertarik, peserta dapat mendaftar akun sebagai calon peserta di menu Pendaftaran, kemudian pilih
Calon Peserta.
        </p>
      </div>
      <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-cubes fa-3x red-text"></i>
        <h3 class="h4 mt-3">3.</h3>
        <p class="mt-3 blue-grey-text">
        Isi data diri yang ada dengan benar, seperti Nama, NIK, Tempat dan Tanggal Lahir dll. Kemudian klik Daftar/Simpan.
        </p>
      </div>
      <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay=".4s"><i class="	fa fa-bell-o fa-3x red-text"></i>
        <h3 class="h4 mt-3">4.</h3>
        <p class="mt-3 blue-grey-text">
        Setelah Mendaftar menjadi calon peserta, calon peserta akan mempunyai akun. Aknun ini dapat digunakan untuk
masuk/login untuk melanjutkan pendaftaran jika calon peserta tertarik untuk mendapat kursus atau pelatihan.
        </p>
      </div>
      <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-address-card-o fa-3x cyan-text"></i>
        <h3 class="h4 mt-3">5.</h3>
        <p class="mt-3 blue-grey-text">
        Jika calon peserta ingin mendaftar kursus atau pelatihan. Peserta melakukan login, kemudian memilih menu pendaftaran
kursus atau pelatihan.
        </p>
      </div>
      <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-comments-o fa-3x cyan-text"></i>
        <h3 class="h4 mt-3">6.</h3>
        <p class="mt-3 blue-grey-text">
        Isi persyaratan yang diperlukan dengan lengkap, kemudian simpan.
        </p>
      </div>
      <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-comments-o fa-3x cyan-text"></i>
        <h3 class="h4 mt-3">7.</h3>
        <p class="mt-3 blue-grey-text">
        Jika calon peserta telah melakukan pendaftaran kursus atau pelatihan, maka admin akan memberi tahu peserta melalui
nomor telepon yang telah diinputkan calon peserta. Kemudian peserta dapat melakukan login kembali sesuai dengan
yang dipilihnya.
        </p>
      </div>
      <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-comments-o fa-3x cyan-text"></i>
        <h3 class="h4 mt-3">8.</h3>
        <p class="mt-3 blue-grey-text">
        Setelah mengikutui pelatihan atau kursus sesuai jangka waktu yang ditentukan, maka peserta akan mengikuti ujian
dan mendapatkan sertifikat untuk pelatihan, kursus level 2 dan kursus level 3.
        </p>
      </div>
      <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-comments-o fa-3x cyan-text"></i>
        <h3 class="h4 mt-3">9.</h3>
        <p class="mt-3 blue-grey-text">
        Sertifikat akan diberikan oleh lembaga setelah kegiatan kursus atau pelatihan selesai.
        </p>
      </div>
    </div>
  </div>
</section>


<!--HARGA-->
<section class="text-center py-5 indigo darken-1 text-white" id="pricing">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3">Persyaratan</h2>
      <p class="px-5 mb-5 pb-3 lead">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi,
        veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.
      </p>
    </div>
    <div class="row wow zoomIn">
      <div class="col-lg-4 col-md-12 mb-r">
        <div class="card card-image">
          <div class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded">
            <div class="card-body">
              <div class="h5">Individual</div>
              <div class="py-5"><sup class="display-4">$</sup><span class="display-1">9</span><span class="display-4">/m</span></div>
              <ul class="list-unstyled">
                <li>
                  <p><strong>1</strong> person</p>
                </li>
                <li>
                  <p><strong>10</strong> projects</p>
                </li>
                <li>
                  <p><strong>100</strong> features</p>
                </li>
                <li>
                  <p><strong>20GB</strong> storage</p>
                </li>
              </ul><a class="btn btn-outline-white mt-5"> Buy now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mb-r">
        <div class="card card-image">
          <div class="text-white text-center pricing-card d-flex align-items-center rgba-teal-strong py-3 px-3 rounded">
            <div class="card-body">
              <div class="h5">Startup</div>
              <div class="py-5"><sup class="display-4">$</sup><span class="display-1">29</span><span class="display-4">/m</span></div>
              <ul class="list-unstyled">
                <li>
                  <p><strong>10</strong> person</p>
                </li>
                <li>
                  <p><strong>100</strong> projects</p>
                </li>
                <li>
                  <p><strong>200</strong> features</p>
                </li>
                <li>
                  <p><strong>100GB</strong> storage</p>
                </li>
              </ul><a class="btn btn-outline-white mt-5"> Buy now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mb-r">
        <div class="card card-image">
          <div class="text-white text-center pricing-card d-flex align-items-center rgba-red-strong py-3 px-3 rounded">
            <div class="card-body">
              <div class="h5">Enterprise</div>
              <div class="py-5"><sup class="display-4">$</sup><span class="display-1">99</span><span class="display-4">/m</span></div>
              <ul class="list-unstyled">
                <li>
                  <p><strong>10+</strong> person</p>
                </li>
                <li>
                  <p><strong>Unlimited</strong> projects</p>
                </li>
                <li>
                  <p><strong>Unlimited</strong> features</p>
                </li>
                <li>
                  <p><strong>1TB</strong> storage</p>
                </li>
              </ul><a class="btn btn-outline-white mt-5"> Buy now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--GALERI-->
<section class="py-5" id="team">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3 text-center">Profil</h2>
      <p class="px-5 mb-5 pb-3 lead text-center blue-grey-text">
        LKP SRI REJEKI adalah
        <br>
        Visi  :
        <br>
        Misi  : 
      </p>
    </div>
    <div class="row mb-lg-4 center-on-small-only">
      <div class="col-lg-6 col-md-12 mb-r wow fadeInLeft" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="upload_galery/<?php echo $row['nama_file'];?>" alt="" /></div>
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

    <section id="contact" style="background-image:url('img/bg.jpg');">
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
                 
                <div class="center-on-small-only mb-4">
                 
                </div>
              </form>
            </div>
            <div class="center">
              <ul class="list-unstyled text-center">
                <li class="mt-4"><i class="fa fa-map-marker indigo-text fa-2x" ></i>
                  <br> <a class="mt-2">Perum Kalirejo, Blok E-25/26, Kab.Probolinggo</a>                  
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