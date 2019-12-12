<?php
include('koneksiuser.php');
include('userfunc.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<!-- Bootstrap -->
	
<div class="container">
		<div class="content">
			<h2>Calon Peserta</h2>
			<hr />
			
			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$id = $_GET['id_daftar'];
				$cek = mysqli_query($koneksi, "SELECT * FROM calon_peserta WHERE id_daftar='$id'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM calon_peserta WHERE id_daftar='$id'");
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
					<th>ID DAFTAR</th>
					<th>NAMA LENGKAP</th>
					<th>NIK</th>
					<th>TEMPAT LAHIR</th>
					<th>TANGGAL LAHIR</th>
                    <th>JENIS KELAMIN</th>
                    <th>TELEPON</th>
					<th>EMAIL</th>
					<th>ALAMAT</th>
					<th>KODE POS</th>
                    <th>PROVINSI</th>
					<th>PENDIDIKAN</th>
					<th>STATUS</th>
					<th>SETTING</th>
				</tr>
				<?php
				if($urut){
					$sql = mysqli_query($koneksi, "SELECT * FROM calon_peserta WHERE status='$urut' ORDER BY id_daftar ASC");
				}else{
					$sql = mysqli_query($koneksi, "SELECT * FROM calon_peserta ORDER BY id_daftar ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['id_daftar'].'</td>
							<td>'.$row['nama'].'</td>
							<td>'.$row['nik'].'</td>
							<td>'.$row['tempat_lahir'].'</td>
                            <td>'.$row['tanggal_lahir'].'</td>
                            <td>'.$row['jenis_kelamin'].'</td>
                            <td>'.$row['telepon'].'</td>
                            <td>'.$row['email'].'</td>
							<td>'.$row['alamat'].'</td>
							<td>'.$row['kode_pos'].'</td>
                            <td>'.$row['provinsi'].'</td>
							<td>'.$row['pendidikan'].'</td>
							<td>'.$row['status'].'</td>
						
							<td>
								<a href="calonpesertalihat.php?id_daftar='.$row['id_daftar'].'" title="Lihat Detail"><i class="fas fa-list"></i></a>
								<a href="cpe.php?id_daftar='.$row['id_daftar'].'" title="Rubah Data"><i class="fas fa-edit"></i></a>
								<a href="calonpeserta.php?aksi=delete&id_daftar='.$row['id_daftar'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><i class="fas fa-trash-alt"></i></a>
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