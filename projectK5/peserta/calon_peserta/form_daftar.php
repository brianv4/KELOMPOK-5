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
	<title>Registrasi Calon Peserta</title>

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
<?php
session_start();
if(isset($_SESSION['username'])){
	header('Location:../../index.php');
}
?>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-block visible-sm-block" href="#">Registrasi Calon Peserta</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="#">Registrasi Calon Peserta</a>
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
			<h2>REGISTRASI CALON PESERTA</h2>
			<hr/>
			
			<?php
			if(isset($_POST['form_daftar'])){
                //$id     	        = aman($_POST['id_daftar']);
				$nama 		        = aman($_POST['nama']);
				$nik		        = aman($_POST['nik']);
				$tempat_lahir	    = aman($_POST['tempat_lahir']);
				$tanggal_lahir	    = aman($_POST['tanggal_lahir']);
				$jenis_kelamin	    = aman($_POST['jenis_kelamin']);
				$telepon		    = aman($_POST['telepon']);
				$email		        = aman($_POST['email']);
                $username		    = aman($_POST['username']);
                $pass1		        = aman($_POST['pass1']);
                $pass2              = aman($_POST['pass2']);
                $alamat		        = aman($_POST['alamat']);
                $kode_pos		    = aman($_POST['kode_pos']);
                $provinsi		    = aman($_POST['provinsi']);
                $pendidikan		    = aman($_POST['pendidikan']);
                $jenis_level		= aman($_POST['jenis_level']);

				//tinggal masalah database NIK dijadikan BIG INT
				$cek = mysqli_query($koneksi, "SELECT * FROM calon_peserta WHERE nik='$nik'");
				if(mysqli_num_rows($cek) == 0){
                    if($pass1==$pass2){
                        $pass = $pass1;
                    
					$insert = mysqli_query($koneksi, "INSERT INTO `calon_peserta`(`nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `telepon`, `email`, `username`, `password`, `alamat`, `kode_pos`, `provinsi`, `pendidikan`) VALUES ('$nama','$nik','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$telepon','$email','$username','$pass','$alamat','$kode_pos','$provinsi','$pendidikan')") or die(mysqli_error($koneksi));
						if($insert){
							echo '<div class="alert alert-success">Pendaftaran berhasil dilakukan, selanjutnya melakukan pendaftaran kursus atau pelatihan di halaman awal.</div>';
						}else{
							echo '<div class="alert alert-danger">Pendaftaran gagal dilakukan, silahkan coba lagi.</div>';
						}
					}else{
						echo '<div class="alert alert-danger">Konfirmasi Password tidak sesuai.</div>';
                    }
                }else{
                    echo '<div class="alert alert-danger">nik sudah terdaftar.</div>';
                }
			}
			
			?>
			
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-2">
						<input type="text" name="nama" pattern="[A-Za-z ]+" class="form-control" placeholder="nama" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">nik</label>
					<div class="col-sm-4">
						<input type="text" name="nik" pattern ="^[0-9]{16}$"  class="form-control" placeholder="nik" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Tempat Lahir</label>
					<div class="col-sm-2">
						<input type="text" name="tempat_lahir" pattern="[A-Za-z ]+" class="form-control" placeholder="tempat lahir" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tanggal Lahir</label>
					<div class="col-sm-2">
						<div class="input-group date" data-provide="datepicker">
							<input type="text" name="tanggal_lahir" class="form-control" placeholder="0000-00-00"> 
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Jenis Kelamin</label>
					<div class="col-sm-2">
						<select name="jenis_kelamin" class="form-control" required>
							<option value="">pilih</option>
							<option value="laki-laki">Laki-Laki</option>
							<option value="perempuan">Perempuan</option>
						</select>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">telepon</label>
					<div class="col-sm-2">
						<input type="text" name="telepon" pattern ="^[0-9]{10}$|^[0-9]{12}$" class="form-control" placeholder="telepon" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Email</label>
					<div class="col-sm-2">
						<input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="email" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Username</label>
					<div class="col-sm-2">
						<input type="text" name="username" class="form-control" placeholder="username" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Password</label>
					<div class="col-sm-2">
						<input type="password" name="pass1" class="form-control" placeholder="********" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Konfirmasi Password</label>
					<div class="col-sm-2">
						<input type="password" name="pass2"  class="form-control" placeholder="********" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Alamat</label>
					<div class="col-sm-4">
						<input type="textarea" name="alamat" pattern="[A-Za-z ]+" class="form-control" placeholder="alamat" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Kode Pos</label>
					<div class="col-sm-2">
						<input type="text" name="kode_pos" pattern ="^[0-9]{5}$" class="form-control" placeholder="" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Provinsi</label>
					<div class="col-sm-2">
						<input type="text" name="provinsi" pattern="[A-Za-z ]+" class="form-control" placeholder="provinsi" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Pendidikan</label>
					<div class="col-sm-2">
						<select name="pendidikan" class="form-control" required>
							<option value="">pilih</option>
							<option value="SMP">SMP</option>
							<option value="SMA">SMA</option>
							<option value="dll">Dan Lain-lain</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="form_daftar" class="btn btn-primary" value="TAMBAH">
						<a href="../../index.php" class="btn btn-warning">BATAL</a>
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