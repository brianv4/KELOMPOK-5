<?php 
// isi nama host, username mysql, dan password mysql anda
// $host = mysql_connect("localhost","root","");

// // isikan dengan nama database yang akan di hubungkan
// $db = mysql_select_db("lkpsri");

$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "lkpsrirejeki"; // Nama databasenya

$connect = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL
?>
