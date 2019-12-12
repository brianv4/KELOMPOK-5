<?php
include('koneksiuser.php');
include('userfunc.php');
include('includes/header.php');
include('includes/navbar.php');
?>

	<div class="container">
		<div class="content">
		<h2>PENILAIAN KURSUS</h2>
			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$id = $_GET['id_ujiankursus'];
				$cek = mysqli_query($koneksi, "SELECT * FROM ujian_kursus WHERE id_ujiankursus='$id'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM ujian_kursus WHERE id_ujiankursus='$id'");
					if($delete){
						echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-info">Data gagal dihapus.</div>';
					}
				}
			}
			?>
            <br>

<br>
            <label >Tambah Nilai :</label>
           
		   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">Tambah</button>
		   <br>
			
			<?php  $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
			
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
					
					<th>ID UJIAN KURSUS</th>
					<th>ID KURSUS</th>
					<th>NAMA</th>
					<th>JENIS LEVEL</th>
					<th>NILAI</th>
                    <th>SETTING</th>
				</tr>

				<?php
	// Load file koneksi.php
	include "koneksiuser.php";
	
	$query = "SELECT * FROM ujian_kursus INNER JOIN kursus ON ujian_kursus.id_kursus=kursus.id_kursus INNER JOIN 
	calon_peserta ON kursus.nik=calon_peserta.nik ORDER BY id_ujiankursus ASC"; // Query untuk menampilkan semua data 
	$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['id_ujiankursus']."</td>";
		echo "<td>".$data['id_kursus']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['jenis_level']."</td>";
		echo "<td>".$data['nilai']."</td>";
		echo '
			<td>
					<a href="nilaikursuslihat.php?id_ujiankursus='.$data['id_ujiankursus'].'" title="Lihat Detail"><i class="fas fa-list"></i></a>
					<a href="nilaikursusedit.php?id_ujiankursus='.$data['id_ujiankursus'].'" title="Rubah Data"><i class="fas fa-edit"></i></a>
					<a href="nilaikursus.php?aksi=delete&id_ujiankursus='.$data['id_ujiankursus'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><i class="fas fa-trash-alt"></i></a>
			</td>
			';
		
		//echo "<td><a href='cetakkursus.php?nomor_sertifikat=".$data['nomor_sertifikat']."'>Cetak</a></td>";
		//echo "<td><a href='proses_hapus.php?nis=".$data['nis']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>

				<?php
				
                ?>
                
			</table>
			</div>
		</div>
    </div>

	<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Nilai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="container">
		<div class="content">
		
			<hr />
			
			<?php
			if(isset($_POST['add'])){
				$id			= aman($_POST['id_ujiankursus']);
				$idk		= aman($_POST['id_kursus']);
				$nilai		= aman($_POST['nilai']);
				
				
				//tinggal masalah database NIK dijadikan BIG INT
				$cek = mysqli_query($koneksi, "SELECT ujian_kursus.nilai, kursus.id_kursus FROM ujian_kursus INNER JOIN 
				kursus ON ujian_kursus.id_kursus=kursus.id_kursus WHERE id_ujiankursus='$id'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($koneksi, "INSERT INTO `ujian_kursus`(`id_kursus`, `nilai`) VALUES ('$idk','$nilai')") or die(mysqli_error($koneksi));
						if($insert){
							echo '<div class="alert alert-success">Pendaftaran berhasil dilakukan.</div>';
						}else{
							echo '<div class="alert alert-danger">Pendaftaran gagal dilakukan, silahkan coba lagi.</div>';
						}
				}
				}
			
			?>
			
			<form class="form-horizontal" action="" method="post">
            <div class="form-group">
					<label class="col-sm-3 control-label">ID KURSUS</label>
					<div class="col-sm-5">
						<select name="id_kursus" class="form-control">
							<option value="">ID NIK</option>
							<?php 
							$sql_topik = mysqli_query($koneksi, "SELECT * FROM kursus") or die
								(mysqli_error($koneksi));
								while($tampilkan = mysqli_fetch_array($sql_topik)){
									echo '<center><option value="'.$tampilkan['id_kursus'].'">'.$tampilkan['id_kursus'].$tampilkan['nik'].'</option></center>';
								}
							?>

						</select>
					</div>
				</div>
            <div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-5">
						<input type="text" name="nilai" class="form-control" placeholder="nilai">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="TAMBAH">
						<a href="nilaikursus.php" class="btn btn-warning">KEMBALI</a>
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