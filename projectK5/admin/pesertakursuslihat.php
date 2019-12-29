<?php
include("koneksiuser.php");
include("userfunc.php");
include('includes/header.php');
include('includes/navbar.php');
?>
<meta charset="UTF-8">
    <div class="container">
		<div class="content">
			<h2>Data Peserta Kursus</h2>
			<hr />
			
			<?php
			$id = $_GET['id_kursus'];
			
			$sql = mysqli_query($koneksi, "SELECT * FROM kursus INNER JOIN tb_bukti ON kursus.id_kursus=tb_bukti.id_kursus WHERE kursus.id_kursus='$id'");
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
					<th>BUKTI</th>
					<td><a href="unduhkursus.php?filename=<?=$row['bukti']?>">Download Bukti </a></td>
						
				</div>
				</tr>
				<tr>
					<th>FILE IDENTITAS</th>
					<td><a href="unduhkursus.php?filename=<?=$row['file_kursus']?>">Download File Identitas </a></td>
					
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
