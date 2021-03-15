<?php
require '../koneksi.php';
$user = $_POST['username'];
$pass = $_POST['password'];
$sql = mysqli_query($conn, "SELECT * FROM peminjam where username='$user' and password='$pass'");
$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $data = mysqli_fetch_array($sql);
    session_start();
    $_SESSION['id'] = $data['id'];
    $_SESSION['name'] = $data['name'];
    $_SESSION['name'] = $user;
    $_SESSION['password'] = $data;
    header('location:index.php');
} else { ?>
    <script type="text/javascript">
        alert('Anda belum terdaftar,silahkan daftar dulu');
        window.location = "login.php";
    </script>
<?php
}
?>