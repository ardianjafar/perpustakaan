<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel=" 65314stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
    <title>Cetak Laporan</title>
  </head>
  <body>
    <!-- header -->
    
    <!-- endheader -->
    <div class="card">
        <div class="card-header">
            <div class="text-center">
                <h1>Laporan Data Petugas </h1>
                <h3>PERPUSTAKAAN SMKISBA</h3>
                <h6>Jl. Stadion Barat, Sisir, Kec. Batu, Kota Batu 65314</h6>
                <br>
            </div>
        </div>
        <div class="card-body">
        <table class="table table-bordered border border-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Petugas</th>
                    <th>Username</th>
                    <th>Telp</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Tanggal Jadi Petugas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require '../koneksi.php';
                $no = 1;
                $sql = mysqli_query($conn, "SELECT * FROM petugas");
                while ($data = mysqli_fetch_assoc($sql)) {

                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['nama_petugas']; ?></td>
                        <td><?= $data['username']; ?></td>
                        <td><?= $data['telp']; ?></td>
                        <td><?= $data['jenis_kelamin']; ?></td>
                        <td><?= $data['alamat']; ?></td>
                        <td><?= $data['tgl_jadipetugas']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
    <br>
        <div class="text-end px-3">
            <h5> Malang, <?php echo date('Y-m-d'); ?></h5><br><br><br>
        </div>
        <br>
        <h6 class="text-end px-3">
            Admin
        </h6>
        </div>
    </div>
    

  <script src="../bootstrap/js/cetak.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>