<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    switch ($url) {
        case 'user_pinjam';
            include 'user_pinjam.php';
            break;
        case 'semua_user';
            include 'semua_user.php';
            break;
        case 'buku_perpus';
            include 'buku_perpus.php';
            break;
        case 'kirim_pemberitahuan';
            include 'pemberitahuan/kirim_pemberitahuan.php';
            break;
        case 'detail_buku_perpus';
            include 'detail_buku_perpus.php';
            break;
        case 'detail_buku_dpinjam';
            include 'buku-dpinjam/detail_buku_dpinjam.php';
            break;
        case 'setujui_pinjaman';
            include 'buku-dpinjam/proses_dsetujui.php';
            break;
        case 'tolak_pinjaman';
            include 'buku-dpinjam/detail_buku_pinjaman.php';
            break;
        case 'halaman_riwayat';
            include 'halaman_riwayat.php';
            break;
        case 'halaman_pemberitahuan';
            include 'pemberitahuan/halaman_pemberitahuan.php';
            break;
        
        

        
    }
} else {
    ?>
    <div class="row">
              <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-6 col-md-3 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                  <!-- Jumlah Buku dalam database -->
                  Buku Di Perpus
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
      <div class="col-xl-6 col-md-3 mb-4">
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
    </div>

    <div class="container-fluid">
      <div class="row">
       <div class="col-xl-6">
          <div class="card">
            <div class="card-header">
              Menampilkan data persetujuan (belum bisa sesuai id)
            </div>
            <div class="card-body">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Tanggal Pinjam</th>
                      <th>Jumlah Buku</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      require '../koneksi.php';
                      $no = 1;
                      $sql = mysqli_query($conn,"SELECT * FROM peminjaman WHERE status_peminjaman='proses'");
                      while($data = mysqli_fetch_array($sql))
                      {
                    ?>
                    <tr>
                      <td><?= $no++;?></td>
                      <td><?= $data['nama'] ?></td>
                      <td><?= $data['tanggal_kembali'] ?></td>
                      <td><?= $data['jml_pinjaman']?></td>
                      
                      <td>
                        <!-- button -->
                        <a href="?url=detail_buku_dpinjam&id=<?php echo $data['id_peminjam'] ?>" class="btn btn-success btn-icon-split">
                          <span class="icon text-white-50">
                              <i class="fas fa-info"></i>
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
       
        <div class="col-xl-6">
          <div class="card">
            <div class="card-header">
              Menampilkan data buku yang harus di kembalikan
            </div>
            <div class="card-body">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Peminjam</th>
                      <th>Kelas</th>
                      <th>Jumlah Buku</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      require '../koneksi.php';
                      $no = 1;
                      $sql = mysqli_query($conn,"SELECT * FROM peminjaman WHERE status_peminjaman='d_setujui'");
                      while($data = mysqli_fetch_array($sql))
                      {
                    ?>
                    <tr>
                      <td><?= $no++;?></td>
                      <td><?php echo $data['nama']?></td>
                      <td><?= $data['tanggal_kembali'] ?></td>
                      <td><?= $data['jml_pinjaman']?></td>
                      
                      <td>
                        <!-- button -->
                        <a href="?url=kirim_pemberitahuan&id_peminjam=<?php echo $data['id_peminjam']?>" class="btn btn-small btn-danger btn-icon-split">
                          <span class="icon text-white-50">
                              <i class="fas fa-info"></i>
                          </span>
                          <span class="text">Konfirmasi</span>
                          </a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
        <!-- End Program -->
      </div>
    </div>
    <?php 
}
