<?php 
require '/xampp/htdocs/second_app/koneksi.php';

$id  = $_GET['id'];
//$id_buku = $_GET[''];
$sql = mysqli_query($conn,"UPDATE `peminjaman` SET `status_peminjaman` = 'd_setujui' WHERE `peminjaman`.`id_peminjam` = $id");
//$update = mysqli_query($conn,"UPDATE `buku` SET `level` = 'd_pinjam' WHERE `buku`.`id_buku` = $id_buku");

if($sql){
    ?>
    <script type="text/javascript">
        alert('Data berhasil di setujui');
        window.location = "petugas.php?url=buku_perpus";
    </script>
    <?php
}

?>
