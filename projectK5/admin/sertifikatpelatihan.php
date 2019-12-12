<?php
include('koneksiuser.php');
include('userfunc.php');
include('includes/header.php');
include('includes/navbar.php');
?>

	<div class="container">
		<div class="content">
			
			
            <br>
<h2>SERTIFIKASI PELATIHAN</h2>
<br>
            <label >Tambah User :</label>
           <a href="nilaikursusadd.php" class="btn btn-primary ml-2">Tambah</a>
		   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">
Tambah Versi Modal</button>
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
			$query = "SELECT sertifikat_pelatihan.nomor_sertifikat, calon_peserta.nama, calon_peserta.tempat_lahir, calon_peserta.tanggal_lahir, 
            ujian_pelatihan.nilai, user.nama_user,
            sertifikat_pelatihan.tempat, sertifikat_pelatihan.tanggal FROM (sertifikat_pelatihan INNER JOIN ujian_pelatihan
             ON sertifikat_pelatihan.id_ujianpelatihan=ujian_pelatihan.id_ujianpelatihan) INNER JOIN pelatihan 
             ON ujian_pelatihan.id_ujianpelatihan=pelatihan.id_pelatihan INNER JOIN calon_peserta ON pelatihan.nik=calon_peserta.nik INNER JOIN 
             user ON sertifikat_pelatihan.id_user=user.id_user";
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
							<td><?=$data['nilai']?></td>
							<td><?=$data['nama_user']?></td>
							<td><?=$data['tempat']?></td>
							<td><?=$data['tanggal']?></td>
							<td>
								<a href="report2.php?nomor_sertifikat=<?=$data['nomor_sertifikat']?>" target="_BLANK">
								<button class="btn btn-light btn-xs"><i class="fa fa-print"></i></button>
								</a>
							</td>
						</tr>
						<?php
						}
						?>
			</tbody>	
						
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
        <h5 class="modal-title" id="exampleModalScrollableTitle">Sertifikat Pelatihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="container">
		<div class="content">
        <?php
			if(isset($_POST['add'])){
                $nomor    = aman($_POST['nomor_sertifikat']);
				$id 		= aman($_POST['id_ujianpelatihan']);
				$user		= aman($_POST['id_user']);
                $tmp		= aman($_POST['tempat']);
                $tgl		= aman($_POST['tanggal']);
				
				
				//tinggal masalah database NIK dijadikan BIG INT
				$cek = mysqli_query($koneksi, "SELECT sertifikat_pelatihan.id_ujianpelatihan, sertifikat_pelatihan.id_user, sertifikat_pelatihan.tempat, sertifikat_pelatihan.tanggal, FROM sertifikat_pelatihan INNER JOIN 
				ujian_pelatihan ON sertifikat_pelatihan.id_ujianpelatihan=ujian_pelatihan.id_ujianpelatihan INNER JOIN user ON sertifikat_kursus.id_user=user.id_user
                 WHERE nomor_sertifikat='$nomor'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($koneksi, "INSERT INTO `sertifikat_pelatihan`(`id_ujianpelatihan`, `id_user`,`tempat`, `tanggal`) VALUES ('$id','$user','$tmp','$tgl')") or die(mysqli_error($koneksi));
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
					<label class="col-sm-3 control-label">ID UJIAN PELATIHAN</label>
					<div class="col-sm-8">
						<select name="id_ujianpelatihan" class="form-control">
							<option value="">ID UJIAN ID PELATIHAN</option>
							<?php 
							$sql_topik = mysqli_query($koneksi, "SELECT * FROM ujian_pelatihan") or die
								(mysqli_error($koneksi));
								while($tampilkan = mysqli_fetch_array($sql_topik)){
									echo '<center><option value="'.$tampilkan['id_ujianpelatihan'].'">'.$tampilkan['id_ujianpelatihan'].$tampilkan['id_pelatihan'].'</option></center>';
								}
							?>

						</select>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">ID USER</label>
					<div class="col-sm-8">
						<select name="id_user" class="form-control">
							<option value="">ID USER</option>
							<?php 
							$sql_topik = mysqli_query($koneksi, "SELECT * FROM user") or die
								(mysqli_error($koneksi));
								while($tampilkan = mysqli_fetch_array($sql_topik)){
									echo '<center><option value="'.$tampilkan['id_user'].'">'.$tampilkan['id_user'].$tampilkan['nama_user'].'</option></center>';
								}
							?>

						</select>
					</div>
				</div>
            <div class="form-group">
					<label class="col-sm-3 control-label">TEMPAT</label>
					<div class="col-sm-8">
						<input type="text" name="tempat" class="form-control" placeholder="tempat">
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
						<a href="indexsertifikatpelatihan.php" class="btn btn-warning">KEMBALI</a>
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
      <a href="sertifikatpelatihan.php" class="btn btn-warning">KEMBALI</a>
      </div>
    </div>
  </div>
</div>
    <?php
include('includes/scripts.php');
include('includes/footer.php');
?>