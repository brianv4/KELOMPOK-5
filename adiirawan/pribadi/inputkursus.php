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
	<?php
	error_reporting(0)
	?>
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
				$nama	= aman($_POST['nama']);
				
				
				//tinggal masalah database NIK dijadikan BIG INT
				$cek = mysqli_query($koneksi, "SELECT * FROM `materi_kursus` WHERE ID_MATERIKURSUS='$id'");
				$insert = mysqli_query($koneksi, "INSERT INTO `materi_kursus`(`ID_MATERIKURSUS`, `NAMA_KURSUS`) VALUES ('$id','$nama')") or die(mysqli_error($koneksi));
						if($insert){
							echo '<div class="alert alert-success">Pendaftaran berhasil dilakukan.</div>';
						}else{
							echo '<div class="alert alert-danger">Pendaftaran gagal dilakukan, silahkan coba lagi.</div>';
                        }
            }
			?>
			
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">ID</label>
					<div class="col-sm-2">
						<input type="text" name="id" class="form-control" placeholder="NIK" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama Materi</label>
					<div class="col-sm-4">
						<input type="text" name="nama" class="form-control" placeholder="nama" required>
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
	
</body>
</html>