

<?php
//script php dimodifikasi berdasarkan script
//http://www.phpeasystep.com/phptu/18.html

//koneksi ke database
include "koneksi-database.php";

//menangkap posting dari field input form
$nama        = $_POST['nama'];
$transfer    = $_POST['transfer'];
$bank        = $_POST['bank'];



$namafolder="gambar/"; //folder tempat menyimpan file
if (!empty($_FILES["filegbr"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['filegbr']['type']; //memeriksa format gambar
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
    {           
        $lampiran = $namafolder . basename($_FILES['filegbr']['name']);  
        
        //mengupload gambar dan update row table database dengan path folder dan nama image		
        if (move_uploaded_file($_FILES['filegbr']['tmp_name'], $lampiran)) {
            
			$query_insert = "INSERT INTO kursus (id_kursus,transfer,bank,image) VALUES ('$nama','$transfer','$bank','$lampiran')";
			$insert = mysql_query($query_insert);
			
			echo"
			Data berhasil disimpan <br/>
			Nama : $nama <br/>
			Transfer: $transfer<br/>
			Bank: $bank<br/>
			<br/><br/>
			<img src='$lampiran' height='300'>";
			
			
			//Jika gagal upload, tampilkan pesan Gagal		
        } else {
           echo "Gambar gagal dikirim";
        }
   } else {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
    echo "Anda belum memilih gambar";
}
?>
