<?php 
    include "koneksi.php";
?>
<h3>Jadwal Pelatihan</h3>
<b>Daftar File</b>
<br />
<br />
<table border="1" cellpadding="3">
    <tr>
        <th width="30">No</th>
        <th width="180">Nama File</th>
        <th width="80">Action</th>
    </tr>
        <?php
            $no=0;
            $query = mysql_query("SELECT * FROM tb_file ORDER BY id"); 
            while($data = mysql_fetch_array($query)){
            $no++
        ?>
    <tr>
        <td><?=$no?></td>
        <td><?php echo $data['nama_file']; ?></td>
        <td><a href="download.php?filename=<?=$data['nama_file']?>">Download</a></td>    
    </tr>
        <?php 
        } 
        ?>
</table>