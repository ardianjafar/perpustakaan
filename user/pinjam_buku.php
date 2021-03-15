<?php 
require '../koneksi.php';

?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Pinjaman Buku</h6>
        </div>
        <div class="card-body">
            <div class="form-group cols-sm-6">
                <a href="?url=pilih_buku" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
            </div>
        <div class="table-responsive">
        <?php
        include '../koneksi.php';
        $id = $_GET['id_buku'];
        $sql = mysqli_query($conn, "SELECT * FROM buku INNER JOIN peminjaman ON buku.id_buku = $id AND peminjaman.id_peminjam");
        $data = mysqli_fetch_array($sql);
            if ($sql) {

            ?>

            

            <div class="content">
                <div class="form-group col-sm-12">
                    <label>Jumlah Buku</label>
                    <input type="text" name="jumlah_buku" value="<?php echo $data['jumlah_buku']; ?>" class="form-control" readonly="readonly">
                </div>
                <div class="form-group col-sm-12">
                    <label>Keterangan Buku</label>
                    <textarea class="form-control" rows="5" name="keterangan" readonly="readonly">
                        <?= $data['keterangan']; ?>
                    </textarea>
                </div>
                <div class="form-group col-sm-12">
                    <label>Cover Buku</label>
                    <div class="div">
                        <img src="../foto/<?= $data['foto']  ?>" width=150>
                    </div>
                </div>

                
            </div>
            <form action="proses_pinjam_buku.php" method="post" enctype="multipart/form-data">
            id buku
            <input class="form-control" type="text" name="id_buku_dipinjam" value="<?= $data['id_buku']; ?>" readonly="readonly">
            buku di pinjam
            <input class="form-control" type="text" name="buku_dpinjam" value="<?php echo $data['judul_buku']; ?>" readonly="readonly">
            id user
            <input class="form-control" type="text" name="id_user" value="<?php echo $_SESSION['id'] ?>" readonly="readonly">
            <input class="form-control" type="text" name="foto_dpinjam" value="<?php echo $data['foto'] ?>" readonly="readonly">
            kode buku
            <input class="form-control" type="text" name="kode_buku_dpinjam" value="<?php echo $data['kode_buku'] ?>" readonly="readonly">
            <input class="form-control" type="text" name="id_buku" value="<?php echo $data['id_buku'] ?>" readonly="readonly">
            
           
                <div class="form-group col-sm-12">
                    <label>Nama - Peminjam</label>
                    <input class="form-control" name="name" value="<?php echo $_SESSION['name'] ?>" readonly="readonly">
                </div>

                <div class="form-group col-sm-12">
                    <label>Nama</label>
                    <input class="form-control" type="text" name="nama"  placeholder="Masukkan username anda ...">
                </div>
                
                <div class="form-group col-sm-12">
                    <label for="cars">Kelas</label>
                        <select class="form-control" name="kelas" id="kelas">
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                </div>
                
                <div class="form-group col-sm-12">
                    <label for="cars">Jurusan</label> 
                        <select class="form-control" name="jurusan" id="jurusan">
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>    
                            <option value="Multimedia">Multimedia</option>    
                            <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>    
                            <option value="Akutansi">Akutansi</option>    
                            <option value="Pemasaran">Pemasaran</option>    
                        </select>
                </div>
                <div class="form-group col-sm-12">
                    <label>Tanggal - Pinjam</label>
                    <textarea name="tanggal_pinjam" rows="1" class="form-control" readonly="readonly">
                        <?= date('Y-m-d') ?>
                    </textarea>
                </div>
                <div class="form-group col-sm-12">
                    <label>Tanggal - Kembali</label>
                    <input class="form-control" type="date" name="tanggal_kembali" value=" <?php echo $data['tanggal_kembali'] ?>">
                </div>
                <div class="form-group col-sm-12">
                    <label>Jumlah Pinjaman</label>
                    <input type="number" class="form-control" name="jml_pinjaman">
                    <font color="red"> *data yang di masukkan tidak boleh lebih dari jumlah buku </font>
                </div>
                <div class="form-group col-sm-6">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</div>
