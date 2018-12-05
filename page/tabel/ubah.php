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

<?php
$kode2 = $_GET['id_event1'];

$sql= $koneksi->query("select * from tb_daftarevent where id_event='$kode2'");
$tampil = $sql->fetch_assoc();  

$jenis = $tampil['jenis_event'];

?>


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Ubah Event
                                
                            </h2>
 
                         </div>

                            <div class="body">
                            <form method="POST">
                            <input type="hidden" name="id_event"/>
                            <input type="hidden" name="id_user" value="<?php echo $idUser; ?>">
                            <label for="">Nama Event </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama_event"  value="<?php echo $tampil['nama_event']?>" class="form-control"/>
                                        </div>
                                     </div>

                             <label for="">lokasi </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="lokasi" value="<?php echo $tampil['lokasi']?>" class="form-control"/>
                                        </div>
                                     </div>

                            <label for="">tanggal </label>        
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" name="tanggal" value="<?php echo $tampil['tanggal']?>" class="form-control"/>
                                        </div>
                                     </div>

                            <label for="">Jenis Event </label>   
                            <div class="form-group">
                                    <div class="form-line">
                                    <select name="jenis_event" class="form-control show-tick"  >
                                        <!-- <option value="">-- Pilih jenis event--</option> -->
                                        <option value="Seminar" <?php if($jenis=='Seminar') { echo "Selected"; } ?>>Seminar</option>
                                        <option value="Workshop" <?php if($jenis=='Workshop') { echo "Selected"; } ?>>Workshop</option>
                                        <option value="Pelatihan" <?php if($jenis=='Pelatihan') { echo "Selected"; } ?>>Pelatihan</option>
                                        <option value="Kuliah Umum" <?php if($jenis=='Kuliah Umum') { echo "Selected"; } ?>>Kuliah Umum</option>
                                    
                                    </select>
                                </div>

                            <label for="">Harga </label>        
                            <div class="form-group">
                                    <div class="form-line">
                                            <input type="number" name="harga" value="<?php echo $tampil['harga']?>" class="form-control"/>
                                    </div>
                                 </div>

                            <label for="">Descripsi Event </label>        
                            <div class="form-group">
                                    <div class="form-line">
                                    <textarea class="form-control" rows="5" id="comment" name="desc_event"><?php echo $tampil['desc_event']?></textarea>    
                                    </div>
                                </div>
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">  
                            </form>
    <?php 
    
    if (isset($_POST['simpan'])) {

       // $id_event      = $_POST['id_event'];
        $nama_event    = $_POST['nama_event'];
        $lokasi        = $_POST['lokasi'];
        $tanggal       = $_POST['tanggal'];
        $jenis_event   = $_POST['jenis_event'];
        $harga         = $_POST['harga'];
        $desc_event    = $_POST['desc_event'];
        
        
    //     // echo sql;
        $sql2 = $koneksi->query("UPDATE tb_daftarevent SET nama_event='$nama_event',lokasi='$lokasi',tanggal='$tanggal',jenis_event='$jenis_event',harga='$harga',desc_event='$desc_event',active=0 WHERE id_event='$kode2'");

        if ($sql2) {
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Di Ubah");
                window.location.href="?page=tabel";
            </script>
                
        <?php
        }
    }
?>  