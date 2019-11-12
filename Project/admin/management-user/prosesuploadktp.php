<?php
include "koneksi.php";

$a=$_FILES['photo'];

mysql_query("INSERT INTO peserta_kursus(photo) VALUES('$a')");
echo "<script>window.alert('Foto berhasil diupload')
	window.location='index.php'</script>";

//upload foto
if (strlen($a)>0) {
		if (is_uploaded_file($_FILES['photo'])) {
			move_uploaded_file($_FILES['photo'], "gambarktp/".$a);
		}
	}
?>