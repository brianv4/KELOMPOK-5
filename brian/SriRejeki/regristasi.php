<?php 
    include "koneksi.php";
    $cek_user=mysql_num_rows(mysql_query("SELECT * FROM peserta_kursus WHERE NIK_KURSUS='$_POST[NIK_KURSUS]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("Username Sudah Ada Yang Menggunakan");
              window.location="formdaftarkursus.php";
              </script>';
              exit();
    }
    else {
        $password    =md5('$_POST[PASSK]');
        mysql_query("INSERT INTO peserta_kursus (NIK_KURSUS, NAMA_PESERTA, TEMPAT_LAHIR, TANGGAL_LAHIR, JENIS_KELAMIN, 
        ALAMAT, KODEPOS, AGAMA, EMAIL, NOHP, PROVINSI, PENDIDIKAN, 
        JENIS_LEVEL, FILE_KTP, FILE_KK, FILE_IJAZAH, UNAMEK, password)
        VALUES ('$_POST[NIK_KURSUS]', '$_POST[NAMA_PESERTA]', '$_POST[TEMPAT_LAHIR]', '$_POST[TANGGAL_LAHIR]', '$_POST[JENIS_KELAMIN]', '$_POST[ALAMAT]', 
        '$_POST[KODEPOS]', '$_POST[AGAMA]', '$_POST[EMAIL]', '$_POST[NOHP]', '$_POST[PROVINSI]', '$_POST[PENDIDIKAN]', 
        '$_POST[JENIS_LEVEL]', '$_POST[FILE_KTP]', '$_POST[FILE_KK]', '$_POST[FILE_IJAZAH]', '$_POST[UNAMEK]', '$password')");
        
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="formdaftarkursus.php";
              </script>';
              exit();
    }
?>