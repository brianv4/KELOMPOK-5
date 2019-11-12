<?php 
include 'db.php';
if(isset($_GET['id'])){
	$hapus = mysqli_query($koneksi, "DELETE FROM tb_daftarpelatihan WHERE id_daftar =  '".$_GET['id']."'");
	if($hapus){
		header('location:data-pendaftar-pelatihan.php');
	}else{
		echo 'gagal';
	}
}
?>