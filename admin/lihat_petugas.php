<div id="wrapper">
  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Halaman Petugas</h1>
          <a href="cetak_petugas.php" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
            ><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <!-- Content Row -->
        <div class="row">
          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                      <!-- Jumlah Buku dalam database -->
                      Jumlah Petugas
                      <?php 
                        require '../koneksi.php';
                        $sql = mysqli_query($conn,"SELECT COUNT(id) FROM petugas");
                        $data = mysqli_fetch_array($sql);
                        if($sql){
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
                      <!-- Jumlah buku yang di pinjam -->
                      Jumlah User
                      <?php 
                        require '../koneksi.php';
                        $sql = mysqli_query($conn,"SELECT COUNT(id) FROM peminjam");
                        $data = mysqli_fetch_array($sql);
                        if($sql){
                      ?>
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                    echo $data[0];
                  } ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow">
          <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <div class="d-sm-flex justify-content-between mb-4">
                  <button
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                    class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> Tambah data Petugas
                  </button>
                </div>
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Telp</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Jadi Petugas</th>
                  </tr>
                </thead>

                <tbody>
                <?php 
                  require '../koneksi.php';
                  $sql = mysqli_query($conn,"SELECT * FROM petugas");
                  while($data = mysqli_fetch_array($sql)){
                ?>
                  <tr>
                    <td><?= $data['nama_petugas'] ?></td>
                    <td><?= $data['telp'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['level'] ?></td>
                    <td><?= $data['jenis_kelamin'] ?></td>
                    <td><?= $data['tgl_jadipetugas'] ?></td>
                    
                    
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="staticBackdrop"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Petugas</h5>
          </div>
          <div class="modal-body">
            <form action="tambah_petugas.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label>Nama Petugas</label>
                <input type="text" name="nama_petugas" value="" class="form-control" />
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" value="" class="form-control" />
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" value="" class="form-control" />
              </div>
              <div class="form-group">
                <label>Telp</label>
                <input type="text" name="telp" value="" class="form-control" />
              </div>
              <div class="form-group">
                <label for="cars">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
              </div>
              <div class="form-group">
                <label>Tanggal Jadi Petugas</label>
                <input type="date" name="tgl_jadipetugas" value="<?php echo date('d-m-Y')?>" class="form-control" />
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" value="" class="form-control" />
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="../bootstrap/js/bootstrap.min.js"></script>