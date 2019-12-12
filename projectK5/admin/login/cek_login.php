<?php 
session_start();
 
include 'koneksi.php';
 
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
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			
			
			$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

			$cek = mysqli_num_rows($login);
			

			if($cek > 0){
			
				$data = mysqli_fetch_assoc($login);
			
				
				if($data['level']=="Owner"){
			
				
					$_SESSION['username'] = $username;
					$_SESSION['level'] = "Owner";
				
					header("location:../halaman_owner.php");
			

				}else if($data['level']=="Admin"){
					
					$_SESSION['username'] = $username;
					$_SESSION['level'] = "Admin";
					
					header("location:../halaman_owner.php");
			
				}else{
			
					header("location:index.php?pesan=gagal");
				}	
			}else{
				header("location:index.php?pesan=gagal");
			}
			
?>