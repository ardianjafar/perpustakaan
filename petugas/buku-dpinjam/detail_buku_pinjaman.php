<div class="card shadow">
    <div class="card-header">
        <h3>Detail Buku</h3>
    </div>
        <div class="card-body">
            <div class="form-group cols-sm-6">
                <a href="petugas.php" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>

                <a href="?url=setujui_pinjaman" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Tolak</span>
                </a>

                <a href="buku-dpinjam/proses_dsetujui.php" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Setujui</span>
                </a>
            </div>
        <form action="" method="post" enctype="multipart/form-data">
            <?php
            include '../koneksi.php';
            //SELECT * FROM buku AS u INNER JOIN peminjaman AS i ON u.id_buku= i.id_peminjam
           
            $sql = mysqli_query($conn, "SELECT * FROM buku AS u INNER JOIN peminjaman AS i ON u.id_buku= i.id_peminjam WHERE id_peminjam = '$_GET[id]'");
            $data = mysqli_fetch_array($sql);
            if ($sql) {
            ?>  <div class="form-group cols-sm-6">
                    <label>Nama Peminjam</label>
                    <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" readonly="readonly">
                </div>
                <div class="form-group cols-sm-6">
                    <label>Nama Peminjam</label>
                    <input type="text" name="kelas" value="<?php echo $data['kelas'] ?>" class="form-control" readonly="readonly">
                </div>
                <div class="form-group cols-sm-6">
                    <label>Nama Peminjam</label>
                    <input type="text" name="jurusan" value="<?php echo $data['jurusan'] ?>" class="form-control" readonly="readonly">
                </div>
                <div class="form-group cols-sm-6">
                    <label>Kode Buku</label>
                    <input type="text" name="kode_buku" value="<?php echo $data['kode_buku'] ?>" class="form-control" readonly="readonly">
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
                    <textarea class="form-control" rows="7" name="keterangan" readonly="readonly">
                    <?php echo $data['keterangan']; ?>
                </textarea>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Bukti Foto</label>
                    <div>
                        <img src="../foto/<?= $data['foto'] ?>" width=400>
                    </div>
                </div>
            <?php } ?>
        </form>
    </div>
</div>
