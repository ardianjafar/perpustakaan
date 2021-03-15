<?php
error_reporting(E_ALL & ~E_NOTICE);
require '/xampp/htdocs/second_app/koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($conn,"UPDATE `peminjaman` SET `status_peminjaman` = 'd_batalkan' WHERE `peminjaman` . `id_peminjam` = $id");

if($sql){
    ?>
    <script type="text/javascript">
        alert('Data berhasil di hapus');
        window.location = "index.php?url=pilih_buku";
    </script>
    <?php
}