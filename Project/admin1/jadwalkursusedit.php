<?php
include("koneksiuser.php");
include('userfunc.php');
include('includes/header.php');
include('includes/navbar.php');
?>
    <div class="container">
		<div class="content">
			<h2>Edit User</h2>
			<hr />
			
			<?php
			$id = $_GET['no_jadwal'];
			$sql = mysqli_query($koneksi, "SELECT * FROM jadwal_kursus WHERE no_jadwal='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: user.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				
				$id			= aman($_POST['no_jadwal']);
				$hari		= aman($_POST['hari']);
				$jam		= aman($_POST['jam']);
				$tanggal	= aman($_POST['tanggal']);
			
				
				
				$update = mysqli_query($koneksi, "UPDATE `jadwal_kursus` SET `no_jadwal`='$id',`hari`='$hari',`jam`='$jam',`tanggal`='$tanggal' WHERE id_user='$id'") or die(mysqli_error());
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
					<label class="col-sm-3 control-label">Hari</label>
					<div class="col-sm-2">
						<select name="hari" class="form-control">
							<option value="">Hari</option>
							<option value="Senin"<?php if($row['hari'] == 'Senin'){ echo 'selected'; } ?>>Senin</option>
							<option value="Selasa"<?php if($row['hari'] == 'Selasa'){ echo 'selected'; } ?>>Selasa</option>
							<option value="Rabu"><?php if($row['hari'] == 'Rabu'){ echo 'selected'; } ?>Rabu</option>
							<option value="Kamis"<?php if($row['hari'] == 'Kamis'){ echo 'selected'; } ?>>Kamis</option>
							<option value="Jumat"<?php if($row['hari'] == 'Jumat'){ echo 'selected'; } ?>>Jumat</option>
							<option value="Sabtu"<?php if($row['hari'] == 'Sabtu'){ echo 'selected'; } ?>>Sabtu</option>
							<option value="Minggu"<?php if($row['hari'] == 'Minggu'){ echo 'selected'; } ?>>Minggu</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">jam</label>
					<div class="col-sm-2">
						<input type="time" name="jam" value="<?php echo $row['jam']; ?>" class="form-control" placeholder="JAM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tanggal</label>
					<div class="col-sm-2">
						<div class="input-group date" data-provide="datepicker">
							<input type="text" name="tanggal" value="<?php echo $row['tanggal']; ?>" class="form-control" placeholder="0000-00-00">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-primary" value="SIMPAN">
						<a href="jadwalkursus.php" class="btn btn-warning">Kembali</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
