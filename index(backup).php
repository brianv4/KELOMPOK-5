<?php
// fungsi untuk memulai session
session_start();
 
// variabel kosong untuk menyimpan pesan error
$form_error = '';
 
// cek apakah tombol sumit sudah di klik atau belum
if(isset($_POST['submit'])){
 
    // menyimpan data yang dikirim dari metode POST ke masing-masing variabel
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    // validasi login benar atau salah
    if($email == 'abc@dev.com' AND $password == '12345'){
 
        // jika login benar maka email akan disimpan ke session kemudian akan di redirect ke halaman profil
        //$_SESSION['email'] = $email;
        header('Location: index.html');
    }else{
 
        // jika login salah maka variabel form_error diisi value seperti dibawah
        // nilai variabel ini akan ditampilkan di halaman login jika salah
        $form_error = '<p>Password atau email yang kamu masukkan salah</p>';
    }
}
 
?>