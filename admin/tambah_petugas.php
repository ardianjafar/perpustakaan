<?php 
require '../koneksi.php';

$nama = $_POST['nama_petugas'];
$username = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tgl_jadipetugas = $_POST['tgl_jadipetugas'];

                            //INSERT INTO `petugas` (`id`, `nama_petugas`, `username`, `password`, `telp`, `jenis_kelamin`, `alamat`, `tgl_jadipetugas`, `level`) VALUES ('3', 'Petugas', 'petugas', '1234', '0858', 'Laki-Laki', 'mbakal', '2021-03-14', 'petugas');
$sql = mysqli_query($conn,"INSERT INTO petugas(id,nama_petugas,username,password,telp,jenis_alamat) VALUES(NULL,'$nama',
'$username','$pass','$telp','$alamat')");

var_dump($nama,$username,$pass,$telp,$alamat,$jenis_kelamin,$tgl_jadipetugas);

if($sql){
    ?>
    <script type="text/javascript">
        alert('Petugas berhasil di tambahkan');
        window.location = "?url=lihat_petugas";
    </script>
    <?php
}