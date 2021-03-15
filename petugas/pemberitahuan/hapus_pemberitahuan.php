<?php
require '/xampp/htdocs/second_app/koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($conn,"DELETE FROM `pemberitahuan` WHERE `pemberitahuan`.`id` = '$id'");

var_dump($id);

if($sql){
    ?>
    <script type="text/javascript">
        alert('Pemberitahuan berhasil di hapus');
        window.location.href = "../petugas.php?url=halaman_pemberitahuan";
    </script>
    <?php
    
}