 <!--Script CSS-->
 <link type="text/css" href='https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css' rel='stylesheet'>
  <link type="text/css" href='https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css' rel='stylesheet'>
  <link type="text/css" href='https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css' rel='stylesheet'>
<div class="halaman">
	<h2>Halaman Jadwal</h2>
	<p>Ini adalah halaman Jadwal</p>
	<div class="form-group">

  <?php 
    include "conn.php";
?>
<h3>SILAHKAN UNDUH ATAU DOWNLOAD MATERI DIB BAWAH INI </h3>
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
            $query = mysqli_query($connect, "SELECT * FROM jadwal_kursus WHERE level='Level 2'"); 
            while($data = mysqli_fetch_array($query)){
            $no++
        ?>
    <tr>
        <td><?=$no?></td>
        <td><?php echo $data['deskripsi']; ?></td>
        <td><?php echo $data['file']; ?></td>
        <td><a href="../halaman/unduhh.php?filename=<?=$data['file']?>">Download</a></td>    
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