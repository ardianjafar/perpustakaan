<?php 
require '../koneksi.php';

$id                     = $_GET['id_buku'];
$kode_buku              = $_POST['kode_buku'];
$judul_buku             = $_POST['judul_buku'];
$kategori_buku          = $_POST['kategori_buku'];
$jumlah_buku            = $_POST['jumlah_buku'];
$keterangan             = $_POST['keterangan'];
$foto                   = $_FILES['foto']['name'];
$file                   = $_FILES['foto']['tmp_name'];


                        // UPDATE `buku` SET `judul_buku` = 'judul', `keterangan` = 'keterangan ' WHERE `buku`.`id_buku` = 7;
$sql = mysqli_query($conn,"UPDATE buku SET kode_buku = $kode_buku, judul_buku = $judul_buku , kategori_buku = $kategori_buku , jumlah_buku = $jumlah_buku , keterangan = $keterangan , foto = $foto WHERE id_buku = $id ");
move_uploaded_file($file , "../foto/" . $foto);
var_dump($id,$kode_buku,$judul_buku,$kategori_buku,$jumlah_buku,$keterangan,$foto);