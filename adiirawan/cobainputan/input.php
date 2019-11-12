<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>FORM INPUT DATA</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>www.malasngoding.com</h3>
	</div>
	
	<br/>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input_aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>					
			</tr>	
			<tr>
				<td>No Hp</td>
				<td><input type="text" name="nohp"></td>					
            </tr>	
            <tr>
				<td>Level</td>
				<td><input type="text" name="level"></td>					
            </tr>	
            <tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>					
            </tr>	
            <tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>