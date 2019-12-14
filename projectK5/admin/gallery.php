<?php
include('includes/header.php');
include('includes/navbar.php');
?>

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
    <h2>Tambahkan Gambar :</h2><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadGambar">
  Upload
</button>
<br>
    <table border="1" width="100%">
        
          <tr>
            <th>Foto</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
        
       
        <?php
        $i = 1;
        while($row = mysql_fetch_array($result)){
        ?>
        <tr>
          <td>
                <a href="../img/gallery/<?php echo $row['nama_file'];?>" class="fancy">
                <center><img src="../img/gallery/<?php echo $row['nama_file'];?>" alt="" width="200" border="0"/></center>
                </a>
                
          </td>
          <td>
                <br/><?php echo $row['deskripsi'];?>
                <br/>
          </td>
          <td>
                <a href="gallery-edit.php?id=<?php echo $row['id'];?>">Edit</a>
                <br/>
                <a href="gallery-delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Anda yakin?');">Delete</a>
          
          </td>
        </tr>
          <?php
           
            $i++;
        }
        

        ?>
        
    </table>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="uploadGambar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form name="form1" action="gallery-save.php" method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <td>File: <input type="file" name="file" id="file"/><br/></td>
        </tr>
        <tr>
          <td>Deskripsi: <textarea style="resize:none;width:480px;height:150px;" name="deskripsi" id="deskripsi"></textarea><br/></td>
        </tr>
        <tr>
          <td> <input type="submit" class="btn btn-primary" name="save" value="Upload"/></td>
        </tr>
      </table>
      
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>