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
					<li><a href="../../index.php">Beranda</a></li>
					<li><a href="formulir_kursus.php">Tambah Data</a></li>
                    <li class="active"><a href="#">Bayar</a></li>
				</ul>	
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="content">
			<h2>PENDAFTARAN CALON PESERTA</h2>
			<hr/>
			
			<?php
			session_start();
			if(!isset($_SESSION['username'])){
				header('Location:../../index.php');
			}
               /* $id     	        = aman($_POST['id_kursus']);
				$nik		        = aman($_POST['nik']);
				$jenis_level		= aman($_POST['jenis_level']);
				$file_ktp			= aman($_POST['file_ktp']);
				$file_kk			= aman($_POST['file_kk']);
				$file_ijazah		= aman($_POST['file_ijazah']);
				*/
				
				$username = $_SESSION['username'];
				//tinggal masalah database NIK dijadikan BIG INT
				
				$cek = mysqli_query($koneksi, "SELECT * FROM calon_peserta INNER JOIN kursus ON
				calon_peserta.nik=kursus.nik where username='$username'");
				$tampil = mysqli_fetch_array($cek);
			
			?>
			
			<form class="form-horizontal" action="input_bayar.php" method="post" enctype="multipart/form-data" >
				<div class="form-group">
					<label class="col-sm-3 control-label">nik</label>
					<div class="col-sm-4">
						<input type="text" name="nik" class="form-control" value="<?php echo $tampil['nik']; ?>" placeholder="nik" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">id kursus</label>
					<div class="col-sm-4">
						<input type="text" name="id_kursus" class="form-control" value="<?php echo $tampil['id_kursus']; ?>" placeholder="nik" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">bukti</label>
					<div class="col-sm-4">
					<a title="Upload data document">
						<input type="file" name="file_bukti" class="form-control" placeholder="file pdf/docx"  required>
						</a>
						<font size="1" face="arial" color="red"><i>* format data PDF atau DOCX</i></font>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit"  class="btn btn-primary" value="KIRIM">
						<a href="alert.php" class="btn btn-warning">SAYA INGIN MEMBAYAR TUNAI</a>
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