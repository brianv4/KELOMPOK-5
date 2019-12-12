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
	<title>Pendaftaran Peserta Kursus</title>

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
				<a class="navbar-brand visible-xs-block visible-sm-block" href="#">Pendaftaran Pelatihan</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="#">Pendaftaran Pelatihan</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="../../index.php">Beranda</a></li>
					<li class="active"><a href="#">Tambah Data</a></li>
				</ul>
			</div>
		</div>
	</nav>
    <!--/.nav-collapse -->
	<div class="container">
		<div class="content">
			<h2>PENDAFTARAN CALON PESERTA</h2>
			<hr/>
			
			<?php
			session_start();
                
				$username = $_SESSION['username'];

				//tinggal masalah database NIK dijadikan BIG INT
				$cek = mysqli_query($koneksi, "SELECT * FROM calon_peserta where username='$username'");
				$tampil = mysqli_fetch_array($cek);
			
			?>
			
			<form class="form-horizontal" action="simpanpelatihan.php" method="post" enctype="multipart/form-data" >
				<div class="form-group">
					<label class="col-sm-3 control-label">nik</label>
					<div class="col-sm-4">
						<input type="text" name="nik" class="form-control" value="<?php echo $tampil['nik']; ?>" placeholder="nik" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">file Pelatihan</label>
					<div class="col-sm-4">
						<input type="file" name="file_pelatihan" class="form-control" placeholder="file" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" class="btn btn-primary" value="TAMBAH">
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