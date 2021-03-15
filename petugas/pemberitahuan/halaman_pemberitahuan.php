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
                        <th>Nama</th>
                        <th>Tanggal - Pemberitahuan</th>
                        <th>Pemberitahuan</th>
                        <th>Aksi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require '../koneksi.php';
                    $no = 1;
                    
                    $sql = mysqli_query($conn, "SELECT * FROM pemberitahuan");
                    while ($data = mysqli_fetch_assoc($sql)) {

                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['tanggal_pemberitahuan']; ?></td>
                            <td><?= $data['pemberitahuan']; ?></td>
                            <td>
                                
                                <a href="pemberitahuan/hapus_pemberitahuan.php?id=<?php echo $data['id_user']?>" class="btn btn-small btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Hapus</span>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
