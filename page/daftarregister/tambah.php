<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Tambah Register
                                
                            </h2>
 
                         </div>

                            <div class="body">
                            <div class="table-responsive">
                            <form method="POST">
                          
                            
                            <label for="">USERNAME </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="username" class="form-control" required/>
                                        </div>
                                     </div> 

                            <label for="">NAMA </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama" class="form-control" required/>
                                        </div>
                                     </div>

                              
                              <label for="">PASSWORD </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="password" class="form-control" required/>
                                        </div>
                                     </div>

                             <label for="">ALAMAT </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="alamat" class="form-control" required/>
                                        </div>
                                     </div>

                            <label for="">TELPON </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="telpon" class="form-control"required/>
                                        </div>
                                     </div>

                            <label for="">EMAIL </label>        
                            <div class="form-group">
                                    <div class="form-line">
                                            <input type="text" name="email" class="form-control" required />
                                    </div>
                                 </div>
                                </div>
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">  
                          
                           </form>
    <?php 
    
    if (isset($_POST['simpan'])) {

        
        $username   = $_POST['username'];
        $nama    = $_POST['nama'];
        $password    = $_POST['password'];
        $alamat  = $_POST['alamat'];
        $telpon  = $_POST['telpon'];
        $email = $_POST['email'];
        
        
        
    //     // echo sql;
        $sql = $koneksi->query("INSERT INTO tb_daftarregister (username,nama_register,password,alamat,telpon,email) values('$username','$nama','$password','$alamat','$telpon','$email')");
        
        if ($sql) {
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan");
                window.location.href="?page=daftarregister";
            </script>
                  
        <?php
        }
    }
?>