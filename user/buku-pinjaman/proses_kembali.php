<?php 
$connect = require '../koneksi.php';

$id_user = $_GET['id'];
$sql = mysqli_query($conn, "UPDATE `peminjaman` SET `status_peminjaman` = 'd_perpus' WHERE `peminjaman`.`id_peminjam` = $id_user");


var_dump($id_user,$connect);
if($sql){
    ?>
    <script type="text/javascript">
        alert('Buku berhasil di kembalikan');
        window.location = "?url=pilih_buku";
    </script>
    <?php
}


