<?php 
    
$kode2 = $_GET['id_event1'];
$active = $_GET['active'];


    $sql2= $koneksi->query("update tb_daftarevent SET active=0 WHERE id_event='$kode2'");

if ($sql2){

?>
      <script type="text/javascript">
            alert("Data Tidak di beri izin");
            window.location.href="?page=tabel";
        </script>
<?php
}

?>