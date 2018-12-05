<?php

$kode = $_GET['id'];

$sql2 = $koneksi->query("select * from tb_user_android where id_user_android='$kode'");
$tampil = $sql2->fetch_assoc();
?>


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Ubah User Android
                            </h2>
                         </div>

                            <div class="body">
                            <div class="table-responsive">
                            <form method="POST" enctype="multipart/form-data" >
                              <label for="">USERNAME </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="username" value="<?php echo $tampil['username']; ?>" class="form-control" required/>
                                            </div>
                                     </div>
                          
                            <label for="">PASSWORD </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="password" value="<?php echo $tampil['password'];?>" class="form-control" required/>
                                        </div>
                                     </div>

                             <label for="">NAMA</label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama_user_android" value="<?php echo $tampil['nama_user_android'];?>" class="form-control" required/>
                                        </div>
                                     </div>

                            <label for="">ALAMAT</label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="alamat" value="<?php echo $tampil['alamat'];?>" class="form-control" required/>
                                        </div>
                                     </div>

                            <label for="">TELPON</label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="telpon" value="<?php echo $tampil['telpon'];?>" class="form-control" required/>
                                        </div>
                                     </div>
                            
                            <label for="">EMAIL</label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="email" name="email" value="<?php echo $tampil['email'];?>" class="form-control" required/>
                                        </div>
                                     </div>
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">  
                           </form>

<?php 
        if (isset($_POST['simpan'])) {

        $username = $_POST ['username'];
        $password = $_POST ['password'];
        $nama     = $_POST['nama_user_android'];
        $alamat   = $_POST['alamat'];
        $telpon   = $_POST['telpon']; 
        $email    = $_POST['email'];            

        $sql = $koneksi->query("UPDATE tb_user_android SET username='$username',password='$password',nama_user_android='$nama',alamat='$alamat',telpon='$telpon',email='$email' WHERE id_user_android='$kode'");
?>
            <script type="text/javascript">
                alert("Data Berhasil Diubah");
                window.location.href="?page=userandroid";
            </script>                  
    <?php
    }
    ?> 