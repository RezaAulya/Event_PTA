<?php

$kode = $_GET['id'];

$sql = $koneksi->query("select * from tb_daftarregister where id_register='$kode' ");
$tampil = $sql->fetch_assoc();  


?>

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Ubah Register               
                            </h2>
 
                         </div>
                            <div class="body">
                            <div class="table-responsive">
                            <form method="POST">
                                   
                           <label for="">NAMA EVENT </label>        
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nama_event" value="<?php echo $tampil['id_event']?>" class="form-control" disabled/>
                                </div>
                             </div>

                            
                            <label for="">NAMA </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama" value="<?php echo $tampil['nama_register']?>" class="form-control" required/>
                                        </div>
                                     </div>

                                    
                             <label for="">ALAMAT </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="alamat"  value="<?php echo $tampil['alamat']?>" class="form-control" required/>
                                        </div>
                                     </div>

                            <label for="">TELPON </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="telpon" value="<?php echo $tampil['telpon']?>" class="form-control"required/>
                                        </div>
                                     </div>

                            <label for="">EMAIL </label>        
                            <div class="form-group">
                                    <div class="form-line">
                                            <input type="text" name="email"  value="<?php echo $tampil['email']?>" class="form-control" required />
                                    </div>
                                 </div>
                                </div>
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">  
                          
                           </form>
    <?php 
    
    if (isset($_POST['simpan'])) {

        $nama       = $_POST['nama'];
        $alamat  = $_POST['alamat'];
        $telpon  = $_POST['telpon'];
        $email = $_POST['email'];
        
        
    $sql = $koneksi->query("UPDATE tb_daftarregister SET nama_register='$nama',
                                                         alamat='$alamat',
                                                         telpon='$telpon',
                                                         email='$email'
                                                         WHERE id_register='$kode'");


        if ($sql) {
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Diubah");
                window.location.href="?page=daftarregister";
            </script>
                  
        <?php
        }
    }
?>