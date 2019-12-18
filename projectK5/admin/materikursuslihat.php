<?php
include("koneksiuser.php");
include("userfunc.php");
include("includes/header.php");
include("includes/navbar.php");
?>
<div class="container">
		<div class="content">
			<h2>Data Kursus</h2>
			<hr />
			
			<?php
			$id = $_GET['id_topik'];
			
			$sql = mysqli_query($koneksi, "SELECT * FROM materi_kursus WHERE id_topik='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){
				$delete = mysqli_query($koneksi, "DELETE FROM materi_kursus WHERE id_topik='$id'");
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
					<th width="20%">ID TOPIK</th>
					<td><?php echo $row['id_topik']; ?></td>
				</tr>
				<tr>
					<th>TOPIK</th>
					<td><?php echo $row['topik']; ?></td>
				</tr>
				<tr>
					<th>TANGGAL AWAL</th>
					<td><?php echo $row['tgl_mulai']; ?></td>
				</tr>
				<tr>
					<th>TANGGAL AKHIR</th>
					<td><?php echo $row['tgl_akhir'];?></td>
				</tr>
				<tr>
					<th>DESKRIPSI</th>
					<td><?php echo $row['deskripsi']; ?></td>
				</tr>
				<tr>
					<th>DOKUMEN</th>
					<td><?php echo $row['dokumen']; ?></td>
				</tr>
				<tr>
					<th>JENIS LEVEL</th>
					<td><?php echo $row['jenis_level']; ?></td>
				</tr>
			
				
			</table>
			
			<a href="materikursus.php" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
			<a href="materikursusedit.php?id_topik=<?php echo $row['id_topik']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data</a>
			<a href="materikursuslihat.php?aksi=delete&id_topik=<?php echo $row['id_topik']; ?>" class="btn btn-danger" onclick="return confirm('Yakin?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus Data</a>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <?php
    include("includes/scripts.php");
    include("includes/footer.php");
    ?>
