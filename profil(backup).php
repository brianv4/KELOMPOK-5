<?php
session_start();
 
// check apakah session email sudah ada atau belum.
// jika belum maka akan diredirect ke halaman index (login)
if( empty($_SESSION['email']) ){
    header('Location: profil.php');
}
 
?>
 
<!DOCTYPE html>
<head>
    <title>Profil</title>
</head>
<body>
    <!-- Menampilkan isi session email -->
    <center><h3> Hallo Selamat Datang <?php echo $_SESSION['email']; ?> </h3></center>
    <a href="logout.php">Keluar</a>
</body>
</html>