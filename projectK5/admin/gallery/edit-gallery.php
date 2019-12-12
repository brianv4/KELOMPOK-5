<?php
//file edit-gallery.php
//koneksi ke database
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('lkpsrirejeki');
if($_POST){ //jika tombol update ditekan dan data terkirim ke server
//bentuk sql query untuk update
    $update = "update gallery set deskripsi='".$_POST['deskripsi']."' ";
    if($_FILES['file']['size'] > 0 && $_FILES['file']['error'] == 0){ //update gambar hanya jika user memilih file baru
        $move = move_uploaded_file($_FILES['file']['tmp_name'], "../../img/gallery/".$_FILES['file']['name']);
        if($move){
            $update .= ", nama_file='".$_FILES['file']['name']."'";
        }
    }
    $update .= " where id='".$_POST['id']."'";
    mysql_query($update); //update data ke database
    header("Location: gallery.php");
    exit;
}
?>
<html>
<head>
    <title>Edit Picture</title>
</head>
<body>
    <form name="form1" action="" method="post" enctype="multipart/form-data">
        <?php
        $sql = "select * from gallery where id='".intval($_GET['id'])."'";
        $data = mysql_fetch_array(mysql_query($sql));
        ?>
        <!-- menampilkan gambar sebelumnya -->
        <img src="../../img/gallery/<?php echo $data['nama_file'];?>" alt="" width="200"/><br/>
        File: <input type="file" name="file" id="file"/><br/>
        <!-- menampilkan deskripsi -->
        Deskripsi: <textarea name="deskripsi" id="deskripsi"><?php echo $data['deskripsi'];?></textarea><br/>
        <input type="submit" name="save" value="Update"/>
        <input type="hidden" name="id" value="<?php echo $data['id'];?>"/>
    </form>
</body>
</html>