<?php 
    
$kode = $_GET['id'];

$sql= $koneksi->query("delete from tb_daftarregister where id_register='$kode'");



if (sql){

?>

      <script type="text/javascript">
                alert("Data Berhasil Di Hapus");
                window.location.href="?page=daftarregister";
            </script>
<?php

}

?>