<?php
session_start();
if (!isset($_SESSION['username'])){
header('Location:login/index.php');
}else if(isset($_SESSION['status'])){
    header('Location:../index.php');
}
else{
header('Location:halaman_owner.php');
}
?>