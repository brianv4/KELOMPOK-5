<?php
include "koneksi.php";

$nik = $_POST['nik'];
$jenis_level = $_POST['jenis_level'];
$file_kursus = $_FILES['file_kursus']['name'];
$tmp = $_FILES['file_kursus']['tmp_name'];

	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$fotobaru = date('dmYHis').$file_kursus;

	// Set path folder tempat menyimpan fotonya
	$path = "img/".$fotobaru;

	// Proses upload 
	if(move_uploaded_file($tmp, $path)){ 
		
		// Cek apakah gambar berhasil diupload atau tidak
		// Proses simpan ke Database
		$query = "INSERT INTO kursus VALUES(null,'".$nik."', '".$jenis_level."', '".$fotobaru."')";
		$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	
		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			//echo '<div class="alert alert-success">SUKSES BRO AOWKAOKWOAW.</div>';
			header("location: bayar.php"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='formulir_kursus.php'>Kembali Ke Form</a>";
		}
	}else{
		// Jika gambar gagal diupload, Lakukan :
		echo "Maaf, Gambar gagal untuk diupload.";
		echo "<br><a href='formulir.php'>Kembali Ke Form</a>";
	}
	
    /*if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
		$query ="INSERT INTO kursus (`id_kursus`, `nik`, `jenis_level`, `file_ktp`, `file_kk`, `file_ijazah`, `bukti_bayar`) VALUES (null,'$nik','$jenis_level','$fotobaru','$file_kk','$file_ijazah',null)";
		$sql = mysqli_query_array($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
            // Jika Sukses, Lakukan :
            echo "<script>alert('data berhasil disimpan')</script>";
			header("location: formulir_kursus.php"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='formulir_kursus.php'>Kembali Ke Form</a>";
		}
	}else{
	// Jika gambar gagal diupload, Lakukan :
		echo "<script>alert('Data gagal di simpan');
		window.location='formulir_kurses.php'</script>";
	}*/
?>