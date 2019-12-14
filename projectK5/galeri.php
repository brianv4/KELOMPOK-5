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
    <!-- <script type="text/javascript" src="jquery-1.4.3.min.js"></script> -->
    <!--menambahkan fancybox-->
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">
<!-- library JS -->
<script src="//code.jquery.com/jquery-3.2.0.min.js"></script>
<!-- library JS fancybox -->
<script src="fancybox/jquery.fancybox.js"></script>

<script type="text/javascript">
    $("[data-fancybox]").fancybox({ });
</script>

<style type="text/css">
.gallery img {
    width: 30%;
    height: auto;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
}
</style>
  </head>
  <body>
  <?php 
// mengaktifkan session php
session_start();
?>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
          <div class="container"><a class="navbar-brand" href="#"><strong>Sri Rejeki</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarContent">
              <ul class="navbar-nav ml-auto">
               <li class="nav-item"><a class="nav-link active" href="index.php">Beranda</a></li>
               <li class="nav-item"><a class="nav-link active" href="index.php#team">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="galeri.php">Galeri</a></li>
                <li class="nav-item submenu dropdown">
                <?php 
                  if (isset($_SESSION['status'])){ ?>

                  <?php
                    if($_SESSION['status'] == "0"){

                   
                  ?>
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendaftaran</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="nav-link" href="peserta/kursus/formulir_kursus.php">kursus</a></li>
                          <li class="nav-item"><a class="nav-link" href="peserta/pelatihan/formulir_pelatihan.php">pelatihan</a></li>
                        </ul>
                    <?php
                      }else if ($_SESSION['status'] == "1"){
                    ?>
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendaftaran</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="nav-link" href="peserta/kursus/formulir_kursus.php">kursus</a></li>
                        </ul>
                        <li class="nav-link"><i><font color="white">Pelatihan</i></font></li>
                    <?php
                      }else if($_SESSION['status'] == "2"){
                    ?>
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendaftaran</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="nav-link" href="peserta/pelatihan/formulir_pelatihan.php">pelatihan</a></li>
                        </ul>
                       <li class="nav-link"><i><font color="white">Kursus Level 1</i></font></li>
                    <?php
                      }else if($_SESSION['status'] == "3"){
                    ?>
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendaftaran</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="nav-link" href="peserta/pelatihan/formulir_pelatihan.php">pelatihan</a></li>
                        </ul>
                        <li class="nav-link"><i><font color="white">kursus Level 2</i></font></li>
                    <?php
                      }else if($_SESSION['status'] == "4"){
                    ?>
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendaftaran</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="nav-link" href="peserta/pelatihan/formulir_pelatihan.php">pelatihan</a></li>
                        </ul>
                        <li class="nav-link"><i><font color="white">kursus Level 3</i></font></li>
                    <?php
                    }
                    ?>

                <?php
                  }
                  else
                  {
                 ?>

                    <li class="nav-item"><a class="nav-link active" href="peserta/calon_peserta/form_daftar.php">Pendaftaran</a></li>
             
                 <?php
                  }
                 ?>
                <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact</a></li>
                <?php if(!isset($_SESSION['username'])){  ?>
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#loginModal">LOGIN</button>
          <?php 
          }else{
          ?>
          <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'] ?></a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                  <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
             </li>
          <?php }?>
              </ul>
            
          </div>
  
          </div>
        </nav>
  <br>

<section class="py-5" id="team">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3 text-center">GALERY</h2>
      <p class="px-5 mb-5 pb-3 lead text-center blue-grey-text">
        Dokumentasi LKP Sri Rejeki
      </p>
    </div>
    
    <div class="gallery">
        
        <?php
        include('kon.php');

        //mengambil gambar dari database
        $query = $db->query("SELECT * FROM gallery ORDER BY id DESC");

        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageThumbURL = 'img/gallery/'.$row["nama_file"];
                $imageURL = 'img/gallery/'.$row["nama_file"];
        ?>
            <a href="<?php echo $imageURL; ?>" data-fancybox="group" data-caption="<?php echo $row["deskripsi"]; ?>" >
                <img src="<?php echo $imageThumbURL; ?>" alt="" />
            </a>
        <?php }
        } ?>
        
    </div>
    

    </div>
  </div>
  

</section>
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
                   <a href="peserta/calon_peserta/form_daftar.php"><font color="blue"><u>belum memiliki akun?</u></font></a> 
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