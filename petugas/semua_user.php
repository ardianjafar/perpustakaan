<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Semua User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require '../koneksi.php';
                    $no = 1;
                    $sql = mysqli_query($conn, "SELECT * FROM peminjam");
                    while ($data = mysqli_fetch_assoc($sql)) {

                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['username']; ?></td>
                            <td><?= $data['name']; ?></td>
                            <td><?= $data['alamat']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
