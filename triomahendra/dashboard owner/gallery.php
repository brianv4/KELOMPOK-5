<?php
    //koneksi ke database
    $conn = mysql_connect('localhost', 'root', '');
    mysql_select_db('lkpsri');
    //membaca data dari database
    $result = mysql_query("select * from galeri");
    //menampilkan foto
    
    ?>

<h2>Data Gallery</h2>
<button class="btn btn-primary" data-target="#modalGambar">Upload Gambar</button><br>
<a class="btn btn-primary" href="../../index.php">Upload 1</a>

<div class="modal fade" role="dialog" id="modalGambar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3> Upload Gambar</h3>
                <button type="button" class="close" data_dismiss="modal">&times;</button>
            </div>
            <form action="upload.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <h2>Upload gambar</h2>
                        <input type="file" id="gambar" class="form-control" placeholder="Gambar">
                    </div>
                    <div class="form-group">
                        <input type="textarea" name="deskripsi" class="form-control" placeholder="Deskripsi">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit" >Upload</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<table class="table table-hover table-bordered">



    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    
        <tr>
        <?php
        $i = 1;
        while($row = mysql_fetch_array($result)){
        ?>
            <td><?php echo $row['deskripsi'];?></td>
            <td><a href="upload/<?php echo $row['nama_file'];?>" class="fancy">
                <img src="upload/<?php echo $row['nama_file'];?>" alt="" width="200" border="0"/></td>
            <td><?php echo $row['id'];?></td>
            <td>tes</td>
            <td>
            <a href="" class="btn btn-info"><i class="fa fa-edit"></i>Ubah</a>
            <a href="" class="btn btn-danger"><i class="fa fa-edit"></i>Hapus</a></td>
        </tr>
        <?php
            if($i % 3 == 0){
                echo '</tr><tr>';
            }
            $i++;
        }
        

        ?>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    </tbody>
</table>
