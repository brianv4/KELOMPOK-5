<?php

$koneksi = mysqli_connect("localhost","root","","lkpssr");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

$NIK_KURSUS    = $_POST['NIK_KURSUS'];
$NAMA_PESERTA  = $_POST['NAMA_PESERTA'];
$TEMPAT_LAHIR  = $_POST['TEMPAT_LAHIR'];
$TANGGAL_LAHIR = $_POST['TANGGAL_LAHIR'];
$JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
$ALAMAT        = $_POST['ALAMAT'];
$KODEPOS       = $_POST['KODEPOS'];
$AGAMA         = $_POST['AGAMA'];
$EMAIL         = $_POST['EMAIL'];
$NOHP          = $_POST['NOHP'];
$PROVINSI      = $_POST['PROVINSI'];
$PENDIDIKAN    = $_POST['PENDIDIKAN'];
$JENIS_LEVEL   = $_POST['JENIS_LEVEL'];
//$FILE_KTP      = $_FILES['FILE_KTP']['NAME'];
//$FILE_KK       = $_FILES['FILE_KK']['NAME'];
//$FILE_IJAZAH   = $_FILES['FILE_IJAZAH']['NAME'];
$UNAMEK        = $_POST['UNAMEK'];
$PASSK         = $_POST['PASSK'];

$query = mysqli_query($koneksi, "INSERT INTO peserta_kursus VALUES ($NIK_KURSUS, '$NAMA_PESERTA', '$TEMPAT_LAHIR', $TANGGAL_LAHIR, '$JENIS_KELAMIN', '$ALAMAT ', '$KODEPOS', '$AGAMA', '$EMAIL', '$NOHP', '$PROVINSI ', '$PENDIDIKAN ', '$JENIS_LEVEL', null, null, null, '$UNAMEK', '$PASSK')");

if($query) {
    header('location:../index.php?aksi=tambah&status=true');
}
else {
    header('location:../index.php?aksi=tambah&status=false');
}

?>