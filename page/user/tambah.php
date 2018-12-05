
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Tambah User
                            </h2>
 
                         </div>

                            <div class="body">
                            <div class="table-responsive">

                            <form method="POST" enctype="multipart/form-data" >

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

                             <label for="">PASSWORD</label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="password" class="form-control" required/>
                                        </div>
                                     </div>

                             <label for="">LEVEL </label>   
                            <div class="form-group">
                                    <div class="form-line">
                                    <select name="level" class="form-control show-tick"  >
                                        <option value="">-- Pilih Level--</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Userweb">Userweb</option>
                    
                                    </select>
                                    </div>
                                </div>
                                
                            <label for="">FOTO </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" name="foto" class="form-control"required/>
                                        </div>
                                     </div>
                            <label for="">EMAIL</label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="email" class="form-control" required/>
                                        </div>
                                     </div>


                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">  
                          
                           </form>



     <?php 
    
            if (isset($_POST['simpan'])) {

            $username    = $_POST['username'];
            $nama  = $_POST['nama'];
            $password  = $_POST['password'];
            $level = $_POST['level'];

            $foto = $_FILES['foto']['name'];
            $lokasi = $_FILES['foto']['tmp_name'];
            $upload = move_uploaded_file($lokasi,"images/".$foto);
            $email = $_POST['email'];

            if ($upload)   {

            $sql = $koneksi->query("INSERT INTO tb_user (username, nama, password, level, foto,email) values('$username', '$nama', '$password', '$level', '$foto','$email') ");
        
            if ($sql) {
            ?>    
                <script type="text/javascript">
                    alert("Data Berhasil Disimpan");
                    window.location.href="?page=user";
                </script>
                  
        <?php
                    }
        }
}
?>