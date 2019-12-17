<?php

?>
<?php

session_start();
include "koneksi.php";
    $USERNAME=$_SESSION['username'];
    $pt=mysqli_query($connect, "SELECT * FROM user WHERE username='$USERNAME'");
?>
<div class="panel-content">
<div class="main-title-sec">
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
                              <h2>Data Profil</h2>
                              <p align= right >Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
                             </div>
                             <ul class="breadcrumbs">
               <li><a href="halaman_owner.php" title="">Kembali</a></li>
               <li>Ubah Password</li>
          </ul>
          
                    <div class="col-md-10">
                               </div><!-- Widget Controls -->
                              </div>
                              <div class="with-padding">                                          
                                  <form action="prosess.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <?php 
                                            
                                        while ($row=mysqli_fetch_assoc($pt)) {
                                        ?>
                                       
                                       
                                       <input type="hidden" name="id_user" class="form-control" readonly value="<?php echo $row['id_user']; ?>">
                                        <label for="password">password</label>
                                        <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Masukkan password dengan huruf besar, huruf kecil, dan angka (minimal 8 karakter)" class="form-control" placeholder ="Biarkan kosong jika tidak ingin mengubah password!">
                                       
                                        <label for="password1">Ulangi password</label>
                                        <input type="password" name="password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Masukkan password dengan huruf besar, huruf kecil, dan angka (minimal 8 karakter)" class="form-control" placeholder ="Biarkan kosong jika tidak ingin mengubah password!">

                                       
                                    
   
                                    <?php 
                                    }
                                     ?>                               
                                    </div>
                                            
                                    <div class="form-group">
                                        <button type="submit" class="c-btn large blue-bg" >Simpan</button>
                                        </div>
                                </form>
                              </div>
                         </div>
                    </div>      

               </div>
          </div>
     </div><!-- Panel Content -->
                                            
                                          