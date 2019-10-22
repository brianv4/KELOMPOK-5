<?php 
    include "koneksi.php";
    $cek_user=mysql_num_rows(mysql_query("SELECT * FROM tb_user WHERE usename='$_POST[username]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("Username Sudah Ada Yang Menggunakan");
              window.location="index.php";
              </script>';
              exit();
    }
    else {
        $password    =md5('$_POST[password]');
        mysql_query("INSERT INTO tb_user (username, nama, alamat, no_hp,  password)
        VALUES ('$_POST[userid]', '$_POST[nama]', '$_POST[alamat]', '$_POST[no_hp]', '$password')");
        
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="index.php";
              </script>';
              exit();
    }
?>