<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data User Android
                            </h2>
                           
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center;">no</th>
                                            <th style="text-align:center;">Username </th>
                                            <th style="text-align:center;">Password</th>
                                            <th style="text-align:center;">Nama  </th>
                                            <th style="text-align:center;">Alamat</th>
                                            <th style="text-align:center;">Telpon </th>
                                            <th style="text-align:center;">Email</th> 
                                            <th style="text-align:center;">Aksi</th>                                
                                        </tr>   
                                    </thead>
                                   
                                    <tbody>
                                    <?php
                                        $no= 1;
                                    
                                        $sql = $koneksi->query("select * from tb_user_android");
                                        while ($data = $sql->fetch_assoc()) {
                                    
                                    ?>
                                        <tr>
                                            <td style="text-align:center;"><?php echo $no++; ?></td>
                                            <td style="text-align:center;"><?php echo $data['username']?></td>
                                            <td style="text-align:center;"><?php echo $data['password']?></td>
                                            <td style="text-align:center;"><?php echo $data['nama_user_android']?></td>
                                            <td style="text-align:center;"><?php echo $data['alamat']?></td>
                                            <td style="text-align:center;"><?php echo $data['telpon']?></td>
                                            <td style="text-align:center;"><?php echo $data['email']?></td>
                                            <td align="center">
                                            <a href="?page=userandroid&aksi=ubah&id=<?php echo $data['id_user_android']?>"class="btn bg-green wave-effect">Ubah</a>
                                            <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?' )" href="?page=userandroid&aksi=hapus&id=<?php  echo $data['id_user_android']?>"class="btn bg-red wave-effect">Hapus</a>
                                            </td>
                                        </tr>
                                        
                                    <?php }?> 
                                    </tbody>
                                </table>
                                <a href="?page=userandroid&aksi=tambah" class="btn btn-primary">Tambah</a>
                            </div>
                        </div>
                                            