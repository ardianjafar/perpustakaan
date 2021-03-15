<div class="card shadow">
        <div class="card-header">
            <h3>Halaman Pemberitahuan</h3>
        </div>
            
        <div class="card-body">
            <form action="" class="">
            <?php 
                require '../koneksi.php';
                $no = 1;
                $id = $_SESSION['id'];
                $sql = mysqli_query($conn,"SELECT * FROM pemberitahuan WHERE nama = $id");
                while($data = mysqli_fetch_array($sql))
                {
            ?>
                <div class="form-group cols-sm-6">
                    <label>Nama Petugas</label>
                    <input type="text" name="nama_petugas" value="<?= $data['nama_petugas']; ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Nama Petugas</label>
                    <input type="text" name="nama" value="<?= $data['nama']; ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Tanggal Pemberitahuan</label>
                    <input type="text" name="tanggal_pemberitahuan" value="<?= $data['tanggal_pemberitahuan'] ?>" class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Pemberitahuan</label>
                    <textarea class="form-control" rows="7" name="pemberitahuan" readonly="readonly">
                        <?php echo  $data['pemberitahuan'] ?>
                    </textarea>
                </div>
            <?php } ?>
            </form>
        </div>
</div>