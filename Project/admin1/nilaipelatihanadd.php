<?php
include("koneksiuser.php");
include("userfunc.php");
include("includes/header.php");
include("includes/navbar.php");
error_reporting(0);
?>

	<div class="container">
		<div class="content">
			<h2>Tambah Nilai Pelatihan</h2>
			<hr />
			
			<?php
			if(isset($_POST['add'])){
				$idup		= aman($_POST['id_ujianpelatihan']);
				$idp		= aman($_POST['id_pelatihan']);
				$nilai		= aman($_POST['nilai']);
				
				
				//tinggal masalah database NIK dijadikan BIG INT
				$cek = mysqli_query($koneksi, "SELECT ujian_pelatihan.nilai, pelatihan.id_pelatihan FROM ujian_pelatihan INNER JOIN 
				pelatihan ON ujian_pelatihan.id_pelatihan=pelatihan.id_pelatihan WHERE id_ujianpelatihan='$idup'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($koneksi, "INSERT INTO `ujian_pelatihan`(`id_pelatihan`, `nilai`) VALUES ('$idp','$nilai')") or die(mysqli_error($koneksi));
						if($insert){
							echo '<div class="alert alert-success">Pendaftaran berhasil dilakukan.</div>';
						}else{
							echo '<div class="alert alert-danger">Pendaftaran gagal dilakukan, silahkan coba lagi.</div>';
						}
					}else{
						echo '<div class="alert alert-danger">Konfirmasi Password tidak sesuai.</div>';
					}
				}
			
			?>
			
			<form class="form-horizontal" action="" method="post">
            <div class="form-group">
					<label class="col-sm-3 control-label">ID PELATIHAN</label>
					<div class="col-sm-2">
						<select name="id_pelatihan" class="form-control">
							<option value="">ID NIK</option>
							<?php 
							$sql_topik = mysqli_query($koneksi, "SELECT * FROM pelatihan") or die
								(mysqli_error($koneksi));
								while($tampilkan = mysqli_fetch_array($sql_topik)){
									echo '<center><option value="'.$tampilkan['id_pelatihan'].'">'.$tampilkan['id_pelatihan'].$tampilkan['nik'].'</option></center>';
								}
							?>

						</select>
					</div>
				</div>
            <div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai" class="form-control" placeholder="nilai">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="TAMBAH">
						<a href="nilaipelatihan.php" class="btn btn-warning">KEMBALI</a>
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
include("includes/scripts.php");
include("includes/footer.php");
?>
