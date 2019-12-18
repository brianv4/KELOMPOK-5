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
			$id = $_GET['id_pelatihan'];
			$sql = mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE id_pelatihan='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: pesertapelatihan.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				
				$nik		        = aman($_POST['nik']);
				$ktp			    = aman($_POST['file_ktp']);
				$kk	  				= aman($_POST['file_kk']);
				$ijazah			    = aman($_POST['file_ijazah']);
				
				
				
				$update = mysqli_query($koneksi, "UPDATE `pelatihan` SET `nik`='$nik',`file_ktp`='$ktp',`file_kk`='$kk',`file_ijazah`='$ijazah' WHERE id_pelatihan='$id'") or die(mysqli_error());
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
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-primary" value="SIMPAN">
						<a href="pesertapelatihan.php" class="btn btn-warning">Kembali</a>
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
