<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM peserta ORDER BY nik DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
    <?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
	
	<h4>Selamat Datang, <?php echo $_SESSION['username']; ?>! Anda telah login.</h4>
 
	<br/>
	<br/>
      
    <a href="formadmin.html">Add New Peserta</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Nama</th> <th>Jenis Kelamin</th> <th>Alamat</th> <th>Update</th>
    </tr>
    <?php  
    while($peserta_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$peserta_data['nama']."</td>";
        echo "<td>".$peserta_data['jenis_kelamin']."</td>"; 
        echo "<td>".$peserta_data['alamat']."</td>"; 

        echo "<td><a href='edit.php?id=$peserta_data[nik]'>Edit</a> | <a href='delete.php?id=$peserta_data[nik]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="logout.php">LOGOUT</a>
</body>
</html>