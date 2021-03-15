<?php
require '../koneksi.php';
// $id                 = $_POST['id'];
// $id_buku            = $_GET['id_buku'];     
$id_buku_dipinjam   = $_POST['id_buku_dipinjam'];
$buku_dpinjam       = $_POST['buku_dpinjam'];
$foto               = $_POST['foto_dpinjam'];
$kode_buku          = $_POST['kode_buku_dpinjam'];
$id_user            = $_POST['id_user'];
$nama               = $_POST['nama'];
$kelas              = $_POST['kelas'];
$jurusan            = $_POST['jurusan'];
$tgl_pinjam         = $_POST['tanggal_pinjam'];
$tgl_kembali        = $_POST['tanggal_kembali'];
$jml_pinjam         = $_POST['jml_pinjaman'];

var_dump($id_buku_dipinjam,$buku_dpinjam,$foto,$kode_buku,$id_user,$nama,$kelas,$jurusan,$tgl_pinjam,
$tgl_kembali,$jml_pinjam);

$sql = mysqli_query($conn,"INSERT INTO peminjaman (id_buku_dipinjam,buku_dpinjam,foto_dpinjam,kode_buku_dpinjam,id_user,nama,kelas,jurusan,tanggal_pinjam, tanggal_kembali, jml_pinjaman)
 VALUES ('$id_buku_dipinjam','$buku_dpinjam','$foto','$kode_buku','$id_user','$nama','$kelas','$jurusan','$tgl_pinjam','$tgl_kembali','$jml_pinjam')");
//$update = mysqli_query($conn,"UPDATE `buku` SET `level` = 'd_proses' WHERE `buku`.`id_buku` = $id_buku");
 if($sql){
    ?>
    <script type="text/javascript">
         alert('Permintaan akan di proses');
         window.location = "index.php?url=pilih_buku";
     </script>  
     <?php
}


