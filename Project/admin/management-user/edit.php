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
					<li><a href="add.php">Tambah Data</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Manajemen User &raquo; Edit Data User</h2>
			<hr />
			
			<?php
			$nik = $_GET['NIK_KURSUS'];
			$sql = mysqli_query($koneksi, "SELECT * FROM peserta_kursus WHERE NIK_KURSUS='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				
				$nama		= aman($_POST['nama_peserta']);
				$tmp		= aman($_POST['tmp']);
				$tgl		= aman($_POST['tgl']);
				$email		= aman($_POST['email']);
				$jk			= aman($_POST['jk']);
				$agama		= aman($_POST['agama']);
				$nohp		= aman($_POST['nohp']);
				$kdpos		= aman($_POST['kodepos']);
				$provinsi	= aman($_POST['provinsi']);
				$pendidikan	= aman($_POST['pendidikan']);
				$unamek		= aman($_POST['username']);
				$alamat		= aman($_POST['alamat']);
				$status		= aman($_POST['status']);
				
				
				$update = mysqli_query($koneksi, "UPDATE `peserta_kursus` SET `NAMA_PESERTA`='$nama',`TEMPAT_LAHIR`='$tmp',`TANGGAL_LAHIR`='$tgl',`JENIS_KELAMIN`='$jk',`NOHP`='$nohp',`ALAMAT`='$alamat',`KODEPOS`='$kdpos',`AGAMA`='$agama',`EMAIL`='$email',`NOHP`='$nohp',`PROVINSI`='$provinsi',`PENDIDIKAN`='$pendidikan',`UNAMEK`='$unamek',`STATUS`='$status' WHERE NIK_KURSUS='$nik'") or die(mysqli_error());
				if($update){
					
					header("Location: edit.php?NIK_KURSUS=".$nik."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger">Data gagal disimpan, silahkan coba lagi.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success">Data berhasil disimpan.</div>';
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">NIK</label>
					<div class="col-sm-2">
						<input type="text" name="nik" class="form-control" value="<?php echo $row['NIK_KURSUS']; ?>" placeholder="NIK" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NAMA LENGKAP</label>
					<div class="col-sm-4">
						<input type="text" name="nama_peserta" class="form-control" value="<?php echo $row['NAMA_PESERTA']; ?>" placeholder="NAMA LENGKAP" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">TEMPAT & TANGGAL LAHIR</label>
					<div class="col-sm-3">
						<input type="text" name="tmp" class="form-control" value="<?php echo $row['TEMPAT_LAHIR']; ?>" placeholder="TEMPAT LAHIR" required>
					</div>
					<div class="col-sm-2">
						<div class="input-group date" data-provide="datepicker">
							<input type="text" name="tgl" class="form-control" value="<?php echo $row['TANGGAL_LAHIR']; ?>" placeholder="0000-00-00">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">EMAIL</label>
					<div class="col-sm-3">
						<input type="email" name="email" class="form-control" value="<?php echo $row['EMAIL']; ?>" placeholder="EMAIL" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">JENIS KELAMIN</label>
					<div class="col-sm-2">
						<select name="jk" class="form-control" required>
							<option value="">JENIS KELAMIN</option>
							<option value="Laki-Laki" <?php if($row['JENIS_KELAMIN'] == 'Laki-Laki'){ echo 'selected'; } ?>>LAKI-LAKI</option>
							<option value="Perempuan" <?php if($row['JENIS_KELAMIN'] == 'Perempuan'){ echo 'selected'; } ?>>PEREMPUAN</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">AGAMA</label>
					<div class="col-sm-2">
						<select name="agama" class="form-control">
							<option value="">AGAMA</option>
							<option value="Islam" <?php if($row['AGAMA'] == 'Islam'){ echo 'selected'; } ?>>ISLAM</option>
							<option value="Kristen" <?php if($row['AGAMA'] == 'Kristen'){ echo 'selected'; } ?>>KRISTEN</option>
							<option value="Hindu" <?php if($row['AGAMA'] == 'Hindu'){ echo 'selected'; } ?>>HINDU</option>
							<option value="Budha" <?php if($row['AGAMA'] == 'Budha'){ echo 'selected'; } ?>>BUDHA</option>
							<option value="Katholik" <?php if($row['AGAMA'] == 'Katholik'){ echo 'selected'; } ?>>KATHOLIK</option>
							<option value="Konghucu" <?php if($row['AGAMA'] == 'Konghucu'){ echo 'selected'; } ?>>KONGHUCU</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NO HP</label>
					<div class="col-sm-2">
						<input type="text" name="nohp" class="form-control" value="<?php echo $row['NOHP']; ?>" placeholder="NOHP">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PROVINSI</label>
					<div class="col-sm-2">
						<input type="text" name="provinsi" class="form-control" value="<?php echo $row['PROVINSI']; ?>" placeholder="SEMESTER">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PENDIDIKAN</label>
					<div class="col-sm-2">
						<input type="text" name="pendidikan" class="form-control" value="<?php echo $row['PENDIDIKAN']; ?>" placeholder="TAHUN MASUK">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ALAMAT</label>
					<div class="col-sm-6">
						<textarea name="alamat" class="form-control" placeholder="ALAMAT"><?php echo $row['ALAMAT']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KODE POS</label>
					<div class="col-sm-2">
						<input type="text" name="kdpos" class="form-control" value="<?php echo $row['KODEPOS']; ?>" placeholder="SEMESTER">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">STATUS</label>
					<div class="col-sm-2">
						<select name="status" class="form-control" required>
							<option value="">STATUS</option>
							<option value="1" <?php if($row['STATUS'] == '1'){ echo 'selected'; } ?>>AKTIF</option>
							<option value="2" <?php if($row['STATUS'] == '2'){ echo 'selected'; } ?>>TIDAK AKTIF</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-primary" value="SIMPAN">
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