<h3>Tambah Anggota</h3>
<form action="aksi/aksi_tambah.php" method="POST">
<div class="content">
    <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td width="20%"><label for="nama">Nama Lengkap</label></td>
            <td colspan="3"><input name="nama_lengkap" id="nama_lengkap" type="text" class="form"></td>
        </tr>
        <tr>
            <td><label for="tempat_lahir">Tempat Lahir</label></td>
            <td><input name="tempat_lahir" id="tempat_lahir" type="text" class="form"></td>
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
            <td valign="top"><label for="alamat">Alamat</label></td>
            <td valign="top" colspan="2">
                <textarea name="alamat" id="alamat" class="form" cols="50" rows="8"></textarea>
            </td>
            <td valign="top">
                <div>
                    <label for="kota">Kota</label>
                    <input type="text" name="kota" id="kota" class="form">
                </div>
                <div>
                    <label for="negara">Negara</label>
                    <input type="text" name="negara" id="negara" class="form">
                </div>
                <div>
                    <label for="kode_pos">Kode Pos</label>
                    <input type="number" name="kode_pos" id="kode_pos" class="form">
                </div>
            </td>
        </tr>
        <tr>
            <td><label for="hp">No. HP</label></td>
            <td colspan="3"><input name="no_hp" id="no_hp" type="number" class="form"></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td colspan="3"><input name="email" id="email" type="text" class="form"></td>
        </tr>
        <tr>
            <td><label for="tinggi_badan">Tinggi Badan</label></td>
            <td colspan="3"><input name="tinggi_badan" id="tinggi_badan" type="number" class="form"></td>
        </tr>
        <tr>
            <td><label for="berat_badan">Berat Badan</label></td>
            <td colspan="3"><input name="berat_badan" id="berat_badan" type="number" class="form"></td>
        </tr>
    </table>
</div>
<input type="submit" class="btn" value="Simpan"> | <a href="index.php" class="btn">Kembali</a>
</form>