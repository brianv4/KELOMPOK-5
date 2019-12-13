<?php
include("koneksiuser.php");
include("userfunc.php");
include('includes/header.php');
include('includes/navbar.php');
error_reporting(0);
?>
    <div class="container">
		<div class="content">
			<h2>Edit Peserta Kursus</h2>
			<hr />
			
			<?php
			$id = $_GET['id_kursus'];
			$sql = mysqli_query($koneksi, "SELECT * FROM kursus WHERE id_kursus='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: pesertakursus.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				
				$nik		        = aman($_POST['nik']);
				$jenis_level	    = aman($_POST['jenis_level']);
				$ktp			    = aman($_POST['file_ktp']);
				
               
				
				
				$update = mysqli_query($koneksi, "UPDATE `kursus` SET `nik`='$nik',`jenis_level`='$jenis_level',`file_ktp`='$ktp',`file_kk`='$kk',`file_ijazah`='$ijazah',`bukti_bayar`='$bukti' WHERE id_kursus='$id'") or die(mysqli_error());
				if($update){
					echo '<div class="alert alert-success">Data Berhasil diUpdate</div>';
					header("Location:pesertakursus");
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
					<div class="col-sm-4">
						<input type="text" name="nik" class="form-control" value="<?php echo $row['nik']; ?>" placeholder="nik" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Level</label>
					<div class="col-sm-2">
						<select name="jenis_level" class="form-control" required>
							<option value=""><?php echo $row['jenis_level']; ?></option>
							<option value="Level 1" <?php if($row['jenis_level'] == 'Level1'){ echo 'selected'; } ?>>Level 1</option>
							<option value="Level 2" <?php if($row['jenis_level'] == 'Level2'){ echo 'selected'; } ?>>Level 2</option>
							<option value="Level 3" <?php if($row['jenis_level'] == 'Level3'){ echo 'selected'; } ?>>Level 3</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">FILE</label>
					<div class="col-sm-4">
						<input type="file" name="file_ktp" class="form-control" value="<?php echo $row['file_ktp']; ?>" placeholder="file ktp" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-primary" value="SIMPAN">
						<a href="pesertakursus.php" class="btn btn-warning">Kembali</a>
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
<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
