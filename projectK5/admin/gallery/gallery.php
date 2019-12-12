
<html>
<head>
    <title>Gallery</title>
    <!--menambahkan jquery-->
    <script type="text/javascript" src="jquery-1.4.3.min.js"></script>
    <!--menambahkan fancybox-->
    <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <!--menambahkan css fancybox-->
    <link href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript">
    $(document).ready(function(){
        $(".fancy").fancybox();
        });
    </script>
</head>
<body>
    <?php
    //koneksi ke database
    $conn = mysql_connect('localhost', 'root', '');
    mysql_select_db('lkpsrirejeki');
    //membaca data dari database
    $result = mysql_query("select * from gallery");
    //menampilkan foto
    
    ?>
<div class="container">
	<div class="content">
    <h2>Tambahkan foto :</h2> 
    <table border="1" width="100%">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        while($row = mysql_fetch_array($result)){
        ?>
          <td>
                <a href="../../img/gallery/<?php echo $row['nama_file'];?>" class="fancy">
                <center><img src="../../img/gallery/<?php echo $row['nama_file'];?>" alt="" width="200" border="0"/></center>
                </a>
                
          </td>
          <td>
                <br/><?php echo $row['deskripsi'];?>
                <br/>
          </td>
          <td>
                <a href="edit-gallery.php?id=<?php echo $row['id'];?>">Edit</a>
                <br/>
                <a href="delete-gallery.php?id=<?php echo $row['id'];?>" onclick="return confirm('Anda yakin?');">Delete</a>
          
          </td>
          <?php
           
            $i++;
        }
        

        ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>