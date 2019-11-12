<?php 
mysql_connect("localhost","root","");
mysql_select_db("srirejeki");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>