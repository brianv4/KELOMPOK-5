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

<table>
        <tr>
        <?php
          $i = 1;
          while($row = mysql_fetch_array($result)){
        ?>
            <td>
                <a href="../../uploadpengurus/<?php echo $row['nama_file'];?>" class="fancy">
                <img src="../../uploadpengurus/<?php echo $row['nama_file'];?>" alt="" width="200" border="0"/>
                </a>
                <br/><?php echo $row['deskripsi'];?>
                <br/>
        <a href="edit-pengurus.php?id=<?php echo $row['id'];?>">Edit</a>
        <br/>
        <a href="delete-pengurus.php?id=<?php echo $row['id'];?>" onclick="return confirm('Anda yakin?');">Delete</a>
            </td>
        <?php
            if($i % 3 == 0){
                echo '</tr><tr>';
            }
            $i++;
        }
        

        ?>
        
        <br/>
        </tr>
    </table>
          
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