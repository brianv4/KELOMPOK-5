<?php
include "koneksi.php";
?>
<html>
	<title>Belajar Menampilkan ComboBox - Jaranguda.com</title>
<table>
	<tr>
		<td>Topik</td>	
		<td>:</td>	
		<td>
		<select name="topik">
			<?php
			include "koneksi.php";
			$query = "select * from topik_kursus";
			$hasil = mysql_query($query);
			while ($qtabel = mysql_fetch_assoc($hasil))
			{
				echo '<option value="'.$qtabel['topik'].'">'.$qtabel['topik'].'</option>';				
			}
			?>
		</select>
		</td>	
	</tr>
</table>
</html>