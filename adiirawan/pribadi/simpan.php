<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];


mysql_query("INSERT INTO `materi_kursus`(`ID_MATERIKURSUS`, `NAMA_KURSUS`) VALUES ($id,$nama])");

header("location:inputkursus.php?pesan=input");
?>