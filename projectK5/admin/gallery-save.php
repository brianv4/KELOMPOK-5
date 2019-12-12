<?php
//koneksi ke database
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('lkpsrirejeki');
//upload file
if(!empty($_FILES) && $_FILES['file']['size'] > 0 && $_FILES['file']['error'] == 0){
    $fileName = $_FILES['file']['name'];
    $move = move_uploaded_file($_FILES['file']['tmp_name'], '../img/gallery/'.$fileName);
    if($move){
        //simpan deskripsi dan nama file ke database
        $sql = "insert into gallery (nama_file, deskripsi) values
                ('$fileName', '".$_POST['deskripsi']."')";
        mysql_query($sql);
        header("Location: gallery.php");
        exit;
    }
}