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
    if($email == 'kelompok5@getol.com' AND $password == 'kelompok5'){

        // jika login benar maka email akan disimpan ke session kemudian akan di redirect ke halaman profil
        $_SESSION['email'] = $email;
        header('Location: profile.php');
    }else{

        // jika login salah maka variabel form_error diisi value seperti dibawah
        // nilai variabel ini akan ditampilkan di halaman login jika salah
        $form_error = '<p>Password atau email yang kamu masukkan salah</p>';
    }
}

?>

<!DOCTYPE html>
<head>
	<title>Login Sederhana Tanpa Database</title>
	

</head>
<body>

	
	<div class="kotak_login">
		<h3 style="font-family:arial black;">
		<h3 style="text-align: center;"

		class="tulisan_login">Form login
		</h3>
    <form method="POST" action="index.php">
	<label>Username</label>
		Email : <input type="email" name="email" class="form_login"> <br>

	<label>Password</label>
		Password : <input type="password" name="password" class="form_login"> <br>
		
        <?php echo $form_error; ?>
        <input type="submit" name="submit" value="Login" class="tombol_login">
    </form>
</div>

</body>
</html>