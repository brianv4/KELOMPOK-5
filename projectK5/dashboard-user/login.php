<?php 
// mengaktifkan session php


// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from peserta_kursus where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	header("location:tampilan.php");
	$_SESSION['status'] = "login";
	header("location:tampilan.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>