<?php
include("koneksiuser.php");
include("userfunc.php");
include("includes/header.php");
include("includes/navbar.php");
?>
<div class="container">
		<div class="content">
			<h2>Data Jadwal Kursus</h2>
			<hr />
			
			<?php
			$id = $_GET['no_jadwal'];
			
			$sql = mysqli_query($koneksi, "SELECT * FROM jadwal_kursus WHERE no_jadwal='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){
				$delete = mysqli_query($koneksi, "DELETE FROM jadwal_kursus WHERE no_jadwal='$id'");
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
					<th width="20%">NO JADWAL</th>
					<td><?php echo $row['no_jadwal']; ?></td>
				</tr>
				<tr>
					<th>Deskripsi</th>
					<td><?php echo $row['deskripsi']; ?></td>
				</tr>
				<tr>
					<th>FILE </th>
					<td><?php echo $row['file']; ?></td>
				</tr>
				<tr>
					<th>LEVEL </th>
					<td><?php echo $row['level'];?></td>
				</tr>
				
				
				
			</table>
			
			<a href="jadwalkursus.php" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
			<a href="jadwalkursusedit.php?no_jadwal=<?php echo $row['no_jadwal']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data</a>
			<a href="jadwalkursuslihat.php?aksi=delete&no_jadwal=<?php echo $row['no_jadwal']; ?>" class="btn btn-danger" onclick="return confirm('Yakin?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus Data</a>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <?php
    include("includes/scripts.php");
    include("includes/footer.php");
    ?>
