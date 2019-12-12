<?php
include("../includes/header.php");
include("../includes/navbar.php");
?>
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
    mysql_select_db('lkpsri');
    //membaca data dari database
    $result = mysql_query("select * from galeri");
    //menampilkan foto
    
    ?>
    <h2>Tambahkan foto :</h2> 
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addGambar">
    
    
    <table>
        <tr>
        <?php
        $i = 1;
        while($row = mysql_fetch_array($result)){
        ?>
            <td>
                <a href="upload/<?php echo $row['nama_file'];?>" class="fancy">
                <img src="upload/<?php echo $row['nama_file'];?>" alt="" width="200" border="0"/>
                </a>
                <br/><?php echo $row['deskripsi'];?>
                <br/>
        <a href="edit-gallery.php?id=<?php echo $row['id'];?>">Edit</a>
        <br/>
        <a href="delete-gallery.php?id=<?php echo $row['id'];?>" onclick="return confirm('Anda yakin?');">Delete</a>
            </td>
        <?php
            if($i % 3 == 0){
                echo '</tr><tr>';
            }
            $i++;
        }
        

        ?>
        
        <br/>
        </tr>
    </table>

<div class="modal fade" id="addGambar" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form name="form1" action="save-gallery.php" method="post" enctype="multipart/form-data">
        File: <input type="file" name="file" id="file"/><br/>
        Deskripsi: <textarea name="deskripsi" id="deskripsi"></textarea><br/>
        <input type="submit" name="save" value="../upload_galery"/>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>