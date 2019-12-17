<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$nis = $_POST['id_user'];

// Ambil Data yang Dikirim dari Form
$nama = $_POST['password'];
$jenis_kelamin = $_POST['password1'];
// $telp = $_POST['nohp_user'];
// $password= $_POST['password'];
// $password1= $_POST['password1'];
// // $alamat = $_POST['alamat'];
if(!empty($nama) && !empty($jenis_kelamin)) {
    if($nama==$jenis_kelamin) {
        $password12=md5($_POST['password']);
		// Proses ubah data ke Database
		$query = "UPDATE user SET password='".$password12."' WHERE id_user='".$nis."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){
            echo '<div class="alert alert-success">Data Berhasil diUpdate</div>';
            
        }else{
            echo '<div class="alert alert-danger">Data gagal disimpan, silahkan coba lagi.</div>';
        }
    }
}
	
?>
