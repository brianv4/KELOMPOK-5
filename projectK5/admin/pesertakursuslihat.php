<?php
include("koneksiuser.php");
include("userfunc.php");
include('includes/header.php');
include('includes/navbar.php');
?>
    <div class="container">
		<div class="content">
			<h2>Edit Peserta Pelatihan</h2>
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
                $jenis			    = aman($_POST['jenis_level']);
				$ktp			    = aman($_POST['file_ktp']);
				$kk	  				= aman($_POST['file_kk']);
				$ijazah			    = aman($_POST['file_ijazah']);
				$bukti			    = aman($_POST['bukti_bayar']);
				
				
				$update = mysqli_query($koneksi, "UPDATE `kursus` SET `nik`='$nik',`jenis_level`='$jenis',`file_ktp`='$ktp',`file_kk`='$kk',`file_ijazah`='$ijazah', `bukti_bayar`='$bukti' WHERE id_kursus='$id'") or die(mysqli_error());
				if($update){
					echo '<div class="alert alert-success">Data Berhasil diUpdate</div>';
					//header("Location:user.php?pesan=sukses");
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
					<label class="col-sm-3 control-label">JENIS LEVEL</label>
					<div class="col-sm-4">
						<input type="file" name="jenis_level" class="form-control" value="<?php echo $row['jenis_level']; ?>" placeholder="file ktp" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">FILE KTP</label>
					<div class="col-sm-4">
						<input type="text" name="file_ktp" class="form-control" value="<?php echo $row['file_ktp']; ?>" placeholder="file ktp" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">FILE KK</label>
					<div class="col-sm-4">
						<input type="text" name="file_kk" class="form-control" value="<?php echo $row['file_kk']; ?>" placeholder="file kk" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">FILE IJAZAH</label>
					<div class="col-sm-4">
						<input type="text" name="file_ijazah" class="form-control" value="<?php echo $row['file_ijazah']; ?>" placeholder="file ijazah" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label"> BUKTI BAYAR</label>
					<div class="col-sm-4">
						<input type="text" name="bukti_bayar" class="form-control" value="<?php echo $row['bukti_bayar']; ?>" placeholder="file ijazah" required>
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
