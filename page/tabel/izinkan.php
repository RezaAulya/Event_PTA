<?php 
    
$kode2 = $_GET['id_event1'];
$active = $_GET['active'];



// if (isset($_POST['izin'])){
//     $active = $_POST['active';]

    $sql= $koneksi->query("update tb_daftarevent SET active=1 WHERE id_event='$kode2'");

if ($sql){

?>
      <script type="text/javascript">
            alert("Data Berhasil di beri izin");
            window.location.href="?page=tabel";
        </script>
<?php
    // }
}

?>