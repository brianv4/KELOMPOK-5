<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Online</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="box-form">
		<h3>Pendaftaran Peserta Kursus LKP SRI REJEKI</h3><hr><br>
		<a class="btn-primary:hover" href="../../index.php">Kembali</a><br>
		<?php 
		if(isset($_GET['err1'])){
			echo '<div class="alert-error">Maaf, nomor telepon harus angka!!!</div>';
		}
		?>
		<br>
		<form action="proses-daftar.php" method="post">		
			Nama Lengkap :<br>
			<input type="text" name="nama" required/><br><br>
			NIK :<br>
			<input type="text" name="nik" required/><br><br>
			Tempat Lahir :<br>
			<input type="text" name="tmp_lhr" required/><br><br>
			Tanggal Lahir :<br>
			<input type="date" name="tgl_lhr" required/><br><br>	
			Jenis Kelamin :<br>
			<select name="jk">
				<option value="Laki-laki">Laki-laki</option>
				<option value="Perempuan">Perempuan</option>
			</select><br><br>
			No. Telepon :<br>
			<input type="text" name="telp" required/><br><br>
			Email :<br>
			<input type="email" name="email" required/><br><br>
			Username :<br>
			<input type="text" name="username" required/><br><br>
			Password :<br>
			<input type="password" name="pass" required/><br><br>
			Alamat Lengkap :<br>
			<textarea name="alamat" rows="5" cols="50"></textarea><br><br>
			Kode Pos :<br>
			<input type="text" name="kode_pos" required/><br><br>
			Provinsi :<br>
			<input type="text" name="provinsi" required/><br><br>	
			Pendidikan :<br>
			<select name="pendidikan">
				<option value="sd">SMP</option>
				<option value="smp">SMA</option>
			</select><br><br>
			Level :<br>
			<select name="jenis_level">
				<option value="level1">Level-1</option>
				<option value="level2">Level-2</option>
			</select><br><br>

			<div class="form-group">
					<label class="col-sm-3 control-label">file</label>
					<div class="col-sm-4">
						<input type="file" name="file_ktp" class="form-control" placeholder="File" required>
					</div>
				</div>

			<input type="submit" name="daftar" value="Daftar">
    		
  			</form>
			<br>
			<br>
			<!--<h1>Form Upload Gambar</h1>
  			<form method="post" enctype="multipart/form-data" action="upload.php">
    		<input type="file" name="gambar">
    		<input type="submit" value="Upload">
  			</form>
			-->
	</div>	
</body>
</html>