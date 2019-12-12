<?php
include("includes/header.php");
include("includes/navbar.php");
include("koneksiuser.php");
include("userfunc.php");
error_reporting(0);
?>
<div class="container">
		<div class="content">
			<h2>Manajemen User &raquo; Edit Data User</h2>
			<hr />
			
			<?php
			$id = $_GET['id_topik'];
			$sql = mysqli_query($koneksi, "SELECT * FROM topik_pelatihan WHERE id_topik='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				
               
				$topik		= aman($_POST['topik']);
				$tglmulai	= aman($_POST['tgl_mulai']);
				$tglakhir	= aman($_POST['tgl_akhir']);
				$deskripsi	= aman($_POST['deskripsi']);
				$file		= aman($_POST['file']);
				$status		= aman($_POST['status']);
				$kuota		= aman($_POST['kuota']);
				
				
				$update = mysqli_query($koneksi, "UPDATE `topik_pelatihan` SET `topik`='$topik',`tgl_mulai`='$tglmulai',`tgl_akhir`='$tglakhir',`deskripsi`='$deskripsi',`file`='$file',`status`='$status',`kuota`='$kuota' WHERE id_topik='$id'") or die(mysqli_error());
				if($update){
					
					header("Location: materipelatihanedit.php?id_topik=".$id."&pesan=sukses");
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
					<label class="col-sm-3 control-label">ID TOPIK</label>
					<div class="col-sm-2">
						<input type="text" name="id_topik" class="form-control" value="<?php echo $row['id_topik']; ?>" placeholder="id topik" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">TOPIK</label>
					<div class="col-sm-4">
						<input type="text" name="topik" class="form-control" value="<?php echo $row['topik']; ?>" placeholder="topik" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">TANGGAL MULAI</label>
					<div class="col-sm-2">
						<div class="input-group date" data-provide="datepicker">
							<input type="text" name="tgl_mulai" class="form-control" value="<?php echo $row['tgl_mulai']; ?>" placeholder="0000-00-00">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">TANGGAL AKHIR</label>
					<div class="col-sm-2">
						<div class="input-group date" data-provide="datepicker">
							<input type="text" name="tgl_akhir" class="form-control" value="<?php echo $row['tgl_akhir']; ?>" placeholder="0000-00-00">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">DESKRIPSI</label>
					<div class="col-sm-3">
						<input type="textarea" name="deskripsi" class="form-control" value="<?php echo $row['deskripsi']; ?>" placeholder="deskripsi" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">file</label>
					<div class="col-sm-4">
						<input type="file" name="file" class="form-control" placeholder="File" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">STATUS</label>
					<div class="col-sm-2">
						<select name="status" class="form-control" required>
							<option value="">STATUS</option>
							<option value="1" <?php if($row['status'] == '1'){ echo 'selected'; } ?>>AKTIF</option>
							<option value="2" <?php if($row['status'] == '2'){ echo 'selected'; } ?>>TIDAK AKTIF</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KUOTA</label>
					<div class="col-sm-2">
						<select name="kuota" class="form-control" required>
							<option value="">STATUS</option>
							<option value="1" <?php if($row['kuota'] == '1'){ echo 'selected'; } ?>>TERSEDIA</option>
							<option value="2" <?php if($row['kuota'] == '2'){ echo 'selected'; } ?>>TIDAK TERSEDIA</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-primary" value="SIMPAN">
						<a href="materipelatihan.php" class="btn btn-warning">BATAL</a>
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