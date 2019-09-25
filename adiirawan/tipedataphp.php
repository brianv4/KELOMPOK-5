<!DOCTYPE html>
<html>
<head>
<title>Belajar Tipedata  PHP</title>
</head>
<body>
        <?php 
        $tes = "Saya Pergi Kerja";
        // variabel tes di atas merupakan tipe data string karena berisi text atau kalimat.   
        
        
        $bilangan_pertama = 12;
        $bilangan_kedua = 78;
//Kedua variabel di atas merupakan variabel yang bertipe data integer. 

        
        $angka = 12.177;
//variabel di atas adalah variabel yang bertipe data float karena berisi bilangan desimal.

        
        $x = false;
        $y = true;
//variabel di atas bertipe data boolean karena berisi nilai benar atau salah.

        
        $anggota = array("Andi","Budi","Joni");
//variabel anggota di atas adalah variabel yang bertipe data array karena memiliki banyak isi pada.

        echo "<h2>" .$tes. "</h2>";
        echo "<h2>" .$bilangan_pertama. "</h2>";
        echo "<h2>" .$bilangan_kedua. "</h2>";
        echo "<h2>" .$angka. "</h2>";
        echo "<h2>" .$x. "</h2>";
        echo "<h2>" .$y. "</h2>";
        echo "<h2>" .$anggota. "</h2>";
?>


</body>
</html> 