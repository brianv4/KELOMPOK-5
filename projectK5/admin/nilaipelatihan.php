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
				$cek = mysqli_query($koneksi, "SELECT ujian_pelatihan.nilai, pelatihan.id_pelatihan FROM ujian_pelatihan INNER JOIN 
				pelatihan ON ujian_pelatihan.id_pelatihan=pelatihan.id_pelatihan WHERE id_ujianpelatihan='$id'");
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
<h2>PENILAIAN PELATIHAN</h2>
<br>
            <label >Tambah Nilai :</label>
          
		   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser"> Tambah</button>
		   <br>
			
			<?php  $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
			
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
					
					<th>ID UJIAN PELATIHAN</th>
					<th>ID PELATIHAN</th>
					<th>NAMA</th>
					<th>NILAI</th>
                    <th>SETTING</th>
				</tr>

				<?php
	// Load file koneksi.php
	include "koneksiuser.php";
	
	$query = "SELECT * FROM ujian_pelatihan INNER JOIN pelatihan ON ujian_pelatihan.id_pelatihan=pelatihan.id_pelatihan INNER JOIN 
	calon_peserta ON pelatihan.nik=calon_peserta.nik ORDER BY id_ujianpelatihan ASC"; // Query untuk menampilkan semua data 
	$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['id_ujianpelatihan']."</td>";
		echo "<td>".$data['id_pelatihan']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['nilai']."</td>";
		echo '
			<td>
					<a href="nilaipelatihan.php?aksi=delete&id_ujianpelatihan='.$data['id_ujianpelatihan'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><i class="fas fa-trash-alt"></i></a>
			</td>
			';
		
		echo "</tr>";
	}
	?>
	</table>

				
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
		<h2>Tambah Nilai Pelatihan</h2>
			<hr />
			
			<?php
			if(isset($_POST['add'])){
				$idup		= aman($_POST['id_ujianpelatihan']);
				$idp		= aman($_POST['id_pelatihan']);
				$nilai		= aman($_POST['nilai']);
				
				
				//tinggal masalah database NIK dijadikan BIG INT
				$cek = mysqli_query($koneksi, "SELECT ujian_pelatihan.nilai, pelatihan.id_pelatihan FROM ujian_pelatihan INNER JOIN 
				pelatihan ON ujian_pelatihan.id_pelatihan=pelatihan.id_pelatihan WHERE id_ujianpelatihan='$idup'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($koneksi, "INSERT INTO `ujian_pelatihan`(`id_pelatihan`, `nilai`) VALUES ('$idp','$nilai')") or die(mysqli_error($koneksi));
						if($insert){
							echo '<div class="alert alert-success">Pendaftaran berhasil dilakukan.</div>';
						}else{
							echo '<div class="alert alert-danger">Pendaftaran gagal dilakukan, silahkan coba lagi.</div>';
						}
					}else{
						echo '<div class="alert alert-danger">Konfirmasi Password tidak sesuai.</div>';
					}
				}
			
			?>
			
			<form class="form-horizontal" action="" method="post">
            <div class="form-group">
					<label class="col-sm-3 control-label">ID PELATIHAN</label>
					<div class="col-sm-8">
						<select name="id_pelatihan" class="form-control">
							<option value="">ID | NAMA</option>
							<?php
							$jarak =" | ";
							$sql_topik = mysqli_query($koneksi, "SELECT * FROM pelatihan inner join calon_peserta on pelatihan.nik=calon_peserta.nik order by id_pelatihan") or die
								(mysqli_error($koneksi));
								while($tampilkan = mysqli_fetch_array($sql_topik)){
									echo '<center><option value="'.$tampilkan['id_pelatihan'].'">'.$tampilkan['id_pelatihan'].$jarak.$tampilkan['nama'].'</option></center>';
								}
							?>

						</select>
					</div>
				</div>
            <div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-8">
						<input type="text" name="nilai" class="form-control" placeholder="nilai">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="TAMBAH">
					</div>
				</div>
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <?php
include('includes/scripts.php');
include('includes/footer.php');
?>