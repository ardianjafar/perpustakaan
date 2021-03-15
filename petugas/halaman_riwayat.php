<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Riwayat Data Buku Pinjaman</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Peminjam</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Jumlah Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status Peminjaman</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    require '../koneksi.php';
                    $no = 1;
                    $sql = mysqli_query($conn, "SELECT * FROM peminjaman WHERE status_peminjaman");
                    while ($data = mysqli_fetch_assoc($sql)) {

                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['kelas']; ?></td>
                            <td><?= $data['jurusan']; ?></td>
                            <td><?= $data['jml_pinjaman']; ?></td>
                            <td><?= $data['tanggal_pinjam']; ?></td>
                            <td><?= $data['tanggal_kembali']; ?></td>
                            <td><?= $data['status_peminjaman']; ?></td>
                            
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>