<?php 
    
$kode2 = $_GET['id_event1'];

$sql= $koneksi->query("delete from tb_daftarevent where id_event='$kode2'");



if (sql){

?>

      <script type="text/javascript">
                alert("Data Berhasil Di Hapus");
                window.location.href="?page=tabel";
            </script>
<?php

}

?>