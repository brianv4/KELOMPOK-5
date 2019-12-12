<?php
include("koneksiuser.php");
include("userfunc.php");
include("includes/header.php");
include("includes/navbar.php");
?>
<div class="container">
		<div class="content">
			<h2>Data Calon Peserta</h2>
			<hr />
			
			<?php
			$nik = $_GET['nik'];
			
			$sql = mysqli_query($koneksi, "SELECT * FROM calon_peserta WHERE nik='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){
				$delete = mysqli_query($koneksi, "DELETE FROM calon_peserta WHERE nik='$nik'");
				if($delete){
					echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
				}else{
					echo '<div class="alert alert-info">Data gagal dihapus.</div>';
				}
			}
			?>
			<img class="img-responsive img-circle center-block" src="avatar/<?php echo $row['foto']; ?>" width="150"><br />
			<table class="table table-striped">
				<tr>
					<th width="20%">NAMA LENGKAP</th>
					<td><?php echo $row['nama']; ?></td>
				</tr>
				<tr>
					<th>NIK</th>
					<td><?php echo $row['nik']; ?></td>
				</tr>
				<tr>
					<th>TEMPAT LAHIR</th>
					<td><?php echo $row['tempat_lahir']; ?></td>
				</tr>
				<tr>
					<th>TANGGAL LAHIR</th>
					<td><?php echo $row['tanggal_lahir'];?></td>
				</tr>
				<tr>
					<th>JENIS KELAMIN</th>
					<td><?php echo $row['jenis_kelamin']; ?></td>
				</tr>
				<tr>
					<th>TELEPON</th>
					<td><?php echo $row['telepon']; ?></td>
				</tr>
				<tr>
					<th>EMAIL</th>
					<td><?php echo $row['email']; ?></td>
				</tr>
                <tr>
					<th>ALAMAT</th>
					<td><?php echo $row['alamat']; ?></td>
				</tr>
				<tr>
					<th>KODE POS</th>
					<td><?php echo $row['kode_pos']; ?></td>
				</tr>
				<tr>
					<th>PROVINSI</th>
					<td><?php echo $row['provinsi']; ?></td>
				</tr>
                <tr>
					<th>PENDIDIKAN</th>
					<td><?php echo $row['pendidikan']; ?></td>
				</tr>
				<tr>
					<th>PENDIDIKAN</th>
					<td><?php echo $row['status']; ?></td>
				</tr>
				
				
				
			</table>
			
			<a href="calonpeserta.php" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
			<a href="calonpesertaedit.php?nik=<?php echo $row['nik']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data</a>
			<a href="calonpeserta.php?aksi=delete&nik=<?php echo $row['nik']; ?>" class="btn btn-danger" onclick="return confirm('Yakin?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus Data</a>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <?php
    include("includes/scripts.php");
    include("includes/footer.php");
    ?>
