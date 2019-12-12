<?php 
include "koneksi.php";
	//tinggal masalah database NIK dijadikan BIG INT
	$cek = mysqli_query($koneksi, "SELECT * FROM kursus where id_kursus='3'");
	$tampil = mysqli_fetch_array($cek);
?>
<p><?php echo $tampil['nik'] ;?></p>
<img src="img/<?php echo $tampil['file_ktp']  ?>">