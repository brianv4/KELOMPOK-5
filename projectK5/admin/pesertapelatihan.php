<?php
include('koneksiuser.php');
include('userfunc.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<!-- Bootstrap -->
	
<div class="container">
		<div class="content">
			<h2>Peserta Pelatihan</h2>
			<hr />
			
			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$id = $_GET['id_pelatihan'];
				$cek = mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE id_pelatihan='$id'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM pelatihan WHERE id_pelatihan='$id'");
					if($delete){
						echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-info">Data gagal dihapus.</div>';
					}
				}
			}
			?>
			
			
						
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
					<th>NO.</th>
					<th>NIK</th>
					<th>NAMA</th>
					<th>FILE PELATIHAN</th>
					<th>SETTING</th>
				</tr>
				<?php
				
				$sql = mysqli_query($koneksi, "SELECT pelatihan.id_pelatihan,pelatihan.nik,calon_peserta.nama,
				pelatihan.file_pelatihan from pelatihan INNER JOIN calon_peserta ON pelatihan.nik=calon_peserta.nik ORDER BY id_pelatihan ASC");
				
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['nik'].'</td>
							<td>'.$row['nama'].'</td>
							<td>'.$row['file_pelatihan'].'</td>
							
							<td>
								<a href="pesertapelatihanlihat.php?id_pelatihan='.$row['id_pelatihan'].'" title="Lihat Detail"><i class="fas fa-list"></i></a>
								<a href="pesertapelatihanedit.php?id_pelatihan='.$row['id_pelatihan'].'" title="Rubah Data"><i class="fas fa-edit"></i></a>
								<a href="pesertapelatihan.php?aksi=delete&id_pelatihan='.$row['id_pelatihan'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><i class="fas fa-trash-alt"></i></a>
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
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>