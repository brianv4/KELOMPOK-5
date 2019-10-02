<!DOCTYPE html>
<html>
<head>
	<title>Welcome to admin page</title>
</head>
<body>
	<h2>Halaman Admin</h2>
	
	<br/>
 
	
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
 <h3>BONJOUURR!!</h3>
	<h4>ANDA TELAH LOGIN !! <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
 
	<br/>
	<br/>
 
	<a href="logout.php">LOGOUT</a>
 
 
</body>
</html>