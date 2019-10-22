<!DOCTYPE html>
<html>
<head>
	<title>Login admin</title>
</head>
<!--<link rel="stylesheet" type="text/css" href="login.css">
<script type="text/javascript" src="login.js"></script>-->
<body>
	<h2>Login admin</h2>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="cek_login.php">
	
    <!--<form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <input type="submit" value="LOGIN"/>
      <p class="message">Not registered? <a href="#">Create an account</a></p>-->
    
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
</body>
</html>