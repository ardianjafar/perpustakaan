<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    switch ($url) {
        case 'pilih_buku';
            include 'pilih_buku.php';
            break;
        case 'buku_pinjaman';
            include 'buku-pinjaman/buku_pinjaman.php';
            break;
        case 'detail_buku';
            include 'detail_buku.php';
            break;
        case 'pinjam_buku';
            include 'pinjam_buku.php';
            break;
        case 'detail_buku_pinjaman';
            include 'buku-pinjaman/detail_buku_pinjaman.php';
            break;
        case 'proses_kembali';
            include 'buku-pinjaman/proses_kembali.php';
            break;
        case 'detail_akan_pinjam';
            include_once 'akan_dpinjam/detail_akan_dpinjam.php';
            break;
        case 'pemberitahuan';
            include 'pemberitahuan.php';
            break;
        case 'batalkan_pinjaman';
            include 'akan_dpinjam/batalkan_peminjaman.php';
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
                  Data semua buku di perpus
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
              Menampilkan buku yang akan di pinjam (Proses)
            </div>
            <div class="card-body">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Pinjam</th>
                      <th>Tanggal Kembali</th>
                      <th>Jml Pinjam</th>
                     
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      require '../koneksi.php';
                      $no = 1;
                      $id_user = $_SESSION['id'];
                      //SELECT * FROM buku AS b INNER JOIN peminjaman AS p ON b.id_buku = p.id_peminjam
                      $sql = mysqli_query($conn,"SELECT * FROM peminjaman WHERE status_peminjaman='proses' AND id_user= $id_user");
                      while($data = mysqli_fetch_array($sql))
                      {
                    ?>
                    <tr>
                      <td><?= $no++;?></td>
                      <td><?= $data['tanggal_pinjam']?></td>
                      <td><?= $data['tanggal_kembali'] ?></td>
                      <td><?= $data['jml_pinjaman']?></td>
                     
                      
                      <td>
                        <!-- button --> 
                        
                        <a href="?url=detail_akan_pinjam&id=<?= $data['id_peminjam'] ?>" class="btn btn-success btn-icon-split">
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
                      <th>Nama</th>
                      <th>Tgl Pinjam</th>
                      <th>Tgl Kembali</th>
                      <th>Jumlah Pinjam</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      require '../koneksi.php';
                      $no = 1;
                      $id_user = $_SESSION['id'];
                      $sql = mysqli_query($conn,"SELECT * FROM peminjaman WHERE status_peminjaman='d_setujui' AND id_user= $id_user");
                      while($data = mysqli_fetch_array($sql))
                      {
                    ?>
                    <tr>
                      <td><?= $no++;?></td>
                      <td><?= $data['nama']?></td>
                      <td><?= $data['tanggal_pinjam']?></td>
                      <td><?= $data['tanggal_kembali'] ?></td>
                      <td><?= $data['jml_pinjaman']?></td>
                      
                      <td>
                        <!-- button -->
                        <a href="?url=proses_kembali&id=<?= $data['id_peminjam']?>" class="btn btn-danger btn-icon-split">
                          <span class="icon text-white-50">
                              <i class="fas fa-info"></i>
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
      </div>
    </div>

    <!-- Kembali -->
    <?php
}
