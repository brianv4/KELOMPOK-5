<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'config.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['user'];
$password = $_POST['pass'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from calon_peserta where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

if($cek > 0){
	
	//login multiuser
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['status']=="0"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "0";
		// alihkan ke halaman dashboard admin
		header("location:index.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['status']=="1"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "1";
		// alihkan ke halaman dashboard pegawai
		header("location:dashboard-user/dashboard/tampilanpelatihan.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['status']=="2"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "2";
		// alihkan ke halaman dashboard pengurus
        header("location:dashboard-user/dashboard/tampilan2.php");
    }else if($data['status']=="3"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "3";
		// alihkan ke halaman dashboard pengurus
        header("location:dashboard-user/dashboard/tampilan.php");
    }else if($data['status']=="4"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "4";
		// alihkan ke halaman dashboard pengurus
		header("location:dashboard-user/dashboard/tampilan3.php");


	}else{
		header("location:index.php");	
}
}else{
	header("location:index.php?pesan=passwordsalah");	
}
?>