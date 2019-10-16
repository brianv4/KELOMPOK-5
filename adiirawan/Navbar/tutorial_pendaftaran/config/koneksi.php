<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "akademik2";

$connect  = mysqli_connect($hostname, $username, $password, $database);

if (!$connect){
	die('Koneksi database gagal : ' . mysqli_connect_error());
}

?>