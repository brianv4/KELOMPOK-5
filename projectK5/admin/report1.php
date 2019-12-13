<?php
include('koneksiuser.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Print Sertifikasi</title>
	<link rel="shortcut icon" href="../assets/asset/img/logomi.png">
</head>
<?php
$no = $_GET['nomor_sertifikat'];
$query = "SELECT sertifikat_kursus.nomor_sertifikat, calon_peserta.nama, calon_peserta.tempat_lahir, calon_peserta.tanggal_lahir, kursus.jenis_level, ujian_kursus.nilai, user.nama_user,
sertifikat_kursus.tempat, sertifikat_kursus.tanggal FROM (sertifikat_kursus INNER JOIN ujian_kursus
 ON sertifikat_kursus.id_ujiankursus=ujian_kursus.id_ujiankursus) INNER JOIN kursus 
 ON ujian_kursus.id_kursus=kursus.id_kursus INNER JOIN calon_peserta ON kursus.nik=calon_peserta.nik INNER JOIN 
 user ON sertifikat_kursus.id_user=user.id_user WHERE nomor_sertifikat='".$no."'";
			$sql_rm = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
			while ($data = mysqli_fetch_assoc($sql_rm)){
				?>
<div align="center">
	<table>
		<tr>
			<td width="20"></td>
			<td width="125" align="left"><img src="../assets/asset/img/tut.png" width="90" height="90"></td>
			<td width="600">
				<div align="center">
					<b>
						<font size="6">
							LEMBAGA PELATIHAN DAN KETRAMPILAN<br>SRI REJEKI
						</font><br>
						<font size="4">
							Perum Kalirejo Permai Blok E-25 Dringu<br>PROBOLINGGO - JAWA TIMUR
						</font>
					</b>
				</div>
			</td>	
			<td width="125" align="right"><img src="../assets/asset/img/tut.png" width="90" height="90"></td>
			<td width="20"></td>
		</tr>
		<tr>
			<td colspan="5"><hr size="4" color="black"></td>
		</tr>
	</table>
</div>

<body>

  	<div class="row">
 		<div class="col-3"></div>
 		<div class="col-6" align="center">
				<br><b>
					<font size="6">
						<u>SERTIFIKAT KOMPETENSI</u><br>CERTIFICATE OF COMPETENCY
					</font><br>
					<font size="5">
						Nomor : <?php echo $data['nomor_sertifikat'];?>/SE/LKP-SR/V/2019
					</font>
		 		</b><br><br><br><br>
				<font size="5">
					Menyatakan bahwa :
				</font><br><br>
				<font size="7" face="algerian">
				<?php echo $data['nama']; ?>
				</font><br>
				<HR WIDTH="40%" SIZE="4" color="black" NOSHADE>
				<font size="5">
				<font size="4">
					Tempat, tanggal lahir  :
				</font><br>
				<?php echo $data['tempat_lahir']; ?>, <?php echo $data['tanggal_lahir']; ?>
				<br>
					<br><br><br>
				Dinyatakan lulus Kursus <?php echo $data['jenis_level']; ?> di LKP SRI REJEKI dan diakui telah memiliki kompetensi seperti tercantum di balik sertifikat ini.
				</font>
 		</div><br><br><br>
 	</div>

<div align="center">
	<table>
		<tr>
			<td width="245" align="right">
				<div align="center"><font size="5">
					<br>Kepala<br>LKP SRI REJEKI
				</font></div>
			</td>
			<td width="300"><br></td>	
			<td width="245" align="right">
				<div align="center" class="time"><font size="5">
				<?php echo $data['tempat'];?>, <?php echo $data['tanggal']; ?><br>Service Manager<br>LKP HIDAYAH
				</font></div>
			</td>
		</tr>
		<tr>
			<td width="245" height="70"></td>
			<td width="300" height="70" align="CENTER"><p>Foto<br>3x4</p></td>
			<td width="245" height="70"></td>
		</tr>
		<tr>
			<td width="245" align="right"><b>
				<div align="center"><font size="5">
					<u><?php echo $data['nama_user']; ?></u>
				</font></div></b>
			</td>
			<td width="300"></td>
			<td width="245" align="right"><b>
				<div align="center"><font size="5">
					<u>SRI HERMAWATI</u>
				</font></div></b>
			</td>
		</tr>
	</table>
</div>
<?php
			}
			?>
 	
	<script>
		window.print();
	</script>
	
</body>
</html>