<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Buku Perpus</h6>
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
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require '../koneksi.php';
                    $no = 1;
                    $sql = mysqli_query($conn, "SELECT * FROM buku");
                    while ($data = mysqli_fetch_assoc($sql)) {

                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['kode_buku']; ?></td>
                            <td><?= $data['judul_buku']; ?></td>
                            <td><?= $data['kategori_buku']; ?></td>
                            <td><?= $data['jumlah_buku']; ?></td>
                            <td><?= $data['keterangan']; ?></td>
                            <td>
                                <!-- button -->
                                <a href="?url=detail_buku_perpus&id=<?= $data['id_buku']; ?>" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                    <span class="text">Detail</span>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>