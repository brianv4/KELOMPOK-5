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
              <li class="nav-item"><a class="nav-link" href="formdaftarkursus.php">Daftar</a></li>
              <li class="nav-item"><a class="nav-link" href="info.html">Info</a></li>
            </ul><a class="btn btn-primary btn-rounded my-0" href="https://templateflip.com/templates/material-landing" target="_blank">Login</a>
          </div>
        </div>
      </nav>    

<section class="py-5" id="team">
    <div class="container">
      <div class="wow fadeIn">
        <h2 class="h1 pt-5 pb-3 text-center">Pendaftaran Pelatihan LKP SRI REJEKI</h2>

<br>
<form action="aksi/aksi_tambahpelatihan.php" method="post" enctype="multipart/form-data">        
<table border="0">

<tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><input type="text" name="NAMA_PESERTAPELATIHAN"></td>
</tr>

<tr>
    <td>NIK</td>
    <td>:</td>
    <td><input type="text" name="NIK_PELATIHAN"></td>
</tr>

<tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><input type="text" name="TEMPAT_LAHIRPELATIHAN"></td>
</tr>

<tr>
<td><label>Tanggal Lahir</label></td>
            <td>
                <select name="tgl_lahir" class="form">
                <?php 
                   for($tanggal = 1; $tanggal <= 31; $tanggal++) {
                       if($tanggal < 10) {
                           echo '<option value="0'. $tanggal .'">0'. $tanggal .'</option>';
                       }
                       else {
                           echo '<option value="'. $tanggal .'">'. $tanggal .'</option>';
                       }
                    }
                ?>
                </select>
                <select name="bln_lahir" class="form">
                <?php 
                    for($bulan = 1; $bulan <= 12; $bulan++) {
                        if($bulan < 10) {
                            echo '<option value="0'. $bulan .'">0'. $bulan .'</option>';
                        }
                        else {  
                            echo '<option value="'. $bulan .'">'. $bulan .'</option>';
                        }
                    }
                ?>
                </select>
                <select name="thn_lahir" class="form">
                <?php 
                    for($tahun = date('Y'); $tahun >= 1980; $tahun--) {
                        echo '<option value="'. $tahun .'">'. $tahun .'</option>';
                    }
                ?>
                </select>
            </td>
</tr>

<!--<tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type="Date" name="TANGGAL_LAHIRPELATIHAN"></td>
</tr>
-->

<tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>
    <input type="radio" name="JENIS_KELAMINPELATIHAN" value="laki-laki">Laki-Laki
    <input type="radio" name="JENIS_KELAMINPELATIHAN" value="perempuan">Perempuan
  </td>
</tr>

<tr>
    <td>Alamat</td>
    <td>:</td>
    <td><textarea cols="22" rows="3" name="ALAMAT_PESERTAPELATIHAN" ></textarea></td>
</tr>

<tr>
    <td>Kode Pos</td>
    <td>:</td>
    <td><input type="text" name="KODEPOS_PELATIHAN"></td>
</tr>

<tr>
    <td>Agama</td>
    <td>:</td>
    <td><select name="AGAMA_PELATIHAN">
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
    <td><input type="email" name="EMAIL_PELATIHAN"></td>
</tr>

<tr>
    <td>No Hp</td>
    <td>:</td>
    <td><input type="number" name="NOHP_PELATIHAN"></td>
</tr>

<tr>
    <td>Provinsi</td>
    <td>:</td>
    <td><select name="PROVINSI_PELATIHAN">
      <option>Banten</option>
      <option>Jawa Timur</option>
      <option>Jawa Barat</option>
      <option>Jawa Tengah</option>
      </select></td>
</tr>

<tr>
    <td>Pendidikan</td>
    <td>:</td>
    <td><select name="PENDIDIKAN_PELATIHAN">
      <option>SD</option>
      <option>SMP</option>
      <option>SLTA</option>
      <option>SMK</option>
      <option>Sarjana</option>
      </select></td>
</tr>
</table>
<footer>
<!--kursus --> 

  <div class="form-group">
    <label>File KTP</label><br>
    <input type="file" class="form-control" name="foto">
    <button class="btn-primary" type="submit">Upload</button>
      </div>	
<br>
<table border="0">
<tr>
  <td>Username</td>
  <td>:</td>
  <td><input type="text" name="PASSWORD_KURSUS"></td>
</tr>

<tr>
  <td>Password</td>
  <td>:</td>
  <td><input type="text" name="PASSP"></td>
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