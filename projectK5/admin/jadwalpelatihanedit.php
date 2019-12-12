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
			$sql = mysqli_query($koneksi, "SELECT * FROM jadwal_pelatihan WHERE no_jadwal='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: user.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				
				$no		    = aman($_GET['no_jadwal']);
				$deskripsi	= aman($_POST['deskripsi']);
				$file		= aman($_POST['file']);
				
				
				$update = mysqli_query($koneksi, "UPDATE `jadwal_pelatihan` SET `deskripsi`='$deskripsi',`file`='$file' WHERE no_jadwal='$no'") or die(mysqli_error());
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
						<input type="text" name="deskripsi" value="<?php echo $row['deskripsi']; ?>" class="form-control" placeholder="Deskripsi" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">File</label>
					<div class="col-sm-8">
						<input type="file" name="file" value="<?php echo $row['file']; ?>" class="form-control" placeholder="Deskripsi" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-primary" value="SIMPAN">
						<a href="jadwalpelatihan.php" class="btn btn-warning">Kembali</a>
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
