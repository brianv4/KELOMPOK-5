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
	<style type="text/css">
	body{
	font-family: sans-serif;
	background: #FFC0CB;

	h3{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}
 
.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
}
 
.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}

}
	</style>

	<link rel="stylesheet" type="text/css" href="style.css">

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