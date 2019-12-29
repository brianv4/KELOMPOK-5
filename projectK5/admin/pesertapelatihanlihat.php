<?php
include("koneksiuser.php");
include("userfunc.php");
include('includes/header.php');
include('includes/navbar.php');
?>
   <div class="container">
		<div class="content">
			<h2>Data Peserta Pelatihan</h2>
			<hr />
			
			<?php
			$id = $_GET['id_pelatihan'];
			
			$sql = mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE id_pelatihan='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){
				$delete = mysqli_query($koneksi, "DELETE FROM pelatihan WHERE id_pelatihan='$id'");
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
					<th>FILE PELATIHAN</th>
					<td><?php echo $row['file_pelatihan']; ?></td>
				</tr>
				<tr>
				<th>FILE IDENTITAS</th>
					<td><a href="unduhpelatihan.php?filename=<?=$row['file_pelatihan']?>">Download File Pelatihan </a></td>
					
				</tr>
				
				
			</table>
			
			<a href="pesertakursus.php" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
			</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
