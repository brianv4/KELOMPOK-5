<?php
include("koneksiuser.php");
?>
<!DOCTYPE html>
<html>
<head>
	<!--<link href="css/bootstrap.min.css" rel="stylesheet"> -->
	
</head>
<body>
	
<div class="container">
		<div class="content">
			<h2>Manajemen User</h2>
			<hr />
			
			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$id = $_GET['ID_USER'];
				$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE ID_USER='$id'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM user WHERE ID_USER='$id'");
					if($delete){
						echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-info">Data gagal dihapus.</div>';
					}
				}
			}
			?>
			

			<form class="form-inline" method="get">
				<div class="form-group">
					<select name="urut" class="form-control" onchange="form.submit()">
						<option value="0">Filter</option>
						<?php $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
						<option value="1" <?php if($urut == '1'){ echo 'selected'; } ?>>Aktif</option>
						<option value="2" <?php if($urut == '2'){ echo 'selected'; } ?>>Tidak Aktif</option>
					</select>
				</div>
			</form>
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
					<th>NO.</th>
					<th>ID USER</th>
					<th>NAMA USER</th>
					<th>Alamat</th>
					<th>NOHP</th>
					<th>LEVEL</th>
					<th>USERNAME</th>
					<th>SETTING</th>
				</tr>
				<?php
				if($urut){
					$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE status='$urut' ORDER BY ID_USER ASC");
				}else{
					$sql = mysqli_query($koneksi, "SELECT * FROM user ORDER BY ID_USER ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['id_user'].'</td>
							<td>'.$row['nama_user'].'</td>
							<td>'.$row['alamat_user'].'</td>
							<td>'.$row['nohp_user'].'</td>
							<td>'.$row['level'].'</td>
							<td>'.$row['username'].'</td>
							<td>
								<a href="user/user.php?home=profileuser&id_user='.$row['id_user'].'" title="Lihat Detail"><i class="fas fa-list"></i></a>
								<a href="index.php?home=edituser&id_user=" title="Rubah Data"><i class="fas fa-edit"></i></a>
								<a href="password.php?id_user='.$row['id_user'].'" title="Foto Profile"><i class="fas fa-camera-retro"></i></a>
								<a href="avatar.php?id_user='.$row['id_user'].'" title="Ganti Password"><i class="fas fa-key"></i></a>
								<a href="index.php?aksi=delete&id_user='.$row['id_user'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
			</table>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
