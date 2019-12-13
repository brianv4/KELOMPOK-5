<?php
include('includes/header.php');
include('includes/navbar.php');
include('koneksiuser.php');
?>
<script type="text/javascript" src="chartjs/Chart.js"></script>
<thead border="1">
		<tr>
			<th>No</th>
			<th>Nama Mahasiswa</th>
			<th>NIM</th>
            <th>JK</th>
			<th>Fakultas</th>
		</tr>
	</thead>
	<tbody>
<?php 
			$no = 1;
			$data = mysqli_query($koneksi,"select * from calon_peserta");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nik']; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td align="center" bgcolor="pink"><?php echo $d['jenis_kelamin']; ?></td>
					<td><?php echo $d['provinsi']; ?></td>
				</tr>
				<?php 
			}
?>
</tbody>
<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["laki-laki", "perempuan"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_laki = mysqli_query($koneksi,"select * from calon_peserta where jenis_kelamin='L'");
					echo mysqli_num_rows($jumlah_laki);
					?>, 
					<?php 
					$jumlah_perempuan = mysqli_query($koneksi,"select * from calon_peserta where jenis_kelamin='P'");
					echo mysqli_num_rows($jumlah_perempuan);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>