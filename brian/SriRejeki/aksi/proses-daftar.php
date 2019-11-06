<?php 

if(isset($_POST['submit'])){
	include 'koneksi.php';
	if(!is_numeric($_POST['telp'])){
		header("location:formdaftarkursus.php?err1");
	}else{
		$submit = mysqli_query($koneksi, "INSERT INTO peserta_kursus VALUES(
			NULL,
			'".$_POST['NIK_KURSUS']."',
			'".$_POST['NAMA_PESERTA']."',
			'".$_POST['TEMPAT_LAHIR']."',
			'".$_POST['TANGGAL_LAHIR']."',
			'".$_POST['JENIS_KELAMIN']."',
			'".$_POST['ALAMAT']."',
			'".$_POST['KODEPOS']."',
			'".$_POST['AGAMA']."',
			'".$_POST['EMAIL']."',
			'".$_POST['NOHP']."',
			'".$_POST['PROVINSI']."',
			'".$_POST['PENDIDIKAN']."',
			'".$_POST['JENIS_LEVEL']."')");
		if($daftar){
			echo 'oke';
		}else{
			echo 'hmmmm'.mysqli_error($koneksi);
		}
	}
}
?>

