<?php 
if(isset($_POST['daftar'])){
	include 'db.php';
	if(!is_numeric($_POST['telp'])){
		header("location:form-daftar.php?err1");
	}else{
		$daftar = mysqli_query($koneksi, "INSERT INTO peserta_kursus VALUES(
			NULL,
			'".$_POST['nama']."',
			'".$_POST['nik']."',
			'".$_POST['tmp_lhr']."',
			'".$_POST['tgl_lhr']."',
			'".$_POST['jk']."',
			'".$_POST['telp']."',
			'".$_POST['email']."',
			'".$_POST['username']."',
			'".$_POST['pass']."',
			'".$_POST['alamat']."',
			'".$_POST['kode_pos']."',
			'".$_POST['provinsi']."',
			'".$_POST['pendidikan']."',
			'".$_POST['jenis_level']."',
			'".$_POST['file_ktp']."')");
			
		if($daftar){
			echo 'Pendaftaran Berhasil';
		}else{
			echo 'Error'.mysqli_error($koneksi);
		}
	}
}
?>