<?php

include("koneksi.php");
if(isset($_POST['daftar'])){

// ambil data dari formulir
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$level = $_POST['level'];
$username = $_POST['username'];
$password = $_POST['password'];

// buat query
$sql = "INSERT INTO user  VALUE ('', '$nama', '$alamat', '$nohp', '$level', '$username', '$password')";
$query = mysqli_query($db, $sql);

// apakah query simpan berhasil?
if( $query ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    header('Location: index.php?status=sukses');
} else {
    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
    header('Location: index.php?status=gagal');
}


} 

?>