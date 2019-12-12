<?php
include("koneksiuser.php");
include("userfunc.php");
include("includes/header.php");
include("includes/navbar.php");
?>
<?php
	//error_reporting(0)
	?>
	<html>
<head>
	<title>Input Pelatihan</title>
</head>
<body>
	<h1>Tambah Data</h1>
	<form method="post" action="simpan_pelatihan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>ID</td>
		<td><input type="text" name="id_topik"></td>
	</tr>
	<tr>
		<td>Topik</td>
		<td><input type="text" name="topik"></td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td><input type="text" name="deskripsi"></td>
	</tr>
	<tr>
		<td>TANGGAL MULAI</td>
		<td><input type="text" name="tgl_mulai"></td>
	</tr>
	<tr>
		<td>TANGGAL AKHIR</td>
		<td><input type="text" name="tgl_akhir"></td>
	</tr>
	<tr>
		<td>STATUS</td>
		<td>
		<input type="radio" name="status" value="Aktif"> Aktif
		<input type="radio" name="status" value="Tidak Aktif"> Tidak Aktif
		</td>
	</tr>
	<tr>
		<td>DOKUMEN</td>
		<td><input type="file" name="foto"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
    </script>
    <?php
include("includes/scripts.php");
include("includes/footer.php");
    ?>