
<div class="card shadow">
        <div class="card-header">
            <h3>Tanggapan</h3>
        </div>
            
        <div class="card-body">
            <div class="form-group cols-sm-6">
                <a href="?url=halaman_pemberitahuan" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
            </div>

            <?php 
                require '../koneksi.php';
                $no = 1;
                $sql = mysqli_query($conn,"SELECT * FROM peminjaman WHERE status_peminjaman='d_setujui' AND id_peminjam='$_GET[id_peminjam]'");
                while($data = mysqli_fetch_array($sql))
                {
            ?>
            <form action="pemberitahuan/proses_pemberitahuan.php" method="post" enctype="multipart/form-data">
                    <?php error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE); ?>
                    <input type="hidden" name="nama" value="<?= $data['nama']; ?>" class="form-control" readonly>
                    <input type="hidden" name="id_user" value="<?= $data['id_user']; ?>" class="form-control" readonly> 
                <div class="form-group cols-sm-6">
                    <label>Nama Petugas</label>
                    <input type="text" name="nama_petugas" value="<?= $_SESSION['nama_petugas']; ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Tanggal Pemberitahuan</label>
                    <input type="text" name="tanggal_pemberitahuan" value="<?= date('Y-m-d') ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Tulis Pemberitahuan</label>
                    <textarea class="form-control" rows="7" name="pemberitahuan">
                        
                    </textarea>
                </div>
                <input type="submit" class="btn btn-danger btn-group-sm" value="Kirim!">
            </form>
            <?php } ?>
        </div>
</div>