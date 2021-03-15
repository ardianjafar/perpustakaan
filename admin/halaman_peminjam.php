<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    switch ($url) {
        case 'halaman_admin';
            include 'halaman_peminjam.php';
            break;
        case 'user_pinjam';
            include 'user_pinjam.php';
            break;
        case 'semua_user';
            include 'semua_user.php';
            break;
        case 'detail_buku_dpinjam';
            include 'buku-dpinjam/detail_buku_pinjaman.php';
            break;
        case 'lihat_petugas';
            include 'lihat_petugas.php';
            break;
        case 'edit_buku';
            include 'edit_buku.php';
            break;
        
        
    }
} else {
    ?>
      <div class="row">
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          <!-- Jumlah Buku dalam database -->
                          Jumlah Buku
                          <?php 
                          require '../koneksi.php';
                            $sql = mysqli_query($conn,"SELECT SUM(jumlah_buku) FROM buku");
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
                        Buku Di Pinjam
                         <?php
                            require '../koneksi.php';
                            $sql = mysqli_query($conn,"SELECT SUM(jml_pinjaman) FROM peminjaman WHERE status_peminjaman='d_setujui'");
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

              <!-- Earnings (Monthly) Card Example -->
             

            <div class="container-fluid">
            <div class="card shadow">
              <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Data Tabel Buku</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div class="d-sm-flex  justify-content-between mb-4">
                      <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-white-50"></i> Tambah data buku</button>
                    </div>
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Jumlah</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>

                    <tbody class="text-center">
                        <?php  
                          require '../koneksi.php';
                          $no = 1;
                          $sql = mysqli_query($conn,"SELECT * FROM buku");
                          while($data = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['kode_buku']; ?></td>
                            <td><?= $data['judul_buku']; ?></td>
                            <td><?= $data['jumlah_buku']; ?></td>
                            <td><?= $data['kategori_buku']; ?></td>
                            <td>
                                <!-- admin.php?url=edit_petugas&id=<?= $data['id_petugas']; ?> -->
                                <a href="?url=edit_buku&id_buku=<?php echo $data['id_buku']; ?>" class="btn btn-primary btn-circle"">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                            <?php
                          }
                            ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Buku</h5>
              </div>
              <div class="modal-body">
                <form action="simpan_tambah_buku.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Kode Buku</label>
                    <input type="text" name="kode_buku"  class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" name="judul_buku"  class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Kategori Buku</label>
                    <input type="text" name="kategori_buku" value="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Jumlah Buku</label>
                    <input type="text" name="jumlah_buku" value="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" value="" class="form-control">
                  </div>
                  <div class="form-group cols-sm-6">
                    <label>Unggah Foto</label>
                    <input type="file" name="foto" accept=".jpg, .jpeg, .png, .gif" class="form-control">
                    <font color="red"> *tipe yang bisa di upload adalah : .jpg, .jpeg, .png, .gif </font>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Tambah">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="../bootstrap/js/bootstrap.min.js"></script>
    <?php 
}
