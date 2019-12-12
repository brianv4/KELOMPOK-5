<html>
<head>
	<title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
</head>
<body>
	<h1>Data Siswa</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
	<th>No Sertifikat</th>
		<th>Nama</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Nilai</th>
		<th>Nama User</th>
		<th>Tempat</th>
		<th>Tanggal</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "konn.php";
	
	$query = "SELECT * FROM sertifikat_kursus 
	 INNER JOIN ujian_kursus ON sertifikat_kursus.id_ujiankursus=ujian_kursus.id_ujiankursus 
	 INNER JOIN kursus ON ujian_kursus.id_kursus=kursus.id_kursus 
	 INNER JOIN calon_peserta ON kursus.nik=calon_peserta.nik 
	 INNER JOIN user ON sertifikat_kursus.id_user=user.id_user"; // Query untuk menampilkan semua data siswa


	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_assoc($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['nomor_sertifikat']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['tempat_lahir']."</td>";
		echo "<td>".$data['tanggal_lahir']."</td>";
		echo "<td>".$data['nilai']."</td>";
		echo "<td>".$data['nama_user']."</td>";
		echo "<td>".$data['tempat']."</td>";
		echo "<td>".$data['tanggal']."</td>";
		echo "<td><a href='cetakkursus.php?nomor_sertifikat=".$data['nomor_sertifikat']."'>Cetak</a></td>";
		//echo "<td><a href='proses_hapus.php?nis=".$data['nis']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
