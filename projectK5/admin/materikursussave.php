<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$topik = $_POST['topik'];
$tglmulai = $_POST['tgl_mulai'];
$tglakhir = $_POST['tgl_akhir'];
$deskripsi = $_POST['deskripsi'];
$file = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
$level = $_POST['jenis_level'];	
$status = $_POST['status'];
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$file;

// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	$query = "INSERT INTO `materi_kursus` (`id_topik`, `topik`, `tgl_mulai`, `tgl_akhir`, `deskripsi`, `file`, `jenis_level`) VALUES (NULL, '$topik', '$tglmulai', '$tglakhir', '$deskripsi', '$fotobaru', '$level');";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		echo "berhasil"; // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
}else{
	// Jika gambar gagal diupload, Lakukan :
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
