<?php
include("includes/header.php");
include("includes/navbar.php");
include("koneksiuser.php");

?>


<div class="container">
		<div class="content">
			<h2>Jadwal Pelatihan</h2>
			<hr />
            
			<label>Tambah Jadwal Pelatihan :</label>
<a href="jadwalpelatihanadd.php" class="btn btn-primary">Tambah</a>
<br>
<br>
			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$no = $_GET['no_jadwal'];
				$cek = mysqli_query($koneksi, "SELECT * FROM `jadwal_pelatihan` WHERE no_jadwal='$no'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM jadwal_pelatihan WHERE no_jadwal='$no'");
					if($delete){
						echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-info">Data gagal dihapus.</div>';
					}
				}
			}
			?>
			
			<!-- <form class="form-inline" method="get">
				<div class="form-group">
					<select name="urut" class="form-control" onchange="form.submit()">
						<option value="0">Filter</option>
						<?php $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
						<option value="1" <?php if($urut == '1'){ echo 'selected'; } ?>>Mahasiswa Aktif</option>
						<option value="2" <?php if($urut == '2'){ echo 'selected'; } ?>>Mahasiswa Tidak Aktif</option>
					</select>
				</div>
			</form> -->
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
					<th>No.</th>
					<th>No Jadwal</th>
					<th>Deskripsi</th>
					<th>File</th>
					<th>SETTING</th>
				</tr>
				<?php
				if($urut){
					$sql = mysqli_query($koneksi, "SELECT * FROM jadwal_pelatihan WHERE status='$urut' ORDER BY no_jadwal ASC");
				}else{
					$sql = mysqli_query($koneksi, "SELECT * FROM jadwal_pelatihan ORDER BY no_jadwal ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['no_jadwal'].'</td>
							<td>'.$row['deskripsi'].'</td>
							<td>'.$row['file'].'</td>
                            <td>
								<a href="jadwalpelatihanlihat.php?no_jadwal='.$row['no_jadwal'].'" title=" Lihat Data"><i class="fas fa-list"></i></a>
								<a href="jadwalpelatihan.php?aksi=delete&no_jadwal='.$row['no_jadwal'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><i class="fas fa-trash-alt"></i></a>
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
<?php
include("includes/scripts.php");
include("includes/footer.php");
?>