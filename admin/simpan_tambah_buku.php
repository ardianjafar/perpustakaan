<?php 
    require '../koneksi.php';
    $kode_buku                 = $_POST['kode_buku'];
    $judul_buku                = $_POST['judul_buku'];
    $kategori_buku             = $_POST['kategori_buku'];
    $jumlah_buku               = $_POST['jumlah_buku'];
    $keterangan                = $_POST['keterangan'];
    $foto                      = $_FILES['foto']['name'];
    $file                      = $_FILES['foto']['tmp_name'];
    
    $sql = mysqli_query($conn,"INSERT INTO buku (id_buku,kode_buku,judul_buku,kategori_buku,jumlah_buku,keterangan,foto) VALUES (NULL,'$kode_buku','$judul_buku','$kategori_buku','$jumlah_buku','$keterangan','$foto')");
    move_uploaded_file($file , "../foto/" . $foto);


    if($sql){
       ?>
       <script type="text/javascript">
        alert('Data buku berhasil ditambahkan');
        window.location = "admin.php";
       </script>
<?php
    }
    