<?php 

include 'koneksiuser.php';

$judul = $_POST['judul'];
$deskripsi = $_POST['judul_deskripsi'];

mysql_query($koneksi, "UPDATE `tampilan` SET `id`=null,`judul`='$judul',`judul_deskripsi`='$deskripsi'");

header("location:judul.php?pesan=update");

?>