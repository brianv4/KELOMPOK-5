<?php
	// Load file koneksi.php
	include "konn.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$no = $_GET['nomor_sertifikat'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT sertifikat_kursus.nomor_sertifikat, calon_peserta.nama, calon_peserta.tempat_lahir, calon_peserta.tanggal_lahir, ujian_kursus.nilai, user.nama_user,
    sertifikat_kursus.tempat, sertifikat_kursus.tanggal FROM (sertifikat_kursus INNER JOIN ujian_kursus
     ON sertifikat_kursus.id_ujiankursus=ujian_kursus.id_ujiankursus) INNER JOIN kursus 
     ON ujian_kursus.id_kursus=kursus.id_kursus INNER JOIN calon_peserta ON kursus.nik=calon_peserta.nik INNER JOIN 
     user ON sertifikat_kursus.id_user=user.id_user WHERE nomor_sertifikat='".$no."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>

<!DOCTYPE html>
<html>
<head>
	<title>MEMBUAT CETAK PRINT LAPORAN</title>
</head>
<body>
 
	<center>
		<p><h2>LEMBAGA PELATIHAN DAN KETERAMPILAN SRI REJEKI </h2></p>
		<p><h4>Perum Kalirejo Permai Blok E-25 Dringu </h4></p>
        <p><h4>PROBOLINGGO - JAWATIMUR </h4></p>
	</center>
 
	<br/>
    <center>
    <p><h2>SERTIFIKAT KOMPETENSI </h2></p>
    <p><h2>CERTIFICATE OF COMPETENCY</H2></p>
    </center>
    <center>
    <p> Menyatakan Bahwa : </p>
    <h2> <?php echo $data['nama']; ?> </h2>
    <p> Lahir di <?php echo $data['tempat_lahir']; ?>,<?php echo $data['tanggal_lahir']; ?> </p>
	<p>
		Dinyatakan lulus ujian Kursus di Lembaga Kursus dan Pelatihan Sri Rejeki.
	</p><br>
	<left><p><?php echo $data['tempat']; ?>,<?php echo $data['tanggal']; ?></p></left>
    <left><p>Kepala LKP SRI REJEKI</p></left>
    <br>
    <br>
    <left><p><?php echo $data['nama']; ?></p></left>
    </center>
	
 
	<script>
		window.print();
	</script>
	
</body>
</html>