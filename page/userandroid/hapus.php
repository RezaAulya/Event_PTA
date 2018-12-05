<?php 
    
$kode = $_GET['id'];

$sql= $koneksi->query("delete from tb_user_android where id_user_android ='$kode' ");



if (sql){

?>

      <script type="text/javascript">
                alert("Data Berhasil Di Hapus");
                window.location.href="?page=userandroid";
            </script>
<?php

}
