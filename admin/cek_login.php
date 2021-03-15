<?php
require '../koneksi.php';
$user = $_POST['username'];
$pass = $_POST['password'];
$id_peminjam = $_POST['id_peminjam'];
$sql = mysqli_query($conn, "SELECT * FROM petugas where username='$user' and password='$pass'");
$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $data = mysqli_fetch_array($sql);
    if ($data['level'] == "admin") {
        session_start();
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $user;
        $_SESSION['nama_petugas'] = $data['nama_petugas'];
        $_SESSION['level'] = $data['level'];
        header("Location: admin.php");
    } else if ($data['level'] == "petugas") {
        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['nama_petugas'] = $data['nama_petugas'];
        $_SESSION['level'] = $data['level'];
        header("Location: ../petugas/petugas.php");
    }
} else { ?>
    <script type="text/javascript">
        alert('Username atau Password tidak di temukan');
        window.location = "login.php";
    </script>
<?php
}
?>

<!--  -->
