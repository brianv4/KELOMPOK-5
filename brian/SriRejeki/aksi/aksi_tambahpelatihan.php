<?php

$koneksi = mysqli_connect("localhost","root","","lkpssr");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

$NIK_PELATIHAN           = $_POST['NIK_PELATIHAN'];
$NAMA_PESERTAPELATIHAN   = $_POST['NAMA_PESERTAPELATIHAN'];
$TEMPAT_LAHIRPELATIHAN   = $_POST['TEMPAT_LAHIRPELATIHAN'];
$TANGGAL_LAHIRPELATIHAN  = $_POST['thn_lahir'] . '-' . $_POST['bln_lahir'] . '-' . $_POST['tgl_lahir'];
//$TANGGAL_LAHIRPELATIHAN  = date('Y-m-d',strtotime($TANGGAL_LAHIRPELATIHAN));
$JENIS_KELAMINPELATIHAN  = $_POST['JENIS_KELAMINPELATIHAN'];
$ALAMAT_PESERTAPELATIHAN = $_POST['ALAMAT_PESERTAPELATIHAN'];
$KODEPOS_PELATIHAN       = $_POST['KODEPOS_PELATIHAN'];
$AGAMA_PELATIHAN         = $_POST['AGAMA_PELATIHAN'];
$EMAIL_PELATIHAN         = $_POST['EMAIL_PELATIHAN'];
$NOHP_PELATIHAN          = $_POST['NOHP_PELATIHAN'];
$PROVINSI_PELATIHAN      = $_POST['PROVINSI_PELATIHAN'];
$PENDIDIKAN_PELATIHAN    = $_POST['PENDIDIKAN_PELATIHAN'];
$FILE_KTPKURSUS          = $_FILES['FILE_KTPKURSUS']['NAME'];
$tmp                     = $_FILES['foto']['tmp_name'];
//$FILE_KK       = $_FILES['FILE_KK']['NAME'];
//$FILE_IJAZAH   = $_FILES['FILE_IJAZAH']['NAME'];
$PASSWORDKURSUS          = $_POST['PASSWORDKURSUS'];
$PASSP                   = $_POST['PASSP'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;

// Set path folder tempat menyimpan fotonya
$path = "aksi/images/".$fotobaru;
    
// Proses upload
$query = mysqli_query($koneksi, "INSERT INTO peserta_pelat VALUES ($NIK_PELATIHAN, '$NAMA_PESERTAPELATIHAN', '$TEMPAT_LAHIRPELATIHAN', $TANGGAL_LAHIRPELATIHAN, '$JENIS_KELAMINPELATIHAN', '$ALAMAT_PESERTAPELATIHAN ', '$KODEPOS_PELATIHAN', '$AGAMA_PELATIHAN', '$EMAIL_PELATIHAN', '$NOHP_PELATIHAN', '$PROVINSI_PELATIHAN ', '$PENDIDIKAN_PELATIHAN ', '$fotobaru', null, null, '$PASSWORD_KURSUS', '$PASSP')");

if($query) {
    header('location:../index.php?aksi=tambah&status=true');
}
else {
    header('location:../index.php?aksi=tambah&status=false');
}
?>