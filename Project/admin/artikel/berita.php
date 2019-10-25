<html>
<head>
<title>UPDATE BERITA</title>
<link type="text/css" rel="stylesheet" href="style2.css"/>
</head>
<body>
<div id="wrapper">
	<div id="header">
    <h1 align="center">Update Berita
	</h1>
    </div>          
    <div id="wrapper_konten">
		
		<div id="right_konten">
		<?php
            // Connect to Database
		    mysql_connect("localhost", "root", "");
		    mysql_select_db("lkpsri");

            $kueri = mysql_query(" SELECT * FROM upload");
            while ($baris=mysql_fetch_array($kueri))
            {
             //echo $baris['Waktu'];
             //$date = DateTime::createFromFormat('Y-m-d', $baris["Waktu"]);
             //echo htmlspecialchars($date->format('F Y'), ENT_QUOTES, "UTF-8");

             $formatted = date('d-M-Y H:i:s', strtotime($baris['waktu']));
             echo $formatted;
             echo "<br>";
             echo "Judul :".$baris[1]."<br><br>";
             echo "<img src=image/".$baris['path'].">"; echo "Berita :".$baris[2]."<br>";
             echo"<br><br><hr>";
            }
        ?>
        </div>
		<div id="right_konten_bottom">  			
        </div>
    </div>
</div>
</body>
</html>