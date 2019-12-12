<?php
include("koneksiuser.php");
include("userfunc.php");
include("includes/header.php");
include("includes/navbar.php");
?>
<div class="container">
		<div class="content">
			<h2>Data NILAI KURSUS</h2>
			<hr />
			
			<?php
			$id = $_GET['id_ujiankursus'];
			
			$sql = mysqli_query($koneksi, "SELECT * FROM ujian_kursus WHERE id_ujiankursus='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){
				$delete = mysqli_query($koneksi, "DELETE FROM ujian_kursus WHERE id_ujiankursus='$id'");
				if($delete){
					echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
				}else{
					echo '<div class="alert alert-info">Data gagal dihapus.</div>';
				}
			}
			?>
			<!--<img class="img-responsive img-circle center-block" src="avatar/<?php// echo $row['foto']; ?>" width="150"><br />-->
			<table class="table table-striped">
				<tr>
					<th width="20%">ID UJIAN KURSUS</th>
					<td><?php echo $row['id_ujiankursus']; ?></td>
				</tr>
				<tr>
					<th>ID KURSUS</th>
					<td><?php echo $row['id_kursus']; ?></td>
				</tr>
				<tr>
					<th> NILAI</th>
					<td><?php echo $row['nilai']; ?></td>
				</tr>
				
			</table>
			
			<a href="nilaikursus.php" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
			<a href="nilaikursusedit.php?id_ujiankursus=<?php echo $row['id_ujiankursus']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data</a>
			<a href="nilaikursuslihat.php?aksi=delete&id_ujiankursus=<?php echo $row['id_ujiankursus']; ?>" class="btn btn-danger" onclick="return confirm('Yakin?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus Data</a>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <?php
    include("includes/scripts.php");
    include("includes/footer.php");
    ?>
