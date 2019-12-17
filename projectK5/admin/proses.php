<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$nis = $_POST['id_user'];

// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama_user'];
$jenis_kelamin = $_POST['alamat_user'];
$telp = $_POST['nohp_user'];
// $password= $_POST['password'];
// $password1= $_POST['password1'];
// // $alamat = $_POST['alamat'];
// if(!empty($password) && !empty($password1)) {
//     if($password==$password1) {
//         $password12=md5($_POST['password']);

		// Proses ubah data ke Database
		$query = "UPDATE user SET nama_user='".$nama."', alamat_user='".$jenis_kelamin."', nohp_user='".$telp."' WHERE id_user='".$nis."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){
            echo '<div class="alert alert-success">Data Berhasil diUpdate</div>';
            
        }else{
            echo '<div class="alert alert-danger">Data gagal disimpan, silahkan coba lagi.</div>';
        }
//     }
// }
	
?>
