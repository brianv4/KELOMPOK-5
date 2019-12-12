<?php
include('koneksiuser.php');
include('userfunc.php');
include('includes/header.php');
include('includes/navbar.php');
?>

	<div class="container">
		<div class="content">
			
			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$id = $_GET['id_ujianpelatihan'];
				$cek = mysqli_query($koneksi, "SELECT * FROM ujian_pelatihan WHERE id_ujianpelatihan='$id'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM ujian_pelatihan WHERE id_ujianpelatihan='$id'");
					if($delete){
						echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-info">Data gagal dihapus.</div>';
					}
				}
			}
			?>
            <br>
<h2>MANAGEMENT USER</h2>
<br>
            <label >Tambah NILAI :</label>
           <a href="nilaipelatihanadd.php" class="btn btn-primary ml-2">Tambah</a>
		   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">
Tambah Versi Modal</button>
<br>
			
			<?php  $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
			
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
					
					<th>ID UJIAN PELATIHAN</th>
					<th>ID PELATIHAN</th>
					<th>NILAI</th>
                    <th>SETTING</th>
				</tr>

				<?php
	// Load file koneksi.php
	include "koneksisertifikat.php";
	
	$query = "SELECT * FROM ujian_pelatihan ORDER BY id_ujianpelatihan ASC"; // Query untuk menampilkan semua data 
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['id_ujianpelatihan']."</td>";
		echo "<td>".$data['id_pelatihan']."</td>";
		echo "<td>".$data['nilai']."</td>";
		echo '
			<td>
					<a href="nilaipelatihanlihat.php?id_ujianpelatihan='.$data['id_ujianpelatihan'].'" title="Lihat Detail"><i class="fas fa-list"></i></a>
					<a href="nilaipelatihanedit.php?id_ujianpelatihan='.$data['id_ujianpelatihan'].'" title="Rubah Data"><i class="fas fa-edit"></i></a>
					<a href="nilaipelatihan.php?aksi=delete&id_ujianpelatihan='.$data['id_ujianpelatihan'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><i class="fas fa-trash-alt"></i></a>
			</td>
			';
		
		//echo "<td><a href='cetakkursus.php?nomor_sertifikat=".$data['nomor_sertifikat']."'>Cetak</a></td>";
		//echo "<td><a href='proses_hapus.php?nis=".$data['nis']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>

				<?php
				/*if($urut){
					$sql = mysqli_query($koneksi, "SELECT * FROM ujian_pelatihan WHERE status='$urut' ORDER BY id_ujianpelatihan ASC");
				}else{
					$sql = mysqli_query($koneksi, "SELECT * FROM ujian_pelatihan ORDER BY id_ujianpelatihan ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['id_ujianpelatihan'].'</td>
							<td>'.$row['nik'].'</td>
							<td>'.$row['nilai'].'</td>
							<td>
								<a href="nilaipelatihanlihat.php?id_ujianpelatihan='.$row['id_ujianpelatihan'].'" title="Lihat Detail"><i class="fas fa-list"></i></a>
								<a href="nilaipelatihanedit.php?id_ujianpelatihan='.$row['id_ujianpelatihan'].'" title="Rubah Data"><i class="fas fa-edit"></i></a>
								<a href="nilaipelatihan.php?aksi=delete&id_ujianpelatihan='.$row['id_ujianpelatihan'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						';
						$no++;
					}
				}*/
                ?>
                <!--
                <a href="avatar.php?id_user='.$row['id_user'].'" title="Foto Profile"><i class="fas fa-camera-retro"></i></a>
				<a href="userpassword.php?id_user='.$row['id_user'].'" title="Ganti Password"><i class="fas fa-key"></i></a> -->
			</table>
			</div>
		</div>
    </div>

	<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="container">
		<div class="content">
			<h2>Tambah Data</h2>
			<hr />
			
			<?php
			if(isset($_POST['add'])){
                
				$idp		= aman($_POST['id_pelatihan']);
				$nilai		= aman($_POST['nilai']);
				
			
				//tinggal masalah database NIK dijadikan BIG INT
				
			
					
						$insert = mysqli_query($koneksi, "INSERT INTO `ujian_pelatihan`(`id_ujianpelatihan`, `id_pelatihan`, `nilai`) VALUES ('','$idp','$nilai')") or die(mysqli_error($koneksi));
						if($insert){
							echo '<div class="alert alert-success">Pendaftaran berhasil dilakukan.</div>';
                        }
                        else
                        {
							echo '<div class="alert alert-danger">Pendaftaran gagal dilakukan, silahkan coba lagi.</div>';
						}
                   
                }
			?>
			
			<form class="form-horizontal" action="" method="post">
            <div class="form-group">
					<label class="col-sm-3 control-label">ID NIK</label>
					<div class="col-sm-2">
						<select name="id_pelatihan" class="form-control">
							<option value="">nik</option>
							<?php 
							$sql_topik = mysqli_query($koneksi, "SELECT * FROM pelatihan") or die
								(mysqli_error($koneksi));
								while($nik = mysqli_fetch_array($sql_nik)){
									echo '<center><option value="'.$idp['id_pelatihan'].'"></option></center>';
								}
							?>

						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-9">
						<input type="text" name="nilai" class="form-control" placeholder="nilai" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="TAMBAH">
						<a href="nilaipelatihan.php" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <?php
include('includes/scripts.php');
include('includes/footer.php');
?>