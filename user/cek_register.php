<?php
require '../koneksi.php';

$nama = $_POST['name'];
$user = $_POST['username'];
$pass = $_POST['password'];
$alamat = $_POST['alamat'];

$sql  = mysqli_query($conn, "INSERT INTO `peminjam` (`name`, `username`, `password`, `alamat`) VALUES ('$nama', '$user', '$pass', '$alamat');");

if($sql){
    ?>
    <script type="text/javascript">
        alert('Data berhasil ditambahkan, silahkan gunakan untuk login');
        window.location = "login.php";
    </script>
    <?php
}