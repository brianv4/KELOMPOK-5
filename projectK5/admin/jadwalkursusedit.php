<?php
include("koneksiuser.php");
include('userfunc.php');
include('includes/header.php');
include('includes/navbar.php');
?>
    <div class="container">
		<div class="content">
			<h2>Edit User Pelatihan</h2>
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
					<label class="col-sm-3 control-label">Deskripsi</label>
					<div class="col-sm-8">
						<input type="text" name="jam" value="<?php echo $row['deskripsi']; ?>" class="form-control" placeholder="Deskripsi">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">File</label>
					<div class="col-sm-5">
						<div class="input-group date" data-provide="datepicker">
							<input type="file" name="tanggal" value="<?php echo $row['file']; ?>" class="form-control" placeholder="">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Jenis Level</label>
					<div class="col-sm-2">
						<select name="jenis_level" class="form-control" required>
							<option value="">STATUS</option>
							<option value="Level 1" <?php if($row['level'] == 'Level 1'){ echo 'selected'; } ?>>Level 1</option>
							<option value="Level 2" <?php if($row['level'] == 'Level 2'){ echo 'selected'; } ?>>Level 2</option>
							<option value="Level 3" <?php if($row['level'] == 'Level 3'){ echo 'selected'; } ?>>Level 3</option>
						</select>
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
