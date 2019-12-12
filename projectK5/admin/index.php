<?php

session_start();
if (!isset($_SESSION['username'])){
header('Location:login/index.php');
}else{
echo"anda telah login";
}
?>