<?php
//file delete-gallery.php
//koneksi ke database
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('lkpsrirejeki');
if(isset($_GET['id'])){
    $id = (int) $_GET['id'];
    $sql = "select * from gallery where id='$id'";
    $result = mysql_query($sql);
    if(mysql_num_rows($result) > 0 ){
        $data = mysql_fetch_array($result);
        //delete file
        @unlink('../img/gallery/'.$data['nama_file']);
        //delete data di database
        mysql_query("delete from gallery where id='$id'");
    }
} 
header("Location: gallery.php");