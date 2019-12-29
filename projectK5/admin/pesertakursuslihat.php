<?php
include("koneksiuser.php");
include("userfunc.php");
include('includes/header.php');
include('includes/navbar.php');
?>
    <div class="container">
		<div class="content">
			<h2>Data Peserta Kursus</h2>
			<hr />
			
			<?php
			$id = $_GET['id_kursus'];
			
			$sql = mysqli_query($koneksi, "SELECT * FROM kursus WHERE id_kursus='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){
				$delete = mysqli_query($koneksi, "DELETE FROM kursus WHERE id_kursus='$id'");
				if($delete){
					echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
				}else{
					echo '<div class="alert alert-info">Data gagal dihapus.</div>';
				}
			}
			?>
			<table class="table table-striped">
				<tr>
					<th width="20%">NIK</th>
					<td><?php echo $row['nik']; ?></td>
				</tr>
				<tr>
					<th>JENIS LEVEL</th>
					<td><?php echo $row['jenis_level']; ?></td>
				</tr>
				<tr>
				<div id="scroller">
				<iframe type="hidden" name="myiframe" id="myiframe" src="../peserta/kursus/img/<?php echo $row['file_kursus']; ?>">	
				</div>
				</tr>
				<tr>
				<div id="scroller">
					<iframe name="myiframe" id="myiframe" src="../peserta/kursus/img/<?php echo $row['bukti']; ?>">
				</div>
					
				</tr>
				
				
			</table>
			
			<a href="pesertakursus.php" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
			<a href="pesertakursusedit.php?nik=<?php echo $row['nik']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data</a>
			<a href="pesertakursus.php?aksi=delete&nik=<?php echo $row['nik']; ?>" class="btn btn-danger" onclick="return confirm('Yakin?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus Data</a>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
