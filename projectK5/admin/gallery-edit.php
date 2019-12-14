<?php
include('includes/header.php');
include('includes/navbar.php');
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('lkpsrirejeki');
if($_POST){ 

    $update = "update gallery set deskripsi='".$_POST['deskripsi']."' ";
    if($_FILES['file']['size'] > 0 && $_FILES['file']['error'] == 0){ //update gambar hanya jika user memilih file baru
        $move = move_uploaded_file($_FILES['file']['tmp_name'], "../img/gallery/".$_FILES['file']['name']);
        if($move){
            $update .= ", nama_file='".$_FILES['file']['name']."'";
        }
    }
    $update .= " where id='".$_POST['id']."'";
    mysql_query($update); //update data ke database
    echo '<div class="alert alert-success">Data berhasil disimpan.</div>';
    exit;
}
?>
<html>
<head>
    <title>Edit Picture</title>
</head>
<body>
<div class="container">
	<div class="content">
    <form name="form1" action="" method="post" enctype="multipart/form-data">
    <table border="1" width="100%">
    <tr>
            <th>Foto</th>
            <th>Upload File</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
        <?php
        $sql = "select * from gallery where id='".intval($_GET['id'])."'";
        $data = mysql_fetch_array(mysql_query($sql));
        ?>
        <tr>
          <td>
          <center><img src="../img/gallery/<?php echo $data['nama_file'];?>" alt="" width="200"/><br/></center>
          
                
          </td>
          <td>
            <center><input type="file" name="file" id="file"/><br/></center>
          </td>
          <td>
          <textarea style="resize:none;width:520px;height:150px;" name="deskripsi" id="deskripsi"><?php echo $data['deskripsi'];?></textarea><br/>
          </td>
          <td>
          <center><input type="submit" name="save" value="Update"/></center>
          <input type="hidden" name="id" value="<?php echo $data['id'];?>"/>
        
          </td>
        </tr>
        
        </table>
        <br>
    </form>
    <br>
    <a href="gallery.php" class="btn btn-warning">KEMBALI</a>
    </div>
</div>
</body>
</html>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>