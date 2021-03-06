<?php
include("koneksiuser.php");
include("userfunc.php");
include('includes/header.php');
include('includes/navbar.php');
//error_reporting(0);
?>
    <div class="container">
		<div class="content">
			<h2>Edit Calon Peserta</h2>
			<hr />
			
			<?php
			$id = $_GET['id_daftar'];
			$sql = mysqli_query($koneksi, "SELECT * FROM calon_peserta INNER JOIN kursus ON calon_peserta.nik=kursus.nik WHERE id_daftar='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: calonpeserta.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
                
                $nama		        = aman($_POST['nama']);
				$nik		        = aman($_POST['nik']);
				$tempat     	    = aman($_POST['tempat_lahir']);
				$tanggal		    = aman($_POST['tanggal_lahir']);
				$jk	  				= aman($_POST['jenis_kelamin']);
				$tlp			    = aman($_POST['telepon']);
				$email		        = aman($_POST['email']);
                $alamat		        = aman($_POST['alamat']);
				$kp	  				= aman($_POST['kode_pos']);
				$prov			    = aman($_POST['provinsi']);
				$pendidikan		    = aman($_POST['pendidikan']);
				$status			    = aman($_POST['status']);
				$level			    = aman($_POST['jenis_level']);
				$update = mysqli_query($koneksi, "UPDATE calon_peserta INNER JOIN kursus ON calon_peserta.nik=kursus.nik SET calon_peserta.nama='$nama',calon_peserta.nik='$nik',calon_peserta.tempat_lahir='$tempat',calon_peserta.tanggal_lahir='$tanggal',calon_peserta.jenis_kelamin='$jk',calon_peserta.telepon='$tlp',calon_peserta.email='$email',calon_peserta.alamat='$alamat',calon_peserta.kode_pos='$kp',calon_peserta.provinsi='$prov',calon_peserta.pendidikan='$pendidikan',calon_peserta.status='$status',kursus.jenis_level='$level' WHERE calon_peserta.id_daftar='$id'") or die(mysqli_error());
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
					<label class="col-sm-3 control-label">NAMA</label>
					<div class="col-sm-4">
						<input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>" placeholder="nik" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NIK</label>
					<div class="col-sm-4">
						<input type="text" name="nik" class="form-control" value="<?php echo $row['nik']; ?>" placeholder="nik" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">TEMPAT LAHIR</label>
					<div class="col-sm-4">
						<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $row['tempat_lahir']; ?>" placeholder="nik" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">TANGGAL LAHIR</label>
					<div class="col-sm-2">
						<div class="input-group date" data-provide="datepicker">
							<input type="text" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" class="form-control" placeholder="0000-00-00">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">JENIS KELAMIN</label>
					<div class="col-sm-2">
						<select name="jenis_kelamin" class="form-control" required>
							<option value="">PILIH LEVEL</option>
							<option value="Laki-laki" <?php if($row['jenis_kelamin'] == 'Laki-laki'){ echo 'selected'; } ?>>Laki-laki</option>
							<option value="Perempuan" <?php if($row['jenis_kelamin'] == 'Perempuan'){ echo 'selected'; } ?>>Perempuan</option>
							
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">TELEPON</label>
					<div class="col-sm-4">
						<input type="text" name="telepon" class="form-control" value="<?php echo $row['telepon']; ?>" placeholder="file ktp" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">EMAIL</label>
					<div class="col-sm-4">
						<input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" placeholder="file kk" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ALAMAT</label>
					<div class="col-sm-4">
						<input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat']; ?>" placeholder="file ijazah" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"> KODE POS</label>
					<div class="col-sm-4">
						<input type="text" name="kode_pos" class="form-control" value="<?php echo $row['kode_pos']; ?>" placeholder="bukti_bayar" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">PROVINSI</label>
					<div class="col-sm-4">
						<input type="text" name="provinsi" class="form-control" value="<?php echo $row['provinsi']; ?>" placeholder="file ijazah" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PENDIDIKAN</label>
					<div class="col-sm-4">
						<input type="text" name="pendidikan" class="form-control" value="<?php echo $row['pendidikan']; ?>" placeholder="bukti_bayar" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">STATUS</label>
					<div class="col-sm-2">
						<select name="status" class="form-control" required>
							<option value="">PILIH STATUS</option>
							<option value="0" <?php if($row['status'] == '0'){ echo 'selected'; } ?>>Calon Peserta</option>
							<option value="1" <?php if($row['status'] == '1'){ echo 'selected'; } ?>>Pelatihan</option>
							<option value="2" <?php if($row['status'] == '2'){ echo 'selected'; } ?>>Level 1</option>
							<option value="3" <?php if($row['status'] == '3'){ echo 'selected'; } ?>>Level 2</option>
							<option value="4" <?php if($row['status'] == '4'){ echo 'selected'; } ?>>Level 3</option>
							
						</select>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">LEVEL</label>
					<div class="col-sm-2">
						<select name="jenis_level" class="form-control" required>
							<option value="">PILIH LEVEL</option>
							<option value="Level 1" <?php if($row['jenis_level'] == 'Level 1'){ echo 'selected'; } ?>>Level 1</option>
							<option value="Level 2" <?php if($row['jenis_level'] == 'Level 2'){ echo 'selected'; } ?>>Level 2</option>
							<option value="Level 3" <?php if($row['jenis_level'] == 'Level 3'){ echo 'selected'; } ?>>Level 3</option>
							
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-primary" value="SIMPAN">
						<a href="calonpeserta.php" class="btn btn-warning">Kembali</a>
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
