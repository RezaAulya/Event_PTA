<?php 
    
$kode = $_GET['id'];

$sql= $koneksi->query("delete from tb_user where id_user ='$kode' ");



if (sql){

?>

      <script type="text/javascript">
                alert("Data Berhasil Di Hapus");
                window.location.href="?page=user";
            </script>
<?php

}

?>