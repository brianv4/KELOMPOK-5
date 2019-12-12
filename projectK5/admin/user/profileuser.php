<?php
include("koneksiuser.php");
include("funcuser.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
	
	<div class="container">
		<div class="content">
			<h2> Profile User</h2>
			<hr />
			
			<?php
			$id = $_GET['id_user'];
			
			$sql = mysqli_query($koneksi, "SELECT * FROM 'user' WHERE 'id_user'='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php?home=edituser");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){
				$delete = mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id'");
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
					<th width="20%">ID USER</th>
					<td><?php echo $row['id_user']; ?></td>
				</tr>
				<tr>
					<th>NAMA LENGKAP</th>
					<td><?php echo $row['nama_user']; ?></td>
				</tr>
				<tr>
					<th>NO HP</th>
					<td><?php echo $row['alamat']; ?></td>
				</tr>
				<tr>
					<th>ALAMAT</th>
					<td><?php echo $row['nohp_user']; ?></td>
				</tr>
				<tr>
					<th>LEVEL</th>
					<td><?php echo $row['level']; ?></td>
				</tr>
				<tr>
					<th>USERNAME</th>
					<td><?php echo $row['username']; ?></td>
				</tr>
			</table>
			
			<a href="index.php" class="btn btn-warning"><i class="fas fa-arrow-circle-left"></i></a>
			<a href="index.php?home=edituser&ID_USER=<?php echo $row['ID_USER']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data</a>
			<a href="profile.php?aksi=delete&ID_USER=<?php echo $row['ID_USER']; ?>" class="btn btn-danger" onclick="return confirm('Yakin?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus Data</a>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>