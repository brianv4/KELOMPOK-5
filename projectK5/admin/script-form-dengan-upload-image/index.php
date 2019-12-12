<?php
include('koneksi-database.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

    
    <!--
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form action="upload-rename.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<div class="form-group">
<label >NIK</label>
<input type="text" class="form-control" name="nik">
</div>
<div class="form-group">
<label>Jumlah Transfer</label>
<input type="text" class="form-control" name="transfer">
</div>
<div class="form-group">
<label>Bank</label>
<input type="text" class="form-control" name="bank">
</div>
<div class="form-group">
<p>Pilih File Gambar : <br/><input type='file' name='filegbr' id='Filegambar'></p>
    
</div>
<div class="form-group">
<input type="submit" name="Submit" value="Upload" />
</div>
</form>
</div>
<div class="col-md-4"></div>
</div>
-->

<?php
session_start();
$username = $_SESSION['username'];

$cek = mysqli_query($koneksi, "SELECT * FROM calon_peserta where username='$username'");
$tampil = mysqli_fetch_array($cek);

?>
<form class="form-horizontal" action="upload-rename.php" method="post" enctype="multipart/form-data" >
				<div class="form-group">
					<label class="col-sm-3 control-label">nik</label>
					<div class="col-sm-4">
						<input type="text" name="nik" class="form-control" value="<?php echo $tampil['nik']; ?>" placeholder="nik" required>
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
						<input type="file" name="file_ktp" class="form-control" placeholder="file" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">file kk</label>
					<div class="col-sm-4">
						<input type="file" name="file_kk" class="form-control" placeholder="file" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">file ijazah</label>
					<div class="col-sm-4">
						<input type="file" name="file_ijazah" class="form-control" placeholder="file" required>
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
    -->
</body>
</html>