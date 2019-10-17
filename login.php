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
    if($email == 'kelompok5@gmail.com' AND $password == 'kelompok5'){
 
        // jika login benar maka email akan disimpan ke session kemudian akan di redirect ke halaman profil
        $_SESSION['email'] = $email;
        header('Location: profil.php');
    }else{
 
        // jika login salah maka variabel form_error diisi value seperti dibawah
        // nilai variabel ini akan ditampilkan di halaman login jika salah
        $form_error = '<p>Password atau email yang kamu masukkan salah</p>';
    }
}
 
?>
 
<!DOCTYPE html>
<head>
    <title>Login Kelompok 5</title>
</head>
<body>
 
    <center><h1>Silakan Login</h1></center>
 
    <center>
        <form method="POST" action="login.php">
            Email <br><input type="email" name="email"><br>
            <br>
            Password <br> <input type="password" name="password"><br>
            <?php echo $form_error; ?>
            <br>    
            <input type="submit" name="submit" value="Login">
        </form>
    </center>
    
</body>
</html>