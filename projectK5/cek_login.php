<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'config.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from peserta_kursus where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

if($cek > 0){
	
	//login multiuser
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['jenis_level']=="level1"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jenis_level'] = "level1";
		// alihkan ke halaman dashboard admin
		header("location:dashboard-user/dashboard/tampilan2.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['jenis_level']=="level2"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jenis_level'] = "level2";
		// alihkan ke halaman dashboard pegawai
		header("location:dashboard-user/dashboard/tampilan.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['jenis_level']=="level3"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jenis_level'] = "level3";
		// alihkan ke halaman dashboard pengurus
		header("location:dashboard-user/dashboard/tampilan3.php");

}else{
	header("location:index.php");	
}
}
?>