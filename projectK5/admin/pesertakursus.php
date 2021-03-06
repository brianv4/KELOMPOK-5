<?php
include('koneksiuser.php');
include('userfunc.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<!-- Bootstrap -->
	
<div class="container">
		<div class="content">
			<h2>Peserta Kursus</h2>
			<hr />
			
			<?php
			if(isset($_GET['aksi']) == 'delete'){

				$id = $_GET['id_kursus'];
				$cek = mysqli_query($koneksi, "SELECT * FROM kursus WHERE id_kursus='$id'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM kursus WHERE id_kursus='$id'");
					if($delete){
						echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-info">Data gagal dihapus.</div>';
					}
				}
			}
			?>
			
			
						<?php $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
			
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
					<th>NO.</th>
					<th>ID KURSUS</th>
					<th>NIK</th>
					<th>NAMA</th>
					<th>JENIS LEVEL</th>
					<th>FILE</th>
					<th>BUKTI</th>
					<th>SETTING</th>
				</tr>
				
				<?php
				
					$sql = mysqli_query($koneksi, "SELECT kursus.id_kursus,kursus.nik,calon_peserta.nama,kursus.jenis_level,
					kursus.file_kursus, tb_bukti.bukti from kursus INNER JOIN calon_peserta ON kursus.nik=calon_peserta.nik
					inner join tb_bukti on kursus.id_kursus=tb_bukti.id_kursus ORDER BY id_kursus ASC");
				
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['id_kursus'].'</td>
							<td>'.$row['nik'].'</td>
							<td>'.$row['nama'].'</td>
							<td>'.$row['jenis_level'].'</td>
							<td>'.$row['file_kursus'].'</td>
							<td>'.$row['bukti'].'</td>
						
							<td>
								<a href="pesertakursuslihat.php?id_kursus='.$row['id_kursus'].'" title="Lihat Detail"><i class="fas fa-list"></i></a>
								<a href="pesertakursusedit.php?id_kursus='.$row['id_kursus'].'" title="Rubah Data"><i class="fas fa-edit"></i></a>
								<a href="pesertakursus.php?aksi=delete&id_kursus='.$row['id_kursus'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
				<?php
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