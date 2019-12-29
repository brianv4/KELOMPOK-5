<?php 
mysqli_connect("localhost","root","");
mysqli_select_db("lkpsrirejeki");

$koneksi = mysqli_connect("localhost", "root", "", "lkpsrirejeki");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>