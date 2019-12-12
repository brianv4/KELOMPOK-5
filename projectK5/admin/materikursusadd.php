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
					<label class="col-sm-3 control-label">ID</label>
					<div class="col-sm-4">
						<input type="text" name="id_topik" class="form-control" placeholder="id" required>
					</div>
				</div>
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

	<form method="post" action="simpan_kursus.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>ID</td>
		<td><input type="text" name="id_topik"></td>
	</tr>
	<tr>
		<td>Topik</td>
		<td><input type="text" name="topik"></td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td><input type="text" name="deskripsi"></td>
	</tr>
	<tr>
		<td>TANGGAL MULAI</td>
		<td><input type="text" name="tgl_mulai"></td>
	</tr>
	<tr>
		<td>TANGGAL AKHIR</td>
		<td><input type="text" name="tgl_akhir"></td>
	</tr>
    <tr>
		<td>JENIS LEVEL</td>
		<td>
		<input type="radio" name="jenis_level" value="Level 1"> Level 1
		<input type="radio" name="jenis_level" value="Level 2"> Level 2
        <input type="radio" name="jenis_level" value="Level 3"> Level 3
		</td>
	</tr>
	<tr>
		<td>STATUS</td>
		<td>
		<input type="radio" name="status" value="Aktif"> Aktif
		<input type="radio" name="status" value="Tidak Aktif"> Tidak Aktif
		</td>
	</tr>
	<tr>
		<td>DOKUMEN</td>
		<td><input type="file" name="foto"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
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