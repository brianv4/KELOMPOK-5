
<?php
$connect = mysqli_connect("localhost", "root", "", "lkp_sri");  
$input = $_POST['addmore'];
foreach ($input as $output) {
    mysqli_query($connect,"INSERT INTO materi_pelatihan VALUES ('','$output')");
}
header('location:input_pelatihan/index.php')
?>