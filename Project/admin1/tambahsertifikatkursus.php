<?php
include("koneksiuser.php");
include("userfunc.php");
include("includes/header.php");
include("includes/navbar.php");
error_reporting(0);
?>

	<div class="container">
		<div class="content">
			<h2>Tambah Sertifikat Kursus</h2>
			<hr />
			
			<?php
			if(isset($_POST['add'])){
                $nomor    = aman($_POST['nomor_sertifikat']);
				$id 		= aman($_POST['id_ujiankursus']);
				$user		= aman($_POST['id_user']);
                $tmp		= aman($_POST['tempat']);
                $tgl		= aman($_POST['tanggal']);
				
				
				//tinggal masalah database NIK dijadikan BIG INT
				$cek = mysqli_query($koneksi, "SELECT sertifikat_kursus.id_ujiankursus, sertifikat_kursus.id_user, sertifikat_kursus.tempat, sertifikat_kursus.tanggal, FROM sertifikat_kursus INNER JOIN 
				ujian_kursus ON sertifikat_kursus.id_ujiankursus=ujian_kursus.id_ujiankursus INNER JOIN user ON sertifikat_kursus.id_user=user.id_user
                 WHERE nomor_sertifikat='$nomor'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($koneksi, "INSERT INTO `sertifikat_kursus`(`id_ujiankursus`, `id_user`,`tempat`, `tanggal`) VALUES ('$id','$user','$tmp','$tgl')") or die(mysqli_error($koneksi));
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
					<label class="col-sm-3 control-label">ID UJIAN KURSUS</label>
					<div class="col-sm-2">
						<select name="id_ujiankursus" class="form-control">
							<option value="">ID UJIAN ID KURSUS</option>
							<?php 
							$sql_topik = mysqli_query($koneksi, "SELECT * FROM ujian_kursus") or die
								(mysqli_error($koneksi));
								while($tampilkan = mysqli_fetch_array($sql_topik)){
									echo '<center><option value="'.$tampilkan['id_ujiankursus'].'">'.$tampilkan['id_ujiankursus'].$tampilkan['id_kursus'].'</option></center>';
								}
							?>

						</select>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">ID USER</label>
					<div class="col-sm-2">
						<select name="id_user" class="form-control">
							<option value="">ID USER</option>
							<?php 
							$sql_topik = mysqli_query($koneksi, "SELECT * FROM user") or die
								(mysqli_error($koneksi));
								while($tampilkan = mysqli_fetch_array($sql_topik)){
									echo '<center><option value="'.$tampilkan['id_user'].'">'.$tampilkan['id_user'].$tampilkan['nama_user'].'</option></center>';
								}
							?>

						</select>
					</div>
				</div>
            <div class="form-group">
					<label class="col-sm-3 control-label">TEMPAT</label>
					<div class="col-sm-2">
						<input type="text" name="tempat" class="form-control" placeholder="tempat">
					</div>
            </div>
			<div class="form-group">
					<label class="col-sm-3 control-label">Tanggal</label>
					<div class="col-sm-2">
						<div class="input-group date" data-provide="datepicker">
							<input type="text" name="tanggal" class="form-control" placeholder="0000-00-00">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="TAMBAH">
						<a href="indexsertifikatkursus.php" class="btn btn-warning">KEMBALI</a>
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
