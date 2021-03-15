<?php
            require '../koneksi.php';
            //SELECT * FROM buku AS u INNER JOIN peminjam AS i ON u.id_buku= i.id
            $id = $_GET['id'];
            $sql = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_peminjam = $id");
            $data = mysqli_fetch_array($sql);
            if ($sql) {
            ?>
<div class="card shadow">
    <div class="card-header">
        <h3>Detail Buku</h3>
    </div>
    <div class="card-body mb-5">
        <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="jml_pinjaman">Jumlah Pinjaman</label>
                    <input type="text" name="jml_pinjaman" value="<?= $data['jml_pinjaman'] ?>" class="form-control" readonly="readonly" >
                </div>
                <div class="form-group">
                    <label for="tanggal_pinjam">Tanggal Pinjam</label>
                    <input type="text" name="tanggal_pinjam" value="<?= $data['tanggal_pinjam'] ?>" class="form-control" readonly="readonly" >
                </div>

                <div class="form-group">
                    <label for="tanggal_pinjam">Tanggal Kembali</label>
                    <input type="text" name="tanggal_kembali" value="<?= $data['tanggal_kembali'] ?>" class="form-control" readonly="readonly" >
                </div>
                
                <div>
                    <label>Kode Buku</label>
                    <div class="form-group cols-sm-6">
                    <input type="text" name="kode_buku_dpinjam" value="<?php echo $data['kode_buku_dpinjam'] ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Keterangan</label>
                    <textarea class="form-control" rows="3" name="buku_dpinjam" readonly="readonly">
                    <?php echo $data['buku_dpinjam']; ?>
                </textarea>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Bukti Foto</label>
                    <div>
                        <img src="../foto/<?= $data['foto_dpinjam'] ?>" width=400>
                    </div>
                </div>

                <div class="form-group cols-sm-6">
                <a href="index.php" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
                
                <a href="?url=batalkan_pinjaman&id=<?php echo $data['id_peminjam']?>" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Batalkan Pinjaman</span>
                </a>
                
            </div>
        </form>
    </div>
</div>
<?php } ?>
