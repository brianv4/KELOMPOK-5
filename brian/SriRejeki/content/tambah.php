
<h2 class="h1 pt-5 pb-3 text-center">Pendaftaran Kursus LKP SRI REJEKI</h2>

<br>
<form action="aksi/aksi_tambah.php" method="post">        
<table border="0">

<tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><input type="text" name="NAMA_PESERTA"></td>
</tr>

<tr>
    <td>NIK</td>
    <td>:</td>
    <td><input type="text" name="NIK_KURSUS"></td>
</tr>

<tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><input type="text" name="TEMPAT_LAHIR"></td>
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

<tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>
    <input type="radio" name="JENIS_KELAMIN" value="laki-laki">Laki-Laki
    <input type="radio" name="JENIS_KELAMIN" value="perempuan">Perempuan
</td>
</tr>

<tr>
    <td>Alamat</td>
    <td>:</td>
    <td><textarea cols="22" rows="3" name="ALAMAT"></textarea></td>
</tr>

<tr>
    <td>Kode Pos</td>
    <td>:</td>
    <td><input type="text" name="KODEPOS"></td>
</tr>

<tr>
    <td>Agama</td>
    <td>:</td>
    <td><select name="AGAMA">
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
    <td><input type="email" name="EMAIL"></td>
</tr>

<tr>
    <td>No Hp</td>
    <td>:</td>
    <td><input type="number"name="NOHP"></td>
</tr>

<tr>
    <td>Provinsi</td>
    <td>:</td>
    <td><select name="PROVINSI">
      <option>Banten</option>
      <option>Jawa Timur</option>
      <option>Jawa Barat</option>
      <option>Jawa Tengah</option>
      </select></td>
</tr>

<tr>
    <td>Pendidikan</td>
    <td>:</td>
    <td><select name="PENDIDIKAN">
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
    <td><select name="JENIS_LEVEL">
      <option>----</option>
      <option>Kursus Level 1</option>
      <option>Kursus Level 2</option>
      </select></td>
</tr>

</table>
<footer>
<!--kursus 
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
                
</form> -->
<br>
<table border="0">
<tr>
  <td>Username</td>
  <td>:</td>
  <td><input type="text" name="UNAMEK"></td>
</tr>

<tr>
  <td>Password</td>
  <td>:</td>
  <td><input type="text"name="PASSK"></td>
</tr>
</table>
<br>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>
  <input type="reset" name="reset" value="Batal"/></td>
</tr>
<input type="submit" name="submit" class="btn-primary" value="simpan"/>
</footer>
</form>
