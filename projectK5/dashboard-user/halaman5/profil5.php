<div class="halaman">
<h2>KURIKULUM 
PROGRAM PENDIDIKAN KECAKAPAN WIRAUSAHA
LKP SRI REJEKI 
Tahun 2019
</h2>
<h3>
<img src="../../file/assets/jadwal.png" height="1100px" width="700px;">
</h3>
    </tr>
</div>

 <!--Script CSS-->
 <link type="text/css" href='https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css' rel='stylesheet'>
  <link type="text/css" href='https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css' rel='stylesheet'>
  <link type="text/css" href='https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css' rel='stylesheet'>
<div class="halaman">
	<div class="form-group">

  <?php 
    include "koneksi.php";
?>
<h3>SILAHKAN UNDUH ATAU DOWNLOAD DIBAWAH INI UNTUK LEBIH LENGKAPNYA </h3>
<b>Daftar File</b>
<br />
<br />
<center><table border="1" cellpadding="3">
    <tr>
        <th width="30">No</th>
        <th width="180">Deskripsi</th>
        <th width="180">Nama File</th>
        <th width="80">Action</th>
    </tr>
        <?php
            $no=0;
            $query = mysqli_query($connect, "SELECT * FROM jadwal_pelatihan ORDER BY no_jadwal"); 
            while($data = mysqli_fetch_array($query)){
            $no++
        ?>
    <tr>
        <td><?=$no?></td>
        <td><?php echo $data['deskripsi']; ?></td>
        <td><?php echo $data['file']; ?></td>
        <td><a href="../halaman5/unduhh.php?filename=<?=$data['file']?>">Download</a></td>    
    </tr>
        <?php 
        } 
        ?>
</table></center>
<!--Script Javascript-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
<script>
 $(document).ready(function() {
  $('#example').DataTable( {
    dom: 'Bfrtip',
    buttons: [
    'colvis'
    ]
  } );
} );
</script>