<?php
if ($_SESSION['Admin']) {
        $user = $_SESSION['Admin'];
    }else if ($_SESSION['Userweb']) {
        $user= $_SESSION['Userweb'];
    }

    $sql = $koneksi->query("select * from tb_user where id_user='$user'");
    $result = $sql->fetch_assoc();

?>


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Acara
                            </h2>
                           
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center;">No</th>
                                            <th style="text-align:center;">Nama Pembuat Event</th> 
                                            <th style="text-align:center;">Nama Event</th>
                                            <th style="text-align:center;">Lokasi</th>
                                            <th style="text-align:center;">Tanggal</th>
                                            <th style="text-align:center;">Jenis Event</th>
                                            <th style="text-align:center;">Harga</th>
                                            <th style="text-align:center;">Deskripsi Event</th> 
                                            <th style="text-align:center;">Permision</th>
                                            <th style="text-align:center;">Aksi</th>                                       
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php
                                        $no= 1;
                                        $idUser=$result['id_user'];
                                        $namaUser=$result['nama'];
                                        $idLevel=$data['level'];
                                        
                                    if($idLevel=='Admin'){
                                        $sql = $koneksi->query("SELECT *,(select nama from tb_user where id_user=tb_daftarevent.id_user) as namaUser FROM tb_daftarevent");
                                    }
                                    else
                                    {
                                        // $sql = $koneksi->query("select * FROM tb_daftarevent where id_user=".$idUser."  ");
                                        $sql = $koneksi->query("SELECT *,(select nama from tb_user where id_user=tb_daftarevent.id_user) as namaUser FROM tb_daftarevent WHERE id_user=".$idUser." ");

                                    }
                                        while ($data = $sql->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['namaUser'] ?></td>
                                            <td><?php echo $data['nama_event']?></td>
                                            <td><?php echo $data['lokasi']?></td>
                                            <td><?php echo $data['tanggal']?></td>
                                            <td><?php echo $data['jenis_event']?></td>
                                            <td>Rp. <?php echo number_format($data['harga'],0,".",".")?></td>
                                            <td><?php echo $data['desc_event']?></td>   
                                            <td align="center">
                                                <!-- <a onclick="return confirm('Apakah Anda Yakin Akan Mengizinkan Data Ini ?')" href="?page=tabel&aksi=izinkan&id_event1=<?php //echo $data['id_event']?>"class="btn bg-blue wave-effect">Izinkan</a></td> -->
                                            <?php
                                                if($data['active'] == '1'){ ?>
                                                <form action="?page=tabel&aksi=tidak_izin&id_event1=<?php echo $data['id_event']?>" method="POST">    
                                                <input type="submit" class="btn btn-success" id="izin" name="izin"  value="Izinkan" >
                                                </form>

                                                <?php
                                                }else if ($data['active'] == '0') { ?>
                                                <form action="?page=tabel&aksi=izinkan&id_event1=<?php echo $data['id_event']?>" method="POST">    
                                                <input type="submit" class="btn btn-danger" id="tidak" name="tidak" value="Tidak">
                                                </form>
                                            <?php } ?>
                                        </td>

                                        <td align="center">
                                            <a href="?page=tabel&aksi=ubah&id_event1=<?php echo $data['id_event']?>"class="btn bg-green wave-effect">Ubah</a>
                                        
                                            <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')" href="?page=tabel&aksi=hapus&id_event1=<?php echo $data['id_event']?>"class="btn bg-red wave-effect">Hapus</a>
                                            
                                            </td>
                                        </tr>
                                        
                                    <?php }?> 
                                    </tbody>
                                </table>
                                <a href="?page=tabel&aksi=tambah "class="btn btn-primary">Tambah</a>
                            </div>
                        </div>

        <script type="text/javascript">
            function change() {
                document.getElementById("tampil").value="Tidak";
            }
        </script>
                              