<!DOCTYPE html>
<html class="full-height" lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sri Rejeki</title>
    <meta name="description" content="Material design landing page template built by TemplateFlip.com"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">

  </head>
  <body>
      <header>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
        <div class="container"><a class="navbar-brand" href="#"><strong>Sri Rejeki</strong></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
             <li class="nav-item"><a class="nav-link active" href="beranda.html">Beranda</a></li>
              <li class="nav-item"><a class="nav-link" href="profil.html">Profil</a></li>
              <li class="nav-item"><a class="nav-link" href="galeri.html">Galeri</a></li>
              <li class="nav-item"><a class="nav-link" href="formdaftar.html">Daftar</a></li>
              <li class="nav-item"><a class="nav-link" href="info.html">Info</a></li>
            </ul><a class="btn btn-primary btn-rounded my-0" href="https://templateflip.com/templates/material-landing" target="_blank">Login</a>
          </div>
        </div>
      </nav>    

<section class="py-5" id="team">
    <div class="container">
      <div class="wow fadeIn">
        <h2 class="h1 pt-5 pb-3 text-center">Pendaftaran Kursus LKP SRI REJEKI</h2>

<br>
<form action="registrasi.php" method="post" name="form1">      
<table border="0">

<tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><input type="text"></td>
</tr>

<tr>
    <td>NIK</td>
    <td>:</td>
    <td><input type="text"></td>
</tr>

<tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><input type="text"></td>
</tr>

<tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type="Date"></td>
</tr>

<tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input type="radio"/>Laki-Laki
    <input type="radio"/>Perempuan</td>
</tr>

<tr>
    <td>Alamat</td>
    <td>:</td>
    <td><textarea cols="22" rows="3" ></textarea></td>
</tr>

<tr>
    <td>Kode Pos</td>
    <td>:</td>
    <td><input type="text"></td>
</tr>

<tr>
    <td>Agama</td>
    <td>:</td>
    <td><select>
      <option>PILIH AGAMA</option>
      <option>Islam</option>
      <option>Kristen</option>
      <option>Satanis</option>
      <option>Hindu</option>
      <option>Budha</option>
      </select></td>
</tr>

<tr>
    <td>E-mail</td>
    <td>:</td>
    <td><input type="email"></td>
</tr>

<tr>
    <td>No Hp</td>
    <td>:</td>
    <td><input type="number"></td>
</tr>

<tr>
    <td>Provinsi</td>
    <td>:</td>
    <td><select>
      <option>Banten</option>
      <option>Jawa Timur</option>
      <option>Jawa Barat</option>
      <option>Jawa Tengah</option>
      </select></td>
</tr>

<tr>
    <td>Pendidikan</td>
    <td>:</td>
    <td><select>
      <option>SD</option>
      <option>SMP</option>
      <option>SLTA</option>
      <option>SMK</option>
      <option>Sarjana</option>
      </select></td>
</tr>

<tr>
    <td>Jenis</td>
    <td>:</td>
    <td><select>
      <option>----</option>
      <option>Kursus Level 1</option>
      <option>Kursus Level 2</option>
      <option>Kursus Level 3</option> 
      </select></td>
</tr>

</table>
<footer>
<!--kursus --> 
<form action="prosesupload.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label>File KTP</label><br>
    <input type="file" class="form-control" name="foto">
    <br>
    <button class="btn-primary" type="submit">Upload</button>
  </div>	

  <form action="prosesupload.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label>File KK</label><br>
      <input type="file" class="form-control" name="foto">
      <br>
      <button class="btn-primary" type="submit">Upload</button>
    </div>	

    <form action="prosesupload.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label>File Ijazah</label><br>
        <input type="file" class="form-control" name="foto">
        <br>
        <button class="btn-primary" type="submit">Upload</button>
      </div>	
</form>
<br>
<table border="0">
<tr>
  <td>Username</td>
  <td>:</td>
  <td><input type="text"></td>
</tr>

<tr>
  <td>Password</td>
  <td>:</td>
  <td><input type="text"></td>
</tr>
</table>
<br>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><input type="submit" name="submit" value="simpan"/>
  <input type="reset" name="reset" value="Batal"/></td>
</tr>

</footer>
</form>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script>new WOW().init();</script>
</body>
</html>  