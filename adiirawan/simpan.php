<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nik            = $_POST['nik'];
$nama           = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];
$nohp         = $_POST['hp'];
// query SQL untuk insert data
$query="INSERT INTO peserta SET nik='$nik',nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat',hp='$nohp'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>