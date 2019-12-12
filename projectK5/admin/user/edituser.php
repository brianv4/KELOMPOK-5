<?php
include("koneksiuser.php");
include("funcuser.php");
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <div class="container">
		<div class="content">
			<h2>Manajemen User &raquo; Edit Data User</h2>
			<hr />
			
			<?php
			$id = $_GET['id_user'];
			$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				
				$nama		= aman($_POST['nama']);
				$alamat		= aman($_POST['alamat']);
				$nohp		= aman($_POST['nohp']);
				$lv			= aman($_POST['level']);
				$unamek		= aman($_POST['username']);
				
				
				
				$update = mysqli_query($koneksi, "UPDATE `user` SET `nama_user`='$nama',`alamat_user`='$alamat',`nohp_user`='$nohp',`level`='$lv',`username`='$unamek' WHERE id_user='$id'") or die(mysqli_error());
				if($update){
					
					header("Location:index.php?home=edituser&pesan=sukses");
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
					<label class="col-sm-3 control-label">NAMA USER</label>
					<div class="col-sm-4">
						<input type="text" name="nama" class="form-control" value="<?php echo $row['nama_user']; ?>" placeholder="NAMA USER" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ALAMAT</label>
					<div class="col-sm-6">
						<textarea name="alamat" class="form-control" placeholder="ALAMAT"><?php echo $row['alamat_user']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NO HP</label>
					<div class="col-sm-2">
						<input type="text" name="nohp" class="form-control" value="<?php echo $row['nohp_user']; ?>" placeholder="NOHP">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">LEVEL</label>
					<div class="col-sm-2">
						<select name="level" class="form-control" required>
							<option value="">PILIH LEVEL</option>
							<option value="Owner" <?php if($row['level'] == 'Owner'){ echo 'selected'; } ?>>Owner</option>
							<option value="Admin" <?php if($row['level'] == 'Admin'){ echo 'selected'; } ?>>Admin</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">USERNAME</label>
					<div class="col-sm-4">
						<input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>" placeholder="USERNAME" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-primary" value="SIMPAN">
						<a href="index.php" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>
