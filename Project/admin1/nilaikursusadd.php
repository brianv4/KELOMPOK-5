<?php
include("koneksiuser.php");
include("userfunc.php");
include("includes/header.php");
include("includes/navbar.php");
error_reporting(0);
?>

	<div class="container">
		<div class="content">
			<h2>Tambah Nilai Kursus</h2>
			<hr />
			
			<?php
			if(isset($_POST['add'])){
				$id			= aman($_POST['id_ujiankursus']);
				$idk		= aman($_POST['id_kursus']);
				$nilai		= aman($_POST['nilai']);
				
				
				//tinggal masalah database NIK dijadikan BIG INT
				$cek = mysqli_query($koneksi, "SELECT ujian_kursus.nilai, kursus.id_kursus FROM ujian_kursus INNER JOIN 
				kursus ON ujian_kursus.id_kursus=kursus.id_kursus WHERE id_ujiankursus='$id'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($koneksi, "INSERT INTO `ujian_kursus`(`id_kursus`, `nilai`) VALUES ('$idk','$nilai')") or die(mysqli_error($koneksi));
						if($insert){
							echo '<div class="alert alert-success">Pendaftaran berhasil dilakukan.</div>';
						}else{
							echo '<div class="alert alert-danger">Pendaftaran gagal dilakukan, silahkan coba lagi.</div>';
						}
				}
				}
			
			?>
			
			<form class="form-horizontal" action="" method="post">
            <div class="form-group">
					<label class="col-sm-3 control-label">ID KURSUS</label>
					<div class="col-sm-2">
						<select name="id_kursus" class="form-control">
							<option value="">ID NIK</option>
							<?php 
							$sql_topik = mysqli_query($koneksi, "SELECT * FROM kursus") or die
								(mysqli_error($koneksi));
								while($tampilkan = mysqli_fetch_array($sql_topik)){
									echo '<center><option value="'.$tampilkan['id_kursus'].'">'.$tampilkan['id_kursus'].$tampilkan['nik'].'</option></center>';
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
						<a href="nilaikursus.php" class="btn btn-warning">KEMBALI</a>
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
