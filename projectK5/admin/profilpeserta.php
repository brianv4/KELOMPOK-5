<?php
?>
<?php
session_start();
include "koneksi.php";
    $USERNAME=$_SESSION['username'];
    $pt=mysqli_query($connect, "SELECT * FROM calon_peserta WHERE username='$USERNAME'");
?>
<div class="container">
		<div class="content">
               <div class="row">
                   <div class="col-md-12 column">
                   <?php
                        if(isset($_GET['a'])){
                            $alert=$_GET['a'];
                            if($alert=='insert_sukses'){
                        ?>
                        <div role="alert" class="alert color green-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Insert Sukses!</strong> Penambahan data profil baru berhasil.
                        </div>
                        <?php } else if($alert=='insert_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Update Gagal!</strong> Pembaharuan data profil gagal.
                        </div>
                        <?php } else if($alert=='update_sukses'){ ?>
                        <div role="alert" class="alert color green-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Update Sukses!</strong> Pembaharuan data profil berhasil.
                        </div>
                        <?php } else if($alert=='hapus_sukses'){ ?>
                        <div role="alert" class="alert color blue-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Hapus sukses!</strong> Penghapusan data profil berhasil.
                        </div>
                        <?php } } ?>
          <div class="main-title-sec">
               <div class="row">
                   <div class="col-md-12 column">
                        <div class="col-md-20 column">
                         <div class="heading-profile">
                              <h2>Profil</h2>
                              <p align= left >Halo <b><?php echo $_SESSION['username']; ?></b></p>
                             </div>
                             <ul class="breadcrumbs">
          </ul>
          
                    <div class="col-md-10">
                               </div><!-- Widget Controls -->
                              </div>
                              <div class="with-padding">                                          
                                  <form action="proses.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <?php 
                                            
                                        while ($row=mysqli_fetch_assoc($pt)) {
                                        ?>
                                       
                                       

                                        <label for="username">Username</label>
                                        <input type="text" name="username" class="form-control" readonly value="<?php echo $row['username']; ?>">
                                          <br>                                   

                                           
                                        <label for="nama_user">Nama Lengkap</label>
                                        <input type="text" name="nama" pattern="[A-Za-z ]+" title="Masukkan data huruf saja" class="form-control" value="<?php echo $row['nama']; ?>">
                                        <br>

                                   
                                        <label for="alamat_user">Alamat</label>
                                        <input type="text" name="nik" class="form-control" readonly value="<?php echo $row['nik']; ?>">
                                        <br>

                                    
                                        <label for="nohp_user">NO Handphone</label>
                                        <input type="text" name="telepon" class="form-control" readonly value="<?php echo $row['telepon']; ?>">
                                    
                                        <!-- <label for="password">password</label>
                                        <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Masukkan password dengan huruf besar, huruf kecil, dan angka (minimal 8 karakter)" class="form-control" placeholder ="Biarkan kosong jika tidak ingin mengubah password!">
                                       
                                        <label for="password1">Ulangi password</label>
                                        <input type="password" name="password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Masukkan password dengan huruf besar, huruf kecil, dan angka (minimal 8 karakter)" class="form-control" placeholder ="Biarkan kosong jika tidak ingin mengubah password!"> -->

                                       
                                    
   
                                    <?php 
                                    }
                                     ?>                               
                                    </div>
                                            
                                    <div class="form-group">
                                        <button type="submit" class="c-btn large blue-bg" >Simpan</button>
                                        <button class="c-btn large blue-bg"><a href="../">   Batal</a></button>
                                        </div>
                                </form>
                              </div>
                         </div>
                    </div>      

               </div>
          </div>
     </div><!-- Panel Content -->
     <?php

?>                     
                                          