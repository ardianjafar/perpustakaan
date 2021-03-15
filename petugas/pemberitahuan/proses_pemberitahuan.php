<?php 
require '/xampp/htdocs/second_app/koneksi.php';

$nama       = $_POST['nama'];
$id_user    = $_POST['id_user'];
$tanggal    = $_POST['tanggal_pemberitahuan'];
$info       = $_POST['pemberitahuan'];
$petugas    = $_POST['nama_petugas'];

$sql = mysqli_query($conn,"INSERT INTO pemberitahuan(nama,id_user,tanggal_pemberitahuan,pemberitahuan,nama_petugas) VALUES('$nama','$id_user','$tanggal','$info','$petugas')");
if($sql){
    ?>
    <script type="text/javascript">
        alert('Konfirmasi terkirim');
        window.location = "../petugas.php?url=halaman_pemberitahuan";
    </script>
    <?php
}

