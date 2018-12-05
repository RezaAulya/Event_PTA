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
                                Tambah Event
                                
                            </h2>
 
                         </div>

                            <div class="body">
                            <form method="POST">

                            <label for="" style="visibility:hidden;">Id Event </label> 
                            <div class="form-group"style="visibility:hidden;">
                                <div class="form-line">
                                        <input type="number" name="id_event" class="form-control" />
                                        <input type="text" name="id_user" value="<?php echo $idUser; ?>">
                                </div>
                            </div>
                            <label for="">Nama Event </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama_event" class="form-control"/>
                                        </div>
                                     </div>

                             <label for="">Lokasi </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="lokasi" class="form-control"/>
                                        </div>
                                     </div>

                            <label for="">Tanggal </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" name="tanggal" class="form-control"/>
                                        </div>
                                     </div>

                            <label for="">Jenis Event </label>   
                            <div class="form-group">
                                    <div class="form-line">
                                    <select name="jenis_event" class="form-control show-tick"  >
                                        <option value="">-- Pilih jenis event--</option>
                                        <option value="Seminar">Seminar</option>
                                        <option value="Workshop">Workshop</option>
                                        <option value="Pelatihan">Pelatihan</option>
                                        <option value="Kuliah Umum">Kuliah Umum</option>
                                    </select>
                                </div>

                            <label for="">Harga </label>        
                            <div class="form-group">
                                    <div class="form-line">
                                            <input type="number" name="harga" class="form-control"/>
                                    </div>
                                 </div>

                            <label for="">Tentang Event</label>        
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
        $nama_event    = $_POST['nama_event'];
        $lokasi  = $_POST['lokasi'];
        $tanggal = $_POST['tanggal'];
        $jenis_event  = $_POST['jenis_event'];
        $harga   = $_POST['harga'];
        $desc_event  = $_POST['desc_event'];
        $idUser  = $_POST['id_user'];
        
    //     // echo sql;
        $sql = $koneksi->query("INSERT INTO tb_daftarevent values('$id_event',
                                                                '$idUser',
                                                                '$nama_event',
                                                                '$lokasi',
                                                                '$tanggal',
                                                                '$jenis_event',
                                                                '$harga',
                                                                '$desc_event', 0 )");      
        
        if ($sql) {
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan");
                if($idUser=='Admin'){
                    window.location.href="?page=tabel";
                }
                else{
                    window.location.href="?page=daftarevent";
                }

            </script>
                
        <?php
        }
    }
?>