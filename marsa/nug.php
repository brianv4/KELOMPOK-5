<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Docs</title>
</head>

<body>
    
    <form action="" method="post">
    <h2>Masukan Nilai awal</h2> <input type="text" name="a">
    <hr>
    <h2>Masukan banyak data</h2> <input type="number" name="n" min="1" max="6">
    <hr>
    <h2>Masukan beda</h2> <input type="text" name="b">
    <hr>
    <input type="submit" value="GASS" name="submit">
    </form>

    <?php

        error_reporting(0);
        $a = $_POST["a"];
        $n = $_POST["n"];
        $b = $_POST["b"];
        for($i =1;  $i <= $n; $i++){
            $un = $a + ($i - 1) * $b;
            $bulan =$i +$n;
            echo "penjualan di bulan ke $bulan adalah",($un);
            echo "<br>";
        }
        ?>
</body>
</html>