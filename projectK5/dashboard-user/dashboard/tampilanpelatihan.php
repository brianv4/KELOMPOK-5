<?php
 
// check apakah session email sudah ada atau belum.
// jika belum maka akan diredirect ke halaman index (login)

session_start();
if(!isset($_SESSION['username'])){
	header('Location:../../index.php');
}
?>
<!DOCTYPE html>
<html>
<head>

	<title>Halaman Web Peserta Kursus</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<!-- menghubungkan dengan file jquery -->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<!-- 
Author : diki alfarabi hadi 
Site : www.malasngoding.com
-->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">LKP SRI REJEKI</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="tampilanpelatihan.php?page=home5">Home</a></li>
	  <li><a href="tampilanpelatihan.php?page=profil5">Jadwal</a></li>
	  <li><a href="tampilanpelatihan.php?page=tutorial5">Materi</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username'] ?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	  <li><a href="../../ubahpassword.php"><span class="glyphicon glyphicon-log-out"></span> Ubah Password</a></li>
	  <li><a href="../../admin/profilpeserta.php"><span class="glyphicon glyphicon-log-out"></span> Profil</a></li>
    </ul>
	<?php if(!isset($_SESSION['username'])){  ?> </h3>	
			<?php 
          }else{
          ?>
  </div>
</nav>

 <center><h2>Selamat Datang Peserta Pelatihan</h2></center>

			<?php }?>	
		
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home5':
				include "../halaman5/home5.php";
				break;
			case 'profil5':
				include "../halaman5/profil5.php";
				break;
			case 'tutorial5':
				include "../halaman5/tutorial5.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "../halaman5/home5.php";
	}
 
	 ?>
 
	</div>
</div>

</body>
</html>