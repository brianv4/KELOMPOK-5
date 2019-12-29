<?php
include('koneksiuser.php');
include('userfunc.php');
include('includes/header.php');
include('includes/navbar.php');
error_reporting(0);
?>

	<div class="container">
		<div class="content">
			
			
            <br>
<h2>SERTIFIKASI KURSUS</h2>
<br>
            <label >Tambah Sertifikat :</label>
          
		   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">Tambah</button>
		   <br>
			
			<?php  $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
			
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>NO.</th>
					<th>NOMOR SERTIFIKAT</th>
					<th>NAMA PESERTA</th>
					<th>TEMPAT LAHIR</th>
					<th>TANGGAL LAHIR</th>
					<th>JENIS LEVEL</th>
					<th>NILAI</th>
					<th>NAMA USER</th>
					<th>TEMPAT</th>
					<th>TANGGAL</th>
                    <th>SETTING</th>
				</tr>
			</thead>
			<?php
			$no =1 ;

			//$num = $_GET['nomor_sertifikat'];
			$query = "SELECT sertifikat_kursus.nomor_sertifikat, calon_peserta.nama, calon_peserta.tempat_lahir, calon_peserta.tanggal_lahir, kursus.jenis_level, ujian_kursus.nilai, user.nama_user,
			sertifikat_kursus.tempat, sertifikat_kursus.tanggal FROM (sertifikat_kursus INNER JOIN ujian_kursus
			 ON sertifikat_kursus.id_ujiankursus=ujian_kursus.id_ujiankursus) INNER JOIN kursus 
			 ON ujian_kursus.id_kursus=kursus.id_kursus INNER JOIN calon_peserta ON kursus.nik=calon_peserta.nik INNER JOIN 
			 user ON sertifikat_kursus.id_user=user.id_user";
			$sql_rm = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
			while ($data = mysqli_fetch_assoc($sql_rm)){
			?>
			<tbody>
			
						<tr>
							<td><?=$no++?>.</td>
							<td><?=$data['nomor_sertifikat']?></td>
							<td><?=$data['nama']?></td>
							<td><?=$data['tempat_lahir']?></td>
							<td><?=$data['tanggal_lahir']?></td>
							<td><?=$data['jenis_level']?></td>
							<td><?=$data['nilai']?></td>
							<td><?=$data['nama_user']?></td>
							<td><?=$data['tempat']?></td>
							<td><?=$data['tanggal']?></td>
							<td>
								<a href="report1.php?nomor_sertifikat=<?=$data['nomor_sertifikat']?>" target="_BLANK">
								<button class="btn btn-light btn-xs"><i class="fa fa-print"></i></button>
								</a>
							</td>
						</tr>
						<?php
						}
						?>
			</tbody>	
			
			</table>
			</div>
		</div>
    </div>

	<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Sertifikat Kursus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="container">
		<div class="content">
		<?php

			if(isset($_POST['add'])){
               	$nomor      = $_POST['nomor_sertifikat'];
				$id 		= $_POST['id_ujiankursus'];
				$user		= $_POST['id_user'];
                $tmp		= $_POST['tempat'];
                $tgl		= $_POST['tanggal'];
				
				
				//tinggal masalah database NIK dijadikan BIG INT
				$cek = mysqli_query($koneksi, "SELECT sertifikat_kursus.id_ujiankursus, sertifikat_kursus.id_user, sertifikat_kursus.tempat, sertifikat_kursus.tanggal, FROM sertifikat_kursus INNER JOIN 
				ujian_kursus ON sertifikat_kursus.id_ujiankursus=ujian_kursus.id_ujiankursus INNER JOIN user ON sertifikat_kursus.id_user=user.id_user
                WHERE nomor_sertifikat='$nomor'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($koneksi, "INSERT INTO `sertifikat_kursus`(`nomor_sertifikat`,`id_ujiankursus`, `id_user`,`tempat`, `tanggal`) VALUES (null,'$id','$user','$tmp','$tgl')") or die(mysqli_error($koneksi));
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
					<label class="col-sm-3 control-label">ID UJIAN | ID KURSUS</label>
					<div class="col-sm-8">
						<select name="id_ujiankursus" class="form-control">
							<option value="">ID UJIAN | ID KURSUS</option>
							<?php 
							$jarak = ' | ';
							$sql_topik = mysqli_query($koneksi, "SELECT * FROM ujian_kursus") or die
								(mysqli_error($koneksi));
								while($tampilkan = mysqli_fetch_array($sql_topik)){
									echo '<center><option value="'.$tampilkan['id_ujiankursus'].'">'.$tampilkan['id_ujiankursus'].$jarak.$tampilkan['id_kursus'].'</option></center>';
								}
							?>

						</select>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">PENILAI</label>
					<div class="col-sm-8">
						<select name="id_user" class="form-control">
							<option value="">PENILAI</option>
							<?php 
							$sql_topik = mysqli_query($koneksi, "SELECT * FROM user") or die
								(mysqli_error($koneksi));
								while($tampilkan = mysqli_fetch_array($sql_topik)){
									echo '<center><option value="'.$tampilkan['id_user'].'">'.$tampilkan['nama_user'].'</option></center>';
								}
							?>

						</select>
					</div>
				</div>
            <div class="form-group">
					<label class="col-sm-3 control-label">TEMPAT</label>
					<div class="col-sm-8">
						<input type="text" name="tempat" pattern="[A-Za-z ]+" class="form-control" placeholder="tempat">
					</div>
            </div>
			<div class="form-group">
					<label class="col-sm-3 control-label">Tanggal</label>
					<div class="col-sm-8">
						<div class="input-group date" data-provide="datepicker">
							<input type="text" name="tanggal" class="form-control" placeholder="0000-00-00">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="TAMBAH">
						<a href="indexsertifikatkursus.php" class="btn btn-warning">KEMBALI</a>
					</div>
				</div>
			</form>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
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