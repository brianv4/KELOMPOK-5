<?php
include("koneksiuser.php");
include("userfunc.php");
include('includes/header.php');
include('includes/navbar.php');
?>
   <div class="container">
		<div class="content">
			<h2>Data Jadwal Pelatihan</h2>
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
				<div id="scroller">
					<iframe name="myiframe" id="myiframe" src="../peserta/pelatihan/img/<?php echo $row['file_pelatihan']; ?>">
				</div>
					
				</tr>
				
				
			</table>
			
			<a href="jadwalpelatihan.php" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
			<a href="jawdwalpelatihanedit.php?no_jadwal=<?php echo $row['no_jadwal']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data</a>
			<a href="jadwalpelatihanlihat.php?aksi=delete&no_jadwal=<?php echo $row['no_jadwal']; ?>" class="btn btn-danger" onclick="return confirm('Yakin?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus Data</a>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
