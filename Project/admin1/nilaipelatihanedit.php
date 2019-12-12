<?php
include("koneksiuser.php");
include("userfunc.php");
include('includes/header.php');
include('includes/navbar.php');

?>
    <div class="container">
		<div class="content">
			<h2>Edit NILAI pelatihan</h2>
			<hr />
			
			<?php
			$id = $_GET['id_ujianpelatihan'];
			$sql = mysqli_query($koneksi, "SELECT * FROM ujian_pelatihan WHERE id_ujianpelatihan='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: nilaipelatihan.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				
				$idp		= aman($_POST['id_pelatihan']);
				$nilai	    = aman($_POST['nilai']);
				
				$update = mysqli_query($koneksi, "UPDATE `ujian_pelatihan` SET `id_pelatihan`='$idp',`nilai`='$nilai' WHERE id_ujianpelatihan='$id'") or die(mysqli_error());
				if($update){
					echo '<div class="alert alert-success">Data Berhasil diUpdate</div>';
					
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
					<label class="col-sm-3 control-label">ID PELATIHAN</label>
					<div class="col-sm-4">
						<input type="text" name="nik" class="form-control" value="<?php echo $row['id_pelatihan']; ?>" placeholder="nik" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-4">
						<input type="text" name="nilai" class="form-control" value="<?php echo $row['nilai']; ?>" placeholder="nilai" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-primary" value="SIMPAN">
						<a href="nilaipelatihan.php" class="btn btn-warning">Kembali</a>
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
