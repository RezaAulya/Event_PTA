<?php
if ($_SESSION['Admin']) {
        $user = $_SESSION['Admin'];
    }else if ($_SESSION['Userweb']) {
        $user= $_SESSION['Userweb'];
    }

    $sql = $koneksi->query("select * from tb_user where id_user='$user'");
    $data = $sql->fetch_assoc();

?>

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Data Register
                            </h2>
                           
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center;">No</th>
                                            <th style="text-align:center;">Nama Event </th>
                                            <th style="text-align:center;">Nama </th>
                                            <th style="text-align:center;">Password </th>
                                            <th style="text-align:center;">Alamat </th>
                                            <th style="text-align:center;">Telpon </th>
                                            <th style="text-align:center;">Email </th>
                                            <th style="text-align:center;">Aksi</th>                                 
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php
                                        $no= 1;

                                        $idUser=$data['id_user'];
                                        $idLevel=$data['level'];


                                        if($idLevel=='Admin')
                                        {
                                              $sql = $koneksi->query("select *,(select nama_event from tb_daftarevent where id_event=tb_daftarregister.id_event)as nm_event from tb_daftarregister");

                                        }
                                        else {
                                            $sql = $koneksi->query("SELECT *,(select nama_event from tb_daftarevent where id_event=tb_daftarregister.id_event) as nm_event FROM tb_daftarregister WHERE id_user=".$idUser." ");
                                            // $sql = $koneksi->query("SELECT id_event FROM tb_daftarregister LEFT JOIN tb_daftarevent ON tb_daftarregister.id_event=tb_daftarevent.nama_event ");
                                        }

                                        while ($data = $sql->fetch_assoc()) {  

                                        ?>
                                        <tr>
                                            <td style="text-align:center;"><?php echo $no++; ?></td>
                                            <td style="text-align:center;"><?php echo $data['nm_event']?></td>
                                            <td style="text-align:center;"><?php echo $data['nama_register']?></td>
                                            <td style="text-align:center;"><?php echo $data['password']?></td>
                                            <td style="text-align:center;"><?php echo $data['alamat']?></td>
                                            <td style="text-align:center;"><?php echo $data['telpon']?></td>
                                            <td style="text-align:center;"><?php echo $data['email']?></td>
                                            <td style="text-align:center;">
                                            <a href="?page=daftarregister&aksi=ubah&id=<?php echo $data['id_register']?>"class="
                                            btn bg-green wave-effect">Ubah</a>
                                            <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?' )" href="
                                            ?page=daftarregister&aksi=hapus&id=<?php echo $data['id_register']?>"class="
                                            btn bg-red wave-effect">Hapus</a>
                                            </td>
                                        </tr>
                                        
                                    <?php } ?> 
                                    </tbody>
                                </table>
                                <a href="?page=daftarregister&aksi=tambah" class="btn btn-primary">Tambah</a>
                            </div>
                        </div>
                              