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
			$id = $_GET['ID_USER'];
			$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE ID_USER='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				
				$nama		= aman($_POST['nama']);
				$alamat		= aman($_POST['alamat']);
				$nohp		= aman($_POST['nohp']);
				$lv			= aman($_POST['level']);
				$unamek		= aman($_POST['username']);
				
				
				
				$update = mysqli_query($koneksi, "UPDATE `user` SET `NAMA_USER`='$nama',`ALAMAT_USER`='$alamat',`NOHP_USER`='$nohp',`LEVEL`='$lv',`USERNAME`='$unamek' WHERE ID_USER='$id'") or die(mysqli_error());
				if($update){
					
					header("Location: edit.php?ID_USER=".$id."&pesan=sukses");
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
					<label class="col-sm-3 control-label">NAMA USER</label>
					<div class="col-sm-4">
						<input type="text" name="nama" class="form-control" value="<?php echo $row['NAMA_USER']; ?>" placeholder="NAMA USER" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ALAMAT</label>
					<div class="col-sm-6">
						<textarea name="alamat" class="form-control" placeholder="ALAMAT"><?php echo $row['ALAMAT_USER']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NO HP</label>
					<div class="col-sm-2">
						<input type="text" name="nohp" class="form-control" value="<?php echo $row['NOHP_USER']; ?>" placeholder="NOHP">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">LEVEL</label>
					<div class="col-sm-2">
						<select name="level" class="form-control" required>
							<option value="">PILIH LEVEL</option>
							<option value="Owner" <?php if($row['LEVEL'] == 'Owner'){ echo 'selected'; } ?>>Owner</option>
							<option value="Admin" <?php if($row['LEVEL'] == 'Admin'){ echo 'selected'; } ?>>Admin</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">USERNAME</label>
					<div class="col-sm-4">
						<input type="text" name="username" class="form-control" value="<?php echo $row['USERNAME']; ?>" placeholder="USERNAME" required>
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