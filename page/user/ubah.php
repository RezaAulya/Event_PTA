<?php

$kode = $_GET['id'];

$sql2 = $koneksi->query("select * from tb_user where id_user='$kode' ");
$tampil = $sql2->fetch_assoc();

$level = $tampil['level'];

?>


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Ubah User
                                
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
                          
                            
                            <label for="">NAMA </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama" value="<?php echo $tampil['nama'];?>" class="form-control" required/>
                                        </div>
                                     </div>

                             <label for="">PASSWORD</label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="password" value="<?php echo $tampil['password'];?>" class="form-control" required/>
                                        </div>
                                     </div>

                             <label for="">LEVEL </label>   
                            <div class="form-group">
                                    <div class="form-line">
                                    <select name="level" class="form-control show-tick"  >
                                        <option value="Admin"  <?php if ($level=='Admin')   {echo "selected"; }?>>Admin</option>
                                        <option value="Userweb"<?php if ($level=='Userweb') {echo "selected"; }?>>Userweb</option>
                    
                                    </select>
                                    </div>
                                </div>

                            <label for=""> FOTO </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                           <img src="images/<?php echo $tampil['foto'];?>" width="100" height="100" alt=""> 
                                        </div>
                                     </div>
                                
                            <label for=""> GANTI FOTO </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" name="foto" class="form-control"required/>
                                        </div>
                                     </div>
                            
                            <label for="">EMAIL</label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="email" value="<?php echo $tampil['email'];?>" class="form-control" required/>
                                        </div>
                                     </div>

                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">  
                          
                           </form>



     <?php 
    
            if (isset($_POST['simpan'])) {

            $username    = $_POST['username'];
            $nama  = $_POST['nama'];
            $level = $_POST['level'];

            $foto = $_FILES['foto']['name'];
            $lokasi = $_FILES['foto']['tmp_name'];
            $email = $_POST['email'];
          
            if (!empty($lokasi)) {
            
            $upload = move_uploaded_file($lokasi, "images/".$foto);

            $sql = $koneksi->query("UPDATE tb_user SET username='$username',
                                                       nama = '$nama',
                                                       level = '$level',
                                                       foto = '$foto',
                                                       email = '$email' where id_user='$kode' ");
        
            if ($sql) {
            ?>    
                <script type="text/javascript">
                    alert("Data Berhasil Ubah");
                    window.location.href="?page=user";
                </script>

            <?php
        }
    }else{

       

        $sql = $koneksi->query("UPDATE tb_user SET username='$username',
                                                   nama = '$nama',
                                                   level = '$level',
                                                   foto = '$foto',
                                                   email = '$email' where id_user='$kode'");
    
        if ($sql) {
        ?>    
            <script type="text/javascript">
                alert("Data Berhasil Ubah");
                window.location.href="?page=user";
            </script>
              
        <?php


            }
        }
    }
?>