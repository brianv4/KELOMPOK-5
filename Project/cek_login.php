<?php 
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysql_query("select * from tb_daftar where username='$username' and password='$password'");
$cek = mysql_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:index.php");	
}

?>