<div class="row">
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    <!-- Jumlah Buku dalam database -->
                    Jumlah Buku Di Pinjam
                    <?php 
                    require '../koneksi.php';
                    $sql = mysqli_query($conn,"SELECT SUM(jml_pinjaman) FROM peminjaman WHERE status_peminjaman = 'd_setujui'");
                    $data = mysqli_fetch_array($sql);
                    if($data){  
                    
                    ?>
                </div>
                <?php 
                echo $data[0];
                } ?>
                </div>
                <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
            </div>
        </div>
    </div>

              <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Jumlah User Pinjam
                    <?php
                    require '../koneksi.php';
                    $sql = mysqli_query($conn,"SELECT SUM(status_peminjaman='d_setujui') FROM peminjaman WHERE status_peminjaman = 'd_setujui'");
                    $data = mysqli_fetch_array($sql);
                    if($sql){

                    ?>
                </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data[0]?></div>
                <?php } ?>
                </div>
                <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
        
</div>
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
