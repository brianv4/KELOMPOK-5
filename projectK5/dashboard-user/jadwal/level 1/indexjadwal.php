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
					<th width = "1%">No Jadwal</th>
					<th width = "1%">Hari</th>
					<th width = "1%">Jam</th>
					<th width = "1%">Tanggal</th>
					<th width = "1%">Id Topik</th>
					<th width = "1%">Topik</th>
					<th width = "1%">Id Materi</th>
					<th width = "1%">Materi Kursus</th>
					
				</tr>
				<?php
				$no = 1;
                $sql = mysqli_query($koneksi, "SELECT jadwal_kursus.no_jadwal, jadwal_kursus.hari, jadwal_kursus.jam, 
                jadwal_kursus.tanggal, jadwal_kursus.id_topik, topik_kursus.topik, jadwal_kursus.id_materi,
                 materi_kursus.materi_kursus FROM (jadwal_kursus INNER JOIN topik_kursus 
                 ON jadwal_kursus.id_topik=topik_kursus.id_topik) INNER JOIN materi_kursus 
                 ON jadwal_kursus.id_materi=materi_kursus.id_materikursus WHERE topik_kursus.jenis_level='Level 1'
                  ORDER BY no_jadwal ASC");
                   while ($data = mysqli_fetch_array($sql)){
                ?>
				<tr align=center> 
                    <td valign ="top"><?= $no?> </td>
                    <td valign ="top"><?= $data ['no_jadwal']?> </td>
                    <td valign ="top"><?= $data ['hari']?> </td>
                    <td valign ="top"><?= $data ['jam']?> </td>
                    <td valign ="top"><?= $data ['tanggal']?> </td>
                    <td valign ="top"><?= $data ['id_topik']?> </td>
                    <td valign ="top"><?= $data ['topik']?> </td>
                    <td valign ="top"><?= $data ['id_materi']?> </td>
                    <td valign ="top"><?= $data ['materi_kursus']?> </td>
						</tr>
            <?php $no++; }  ?>
            <tr>
                <td colspan="6">&nbsp;</td>
            </tr>              
	        </table>
			</div>
		</div>
	</div>
   