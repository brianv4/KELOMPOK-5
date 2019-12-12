<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="assets/asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="assets/asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="assets/asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="assets/asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="assets/asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="assets/asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="assets/asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

        <form action="cek_login.php" method="post" class="form-signin">
          <div class="panel periodic-login">
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">SR</h1>
                  <p class="element-name">Sri Rejeki</p>
                  <p class="atomic-mass">1.5.005.0001</p>

                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="username" class="form-text" required>
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" name="password" class="form-text" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <input type="submit" name="login" value="LOGIN" class="btn btn-raised btn-light waves-effect">
              </div>
          </div>
        </form>
        <?PHP
		if (isset($_POST['login'])){
			$user = $_POST['username'];
			$pass = md5($_POST['password']);
			$data_user = mysqli_query($koneksi,"select * from user where username='$user' and password='$pass'");
			$r = mysqli_fetch_array($data_user);
			$username = $r['username'];
			$password = $r['password'];
			$level = $r['level'];
			if ($user == $username && $pass == $password) {
				$_SESSION['level'] = $level;
				header('location:navbar.php');
			} else {
				echo '<center>Username atau Password salah</center>';
			}
		}
	?>
      </div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="assets/asset/js/jquery.min.js"></script>
      <script src="assets/asset/js/jquery.ui.min.js"></script>
      <script src="assets/asset/js/bootstrap.min.js"></script>

      <script src="assets/asset/js/plugins/moment.min.js"></script>
      <script src="assets/asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="assets/asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         
        });
       }
     </script>
     <!-- end: Javascript -->
   </body>
   </html>
