<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Buku</title>
</head>
<body>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Buku Di Pinjam</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Kategori Buku</th>
                        <th>Jumlah Buku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    require '../koneksi.php';
                    //$sql = mysqli_query($conn, "INSERT INTO tanggapan(id_pengaduan,tgl_pengaduan,tanggapan,id_petugas) VALUES('$id_pengaduan','$tgl','$tanggapan','$id_petugas')");
                    //$update_st = mysqli_query($conn, "update pengaduan set status='$st' where id_pengaduan='$id_pengaduan'");
                    $no = 1;
                    // belum bisa mendapatkan id dari database
                    $id_user = $_SESSION['id'];
                    $sql = mysqli_query($conn, "SELECT * FROM peminjaman WHERE status_peminjaman='d_setujui' AND id_user= $id_user");
                    while ($data = mysqli_fetch_array($sql)) {

                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['tanggal_pinjam']; ?></td>
                            <td><?= $data['tanggal_kembali']; ?></td>
                            <td><?= $data['jml_pinjaman']; ?></td>
                            
                            <td>
                                <!-- button -->
                                <a href="?url=detail_buku_pinjaman&id=<?php echo $data['id_peminjam']?>" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-info"></i>
                                    </span>
                                    <span class="text">Detail</span>
                                </a>

                                <a href="?url=proses_kembali&id=<?php echo $data['id_peminjam']?>" class="btn btn-warning btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                    <span class="text">Kembalikan</span>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="../template/vendor/jquery/jquery.min.js"></script>
<script src="../template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../template/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../template/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../template/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../template/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="../template/js/demo/datatables-demo.js"></script>
</body>
</html>