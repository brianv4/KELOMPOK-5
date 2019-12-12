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
	<title>Pendaftaran Kursus</title>

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
					<li><a href="../index.php">Beranda</a></li>
					<li class="active"><a href="#">Tambah Data</a></li>
				</ul>
			</div>
		</div>
	</nav>
    <!--/.nav-collapse -->
	<div class="container">
		<div class="content">
			<h2>PENDAFTARAN PESERTA KURSUS</h2>
			<hr/>
			
			<?php
			if(isset($_POST['form_kursus'])){
                $id     	        = aman($_POST['id_daftar']);
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
                $file		        = aman($_POST['file']);
                $file2		        = aman($_POST['file2']);
                $file3		        = aman($_POST['file3']);
                $status		        = aman($_POST['status']);

				//tinggal masalah database NIK dijadikan BIG INT
				$cek = mysqli_query($koneksi, "SELECT * FROM peserta_kursus WHERE id_daftar='$id'");
				if(mysqli_num_rows($cek) == 0){
                    if($pass1==$pass2){
                        $pass = $pass1;
                    
					$insert = mysqli_query($koneksi, "INSERT INTO `peserta_kursus`(`id_daftar`, `nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `telepon`, `email`, `username`, `password`, `alamat`, `kode_pos`, `provinsi`, `pendidikan`, `jenis_level`, `file`, `file2`, `file3`,`status`) VALUES ('$id','$nama','$nik','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$telepon','$email','$username','$pass','$alamat','$kode_pos','$provinsi','$pendidikan','$jenis_level','$file','$file2','$file3','$status')") or die(mysqli_error($koneksi));
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
					<label class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-2">
						<input type="text" name="nama" class="form-control" placeholder="nama" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">nik</label>
					<div class="col-sm-4">
						<input type="text" name="nik" class="form-control" placeholder="nik" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Tempat Lahir</label>
					<div class="col-sm-2">
						<input type="text" name="tempat_lahir" class="form-control" placeholder="tempat lahir" required>
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
						<input type="text" name="telepon" class="form-control" placeholder="telepon" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Email</label>
					<div class="col-sm-2">
						<input type="text" name="email" class="form-control" placeholder="email" required>
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
						<input type="password" name="pass2" class="form-control" placeholder="********" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Alamat</label>
					<div class="col-sm-4">
						<input type="textarea" name="alamat" class="form-control" placeholder="alamat" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Kode Pos</label>
					<div class="col-sm-2">
						<input type="text" name="kode_pos" class="form-control" placeholder="" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Provinsi</label>
					<div class="col-sm-2">
						<input type="text" name="provinsi" class="form-control" placeholder="provinsi" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Pendidikan</label>
					<div class="col-sm-2">
						<select name="pendidikan" class="form-control" required>
							<option value="">pilih</option>
							<option value="SMP">SMP</option>
							<option value="SMA">SMA</option>
						</select>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Level</label>
					<div class="col-sm-2">
						<select name="jenis_level" class="form-control" required>
							<option value="">pilih</option>
							<option value="level1">level1</option>
							<option value="level2">level2</option>
                            <option value="level2">level3</option>
						</select>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">file ktp</label>
					<div class="col-sm-4">
						<input type="file" name="file" class="form-control" placeholder="file" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">file kk</label>
					<div class="col-sm-4">
						<input type="file" name="file2" class="form-control" placeholder="file" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">file ijazah</label>
					<div class="col-sm-4">
						<input type="file" name="file3" class="form-control" placeholder="file" required>
					</div>
				</div> -->
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
						<input type="submit" name="form_kursus" class="btn btn-primary" value="TAMBAH">
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