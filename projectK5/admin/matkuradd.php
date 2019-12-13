<?php
include("koneksiuser.php");
include("userfunc.php");
include("includes/header.php");
include("includes/navbar.php");
?>
<?php
	//error_reporting(0)
	?>
	<html>
<head>
	<title>Input Pelatihan</title>
</head>
<body>
<div class="container">
		<div class="content">
			<h2>Tambah Data</h2>
			<hr />
			<form class="form-horizontal" action="simpan_kursus.php" method="post" enctype="multipart/form-data">
			
				<div class="form-group">
					<label class="col-sm-3 control-label">Topik</label>
					<div class="col-sm-4">
						<input type="text" name="topik" class="form-control" placeholder="topik" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Deskripsi</label>
					<div class="col-sm-4">
						<input type="text" name="deskripsi" class="form-control" placeholder="deskripsi" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tanggal Mulai</label>
					<div class="col-sm-4">
						<input type="date" name="tgl_mulai" class="form-control" placeholder="" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tanggal Akhir</label>
					<div class="col-sm-4">
						<input type="date" name="tgl_akhir" class="form-control" placeholder="" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Jenis Level</label>
					<div class="col-sm-3">
						<select name="jenis_level" class="form-control">
							<option value="">Jenis Level</option>
							<option value="level 1">level 1</option>
							<option value="level 2">level 2</option>
							<option value="level 3">level 3</option>					
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">status</label>
					<div class="col-sm-3">
						<select name="status" class="form-control">
							<option value="">status</option>
							<option value="aktif">Aktif</option>
							<option value="tidak aktif">Tidak Aktif</option>				
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Dokumen</label>
					<div class="col-sm-4">
						<input type="file" name="foto" class="form-control" placeholder="" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" class="btn btn-primary" value="Simpan">
						<a href="materikursus.php" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>
			</div>
			</div>
</body>
</html>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
    </script>
    <?php
include("includes/scripts.php");
include("includes/footer.php");
    ?>