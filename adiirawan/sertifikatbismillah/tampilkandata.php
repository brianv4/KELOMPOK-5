<?php
include("koneksi.php");
?>
<div class="container">
		<div class="content">
			<h2><center>Jadwal Kursus Level 1</center></h2>
			<hr />
			
			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$id = $_GET['id_topik'];
				$cek = mysqli_query($koneksi, "SELECT * FROM topik_pelatihan WHERE id_topik='$id'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM topik_pelatihan WHERE id_topik='$id'");
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
					<th width = "1%">NO</th>
					<th width = "1%">No Sertifikat</th>
					<th width = "1%">Nama</th>
                    <th width = "1%">Tempat Lahir</th>
					<th width = "1%">Tanggal Lahir</th>
                    <th width = "1%">Nilai</th>
					<th width = "1%">User</th>
					<th width = "1%">Tempat</th>
					<th width = "1%">Tanggal</th>
					<th width = "1%">Setting</th>
					
					
				</tr>
				<?php
				$no = 1;
                $sql = mysqli_query($koneksi, "SELECT * sertifikat_kursus.nomor_sertifikat, calon_peserta.nama, 
                ujian_kursus.nilai,
                user.nama, sertifikat_kursus.tempat, sertifikat_kursus.tanggal 
                FROM sertifikat_kursus
                inner join ujian_kursus on ujian_kursus.id_ujiankursus=sertifikat_kursus.id_ujiankursus
                inner join user on user.id_user=sertifikat_kursus.id_user
                inner join kursus on ujian_kursus.id_kursus=kursus.id_kursus
                inner join calon_peserta on kursus.nik=calon_peserta.nik");
                  while ($data = mysqli_fetch_array($sql)){
                
                ?>
				<tr align=center> 
                    <td valign ="top"><?= $no?> </td>
                    <td valign ="top"><?= $data ['nomor_sertifikat']?> </td>
                    <td valign ="top"><?= $data ['nama']?> </td>
                    <td valign ="top"><?= $data ['tempat_lahir']?> </td>
                    <td valign ="top"><?= $data ['tanggal_lahir']?> </td>
                    <td valign ="top"><?= $data ['nilai']?> </td>
                    <td valign ="top"><?= $data ['nama_user']?> </td>
                    <td valign ="top"><?= $data ['tempat']?> </td>
                    <td valign ="top"><?= $data ['tanggal']?> </td>
                    
						</tr>
            <?php $no++; }  ?>
            <tr>
                <td colspan="6">&nbsp;</td>
            </tr>              
	        </table>
			</div>
		</div>
	</div>
   