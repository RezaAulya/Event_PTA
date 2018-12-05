<?php
if ($_SESSION['Admin']) {
        $user = $_SESSION['Admin'];
    }else if ($_SESSION['Userweb']) {
        $user= $_SESSION['Userweb'];
    }
    $sql = $koneksi->query("select * from tb_user where id_user='$user'");
    $data = $sql->fetch_assoc();
    $idUser=$data['id_user'];
?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Daftar Event
                                
                            </h2>
 
                         </div>

                            <div class="body">
                            <form method="POST">
                            <input type="hidden" name="id_event"/>
                            <input type="text" name="id_user" value="<?php echo $idUser; ?>">
                            
                            <label for="">NAMA EVENT </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama_event" class="form-control" required/>
                                        </div>
                                     </div>

                             <label for="">LOKASI </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="lokasi" class="form-control" required/>
                                        </div>
                                     </div>

                            <label for="">TANGGAL </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" name="tanggal" class="form-control"required/>
                                        </div>
                                     </div>

                            <label for="">JENIS EVENT </label> 
                            <br>  
                            <div class="form-group">
                                    <div class="form-line">
                                    <select name="jenis_event" class="form-control show-tick" required  >
                                        <option value="">-- Pilih jenis event--</option>
                                        <option value="Seminar">Seminar</option>
                                        <option value="Workshop">Workshop</option>
                                        <option value="Pelatihan">Pelatihan</option>
                                        <option value="Kuliah Umum">Kuliah Umum</option>
                                    
                                    </select>
                                </div>
                                <br>

                            <label for="">HARGA </label>        
                            <div class="form-group">
                                    <div class="form-line">
                                            <input type="number" name="harga" class="form-control" required />
                                    </div>
                                 </div>

                            <label for="">TENTANG EVENT </label>        
                            <div class="form-group">
                                    <div class="form-line">
                                    <textarea class="form-control" rows="5" id="comment" name="desc_event"></textarea>    
                                    </div>
                                </div>
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">  
                            </form>
    <?php 
    
    if (isset($_POST['simpan'])) {

        $id_event      = $_POST['id_event'];
        $id_user      = $_POST['id_user'];
        $nama_event    = $_POST['nama_event'];
        $lokasi  = $_POST['lokasi'];
        $tanggal = $_POST['tanggal'];
        $jenis_event  = $_POST['jenis_event'];
        $harga   = $_POST['harga'];
        $desc_event  = $_POST['desc_event'];
        
        
    //     // echo sql;
        $sql = $koneksi->query("INSERT INTO tb_daftarevent values('$id_event',
                                                                '$id_user',
                                                                '$nama_event',
                                                                '$lokasi',
                                                                '$tanggal',
                                                                '$jenis_event',
                                                                '$harga',
                                                                '$desc_event',
                                                                0)");
        
        if ($sql) {
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan");
                window.location.href="?page=tabel";
            </script>
                
        <?php
        }
    }
?>