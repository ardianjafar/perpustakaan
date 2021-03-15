<div class="card shadow">
    <div class="card-header">
        <h3>Detail Buku</h3>
    </div>
        <div class="card-body">
            <div class="form-group cols-sm-6">
                <a href="?url=buku_perpus" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
            </div>
        <form action="" method="post" enctype="multipart/form-data">
            <?php
            require '../koneksi.php';
            $sql = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku='$_GET[id]'");
            $data = mysqli_fetch_array($sql);
            if ($sql) {
            ?>     
                <div class="form-group cols-sm-6">
                    <label>Kode Buku</label>
                    <input type="text" name="kode_buku" value="<?php echo $data['kode_buku'] ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Jumlah Buku</label>
                    <input type="text" name="jumlah_buku" value="<?php echo $data['jumlah_buku'] ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Judul Buku</label>
                    <input type="text" name="judul_buku" value="<?php echo $data['judul_buku'] ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Kategori Buku</label>
                    <input type="text" name="kategori_buku" value="<?php echo $data['kategori_buku'] ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Keterangan</label>
                    <textarea class="form-control" rows="7" name="keterangan" readonly="">
                    <?php echo $data['keterangan']; ?>
                </textarea>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Foto Cover</label>
                    <div>
                        <img src="../foto/<?= $data['foto'] ?>" width=400>
                    </div>
                </div>
            <?php } ?>
        </form>
        </div>
</div>
