<?php
include("koneksi.php");
include("func.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Manajemen</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-block visible-sm-block" href="#">Manajemen User</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="#">Manajemen User</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Beranda</a></li>
					<li class="active"><a href="add.php">Tambah Data</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Manajemen User &raquo; Tambah Data User</h2>
			<hr />
			
			<?php
			if(isset($_POST['add'])){
				$nik		= aman($_POST['nik']);
				$nama		= aman($_POST['nama']);
				$tmp		= aman($_POST['tmp']);
				$tgl		= aman($_POST['tgl']);
				$jk			= aman($_POST['jk']);
				$alamat		= aman($_POST['alamat']);
				$kp			= aman($_POST['kp']);
				$agama		= aman($_POST['agama']);
				$email		= aman($_POST['email']);
				$nohp		= aman($_POST['nohp']);
				$provinsi	= aman($_POST['provinsi']);
				$pendidikan	= aman($_POST['pendidikan']);
				$jl			= aman($_POST['jenislevel']);
				$username	= aman($_POST['unamek']);
				$pass1		= aman($_POST['passk1']);
				$pass2		= aman($_POST['passk2']);
				$status		= aman($_POST['status']);
				
				$cek = mysqli_query($koneksi, "SELECT * FROM peserta_kursus WHERE nik='$nik'");
				if(mysqli_num_rows($cek) == 0){
					if($pass1 == $pass2){
						$pass = md5($pass1);
						$insert = mysqli_query($koneksi, "INSERT INTO peserta_kursus(NIK_KURSUS, NAMA_PESERTA, TEMPAT_LAHIR, TANGGAL_LAHIR, JENIS_KELAMIN, ALAMAT, KODEPOS, AGAMA, EMAIL, NOHP, PROVINSI, PENDIDIKAN, JENIS_LEVEL, UNAMEK, PASSK, status)
															VALUES('$nik', '$nama', '$tmp', '$tgl', '$jk', '$alamat', '$kp', '$agama', '$email', '$nohp', '$provinsi', '$pendidikan', '$jl',' $username',' $passk1', '$status')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success">Pendaftaran berhasil dilakukan.</div>';
						}else{
							echo '<div class="alert alert-danger">Pendaftaran gagal dilakukan, silahkan coba lagi.</div>';
						}
					}else{
						echo '<div class="alert alert-danger">Konfirmasi Password tidak sesuai.</div>';
					}
				}else{
					echo '<div class="alert alert-danger">NIK sudah terdaftar.</div>';
				}
			}
			?>
			
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">NIK</label>
					<div class="col-sm-2">
						<input type="text" name="nik" class="form-control" placeholder="NIK" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NAMA</label>
					<div class="col-sm-4">
						<input type="text" name="nama" class="form-control" placeholder="NAMA LENGKAP" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">TEMPAT & TANGGAL LAHIR</label>
					<div class="col-sm-3">
						<input type="text" name="tmp" class="form-control" placeholder="TEMPAT LAHIR" required>
					</div>
					<div class="col-sm-2">
						<div class="input-group date" data-provide="datepicker">
							<input type="text" name="tgl" class="form-control" placeholder="0000-00-00">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">JENIS KELAMIN</label>
					<div class="col-sm-2">
						<select name="jk" class="form-control" required>
							<option value="">JENIS KELAMIN</option>
							<option value="Laki-Laki">LAKI-LAKI</option>
							<option value="Perempuan">PEREMPUAN</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ALAMAT</label>
					<div class="col-sm-6">
						<textarea name="alamat" class="form-control" placeholder="ALAMAT"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KODE POS</label>
					<div class="col-sm-4">
						<input type="text" name="kp" class="form-control" placeholder="Kode Pos" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">AGAMA</label>
					<div class="col-sm-2">
						<select name="agama" class="form-control">
							<option value="">AGAMA</option>
							<option value="Islam">ISLAM</option>
							<option value="Kristen">KRISTEN</option>
							<option value="Hindu">HINDU</option>
							<option value="Budha">BUDHA</option>
							<option value="Katholik">KATHOLIK</option>
							<option value="Konghucu">KONGHUCU</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">EMAIL</label>
					<div class="col-sm-3">
						<input type="email" name="email" class="form-control" placeholder="EMAIL" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NO HP</label>
					<div class="col-sm-2">
						<input type="text" name="nohp" class="form-control" placeholder="No HP">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Provinsi</label>
					<div class="col-sm-2">
						<input type="text" name="provinsi" class="form-control" placeholder="Provinsi">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PENDIDIKAN</label>
					<div class="col-sm-3">
						<select name="pendidikan" class="form-control">
							<option value="">PENDIDIKAN</option>
							<option value="SD">SD</option>
							<option value="SMP">SMP</option>
							<option value="SMA">SMA</option>
							<option value="SARJANA">SARJANA</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">JENIS LEVEL</label>
					<div class="col-sm-3">
						<select name="jenislevel" class="form-control">
							<option value="">Jenis Level</option>
							<option value="Level1">Level 1</option>
							<option value="Level2">Level 2</option>
							<option value="Level3">Level 3</option>
							
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Username</label>
					<div class="col-sm-2">
						<input type="text" name="unamek" class="form-control" placeholder="username">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PASSWORD</label>
					<div class="col-sm-2">
						<input type="password" name="passk1" class="form-control" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">CONFIRMASI PASSWORD </label>
					<div class="col-sm-2">
						<input type="password" name="passk2" class="form-control" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">STATUS</label>
					<div class="col-sm-2">
						<select name="status" class="form-control" required>
							<option value="">STATUS</option>
							<option value="1">AKTIF</option>
							<option value="2">TIDAK AKTIF</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="TAMBAH">
						<a href="index.php" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
</body>
</html>