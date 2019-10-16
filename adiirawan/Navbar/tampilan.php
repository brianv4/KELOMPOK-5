<!DOCTYPE html>
<html>
<head>
	<title>Halaman Web Peserta</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
	
</head>
<body>

<!-- 
Author : diki alfarabi hadi 
Site : www.malasngoding.com
-->
<div class="content">
	<header>
		<h1 class="judul">SRI REJEKI</h1>
		<h3 class="deskripsi">LEMBAGA KURSUS DAN PELATIHAN</h3>
<!--untuk menampilkan username yang login-->
<?php
session_start();
 
// check apakah session email sudah ada atau belum.
// jika belum maka akan diredirect ke halaman index (login)
if( empty($_SESSION['email']) ){
    header('Location: tampilan.php');
}
 
?>
 
<!DOCTYPE html>
<head>
    <title>Profil</title>
</head>
<body>
    <!-- Menampilkan isi session email -->
	<h3> Hallo Selamat Datang <?php echo $_SESSION['username']; ?> </h3>
	<a href="Admin/logout.php">LOGOUT</a> 
    
</body>
</html>
		
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="tampilan.php?page=home">Home</a></li>
			<li><a href="tampilan.php?page=profil">Jadwal</a></li>
			<li><a href="tampilan.php?page=tutorial">Materi</a></li>
			<li><a href="#">Ubah Password</a></li>
			<li><a href="#">Logout</a></li>
			
			
			
			<!--<li class="nav-item submenu dropdown">
                        <a href="#" class = "nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Option</a>
                        <ul class="dropdown-menu">
                            <li class = "nav-item"><a class ="nav-link" href="#">Ubah Password</a></li>
                            <li class = "nav-item"><a class ="nav-link" href="#">Logout</a></li>
                            
                        </ul>
            </li> -->
		<!--	<li><a href="http://localhost/NAVBAR/tutorial_pendaftaran/index.php">INPUT PESERTA</a></li> -->
		</ul>
	</div>
 
	<div class="badan">
 
	

	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'profil':
				include "halaman/profil.php";
				break;
			case 'tutorial':
				include "halaman/tutorial.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>
</div>

</body>
</html>