<?php
error_reporting(0);
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
				$id		= aman($_POST['id']);
				$nama		= aman($_POST['nama']);
				$alamat		= aman($_POST['alamat']);
				$nohp		= aman($_POST['nohp']);
				$level		= aman($_POST['level']);
				$username	= aman($_POST['username']);
                $pass1		= aman($_POST['pass1']);
                $pass2		= aman($_POST['pass2']);
				
				$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
				if(mysqli_num_rows($cek) == 0){
					if($pass1 == $pass2){
						$pass = md5($pass1);
						$insert = mysqli_query($koneksi, "INSERT INTO user(ID_USER, NAMA_USER, ALAMAT_USER, NOHP_USER, LEVEL, USERNAME, PASSWORD)
															VALUES('$id', '$nama', '$alamat', '$nohp', '$level', '$username', '$pass1')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success">Pendaftaran berhasil dilakukan.</div>';
						}else{
							echo '<div class="alert alert-danger">Pendaftaran gagal dilakukan, silahkan coba lagi.</div>';
						}
					}else{
						echo '<div class="alert alert-danger">Konfirmasi Password tidak sesuai.</div>';
					}
				}else{
					echo '<div class="alert alert-danger">ID sudah terdaftar.</div>';
				}
			}
			?>
			
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">ID</label>
					<div class="col-sm-2">
						<input type="text" name="id" class="form-control" placeholder="ID" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama User</label>
					<div class="col-sm-4">
						<input type="text" name="nama" class="form-control" placeholder="Nama user" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">alamat user</label>
					<div class="col-sm-4">
						<input type="text" name="alamat" class="form-control" placeholder="alamat" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">nohp user</label>
					<div class="col-sm-4">
						<input type="text" name="nohp" class="form-control" placeholder="nohp" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Level</label>
					<div class="col-sm-4">
						<input type="text" name="level" class="form-control" placeholder="level" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">username</label>
					<div class="col-sm-3">
						<input type="text" name="username" class="form-control" placeholder="username" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">password</label>
					<div class="col-sm-4">
						<input type="password" name="pass1" class="form-control" placeholder="password" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">confirm password</label>
					<div class="col-sm-4">
						<input type="password" name="pass2" class="form-control" placeholder="confirm password" required>
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
	
	</script>
</body>
</html>