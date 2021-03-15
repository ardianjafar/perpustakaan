<div class="card shadow">
    <div class="card-header">
        <h3>Detail Buku</h3>
    </div>
    <div class="card-body">
        <div class="form-group cols-sm-6">
            <a href="?url=user_pinjam" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
            </a>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <?php
            require '../koneksi.php';
            $id = $_GET['id_peminjam'];
            $sql = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_peminjam = $id");
            $data = mysqli_fetch_array($sql);
            if ($sql) {
            ?>
                <div class="form-group cols-sm-6">
                    <label>Nama</label>
                    <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" readonly="readonly">
                </div>
                <div class="form-group cols-sm-6">
                    <label>Tanggal Pinjam</label>
                    <input type="text" name="tanggal_pinjam" value="<?php echo $data['tanggal_pinjam'] ?>" class="form-control" readonly="readonly">
                </div>
                <div class="form-group cols-sm-6">
                    <label>Tanggal Kembali</label>
                    <input type="text" name="tanggal_kembali" value="<?php echo $data['tanggal_kembali'] ?>" class="form-control" readonly="readonly">
                </div>
                <div class="form-group cols-sm-6">
                    <label>Jumlah Pinjam</label>
                    <input type="text" name="jml_pinjaman" value="<?php echo $data['jml_pinjaman'] ?>" class="form-control" readonly="readonly">
                </div>
                <div class="form-group cols-sm-6">
                    <label>Keterangan</label>
                    <textarea class="form-control" rows="7" name="buku_dpinjam" readonly="readonly">
                    <?php echo $data['buku_dpinjam']; ?>
                </textarea>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Foto Cover</label>
                    <div>
                        <img src="../foto/<?= $data['foto_dpinjam'] ?>" width=400>
                    </div>
                </div>
            <?php } ?>
        </form>
    </div>
</div>
