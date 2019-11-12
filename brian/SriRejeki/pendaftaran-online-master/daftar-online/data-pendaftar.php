<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="box-data">
	<a class="btn-primary:hover" href="form-daftar.php">Daftar</a><br>
	<br>	
	<h3>Data Pendaftar</h3><hr><br>

		<table border="1" style="width:100%;border-collapse:collapse;text-align:center;" cellspacing="0">
			<tr style="height:30px;">
				<td>No</td>
				<td>Nama Lengkap</td>
				<td>NIK</td>
				<td>Tempat Lahir</td>
				<td>Tanggal Lahir</td>
				<td>Jenis Kelamin</td>
				<td>Telepon</td>
				<td>Email</td>
				<td>Alamat</td>
				<td>Kode_pos</td>
				<td>Provinsi</td>
				<td>Pendidikan</td>
				<td>Jenis Level</td>
				<td>Aksi</td>
			</tr>
			<?php 
			include 'db.php';
			$no = 1;
			$data = mysqli_query($koneksi, "SELECT * FROM tb_daftar");
			while($row = mysqli_fetch_array($data)){
			?>
			<tr style="height:30px;">
				<td><?php echo $no++ ?></td>
				<td><?php echo $row['nama'] ?></td>
				<td><?php echo $row['nik'] ?></td>
				<td><?php echo $row['tempat_lahir'] ?></td>
				<td><?php echo $row['tanggal_lahir'] ?></td>
				<td><?php echo $row['jenis_kelamin'] ?></td>
				<td><?php echo $row['telepon'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><?php echo $row['alamat'] ?></td>
				<td><?php echo $row['kode_pos'] ?></td>
				<td><?php echo $row['provinsi'] ?></td>
				<td><?php echo $row['pendidikan'] ?></td>
				<td><?php echo $row['jenis_level'] ?></td>
				<td><a href="proses-hapus.php?id=<?php echo $row['id_daftar'] ?>">Hapus</a></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>