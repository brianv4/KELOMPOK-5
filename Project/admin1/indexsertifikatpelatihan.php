<?php
include('koneksiuser.php');
include('userfunc.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="container">
		<div class="content">
<html>
<head>
	
</head>
<body>
	<h1>Data Siswa</h1>
	<a href="tambahsertifikatpelatihan.php">Tambah Data</a><br><br>
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
	include "koneksisertifikat.php";
	
	$query = "SELECT sertifikat_pelatihan.nomor_sertifikat, calon_peserta.nama, calon_peserta.tempat_lahir, calon_peserta.tanggal_lahir, 
    ujian_pelatihan.nilai, user.nama_user,
    sertifikat_pelatihan.tempat, sertifikat_pelatihan.tanggal FROM (sertifikat_pelatihan INNER JOIN ujian_pelatihan
     ON sertifikat_pelatihan.id_ujianpelatihan=ujian_pelatihan.id_ujianpelatihan) INNER JOIN pelatihan 
     ON ujian_pelatihan.id_pelatihan=pelatihan.id_pelatihan INNER JOIN calon_peserta ON pelatihan.nik=calon_peserta.nik INNER JOIN 
     user ON sertifikat_pelatihan.id_user=user.id_user"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['nomor_sertifikat']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['tempat_lahir']."</td>";
		echo "<td>".$data['tanggal_lahir']."</td>";
		echo "<td>".$data['nilai']."</td>";
		echo "<td>".$data['nama_user']."</td>";
		echo "<td>".$data['tempat']."</td>";
		echo "<td>".$data['tanggal']."</td>";
		echo "<td><a href='cetakpelatihan.php?nomor_sertifikat=".$data['nomor_sertifikat']."'>Cetak</a></td>";
		//echo "<td><a href='proses_hapus.php?nis=".$data['nis']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>