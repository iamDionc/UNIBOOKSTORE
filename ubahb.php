<?php
require 'functions.php';

$id_buku = $_GET["id"];

$bk = query("SELECT * FROM buku WHERE id = $id_buku")[0];

if (isset($_POST["submit"])) {
    if (ubahb($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diubah');
        document.location.href ='Admin.php';
        </script>
        ";
    } else {
        echo " 
        <script>
        alert('data gagal diubah');
        document.location.href ='Admin.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah data</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark mb-20">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-current="page" href="Admin.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-current="page" href="pengadaan.php">Pengadaan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h3>Form Edit Buku</h3>
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                <input type="hidden" name="id" value="<?= $bk["id"] ?>">
                    <div class="mb-3">
                        <label for="id_buku" class="form-label">ID Buku:</label>
                        <input type="text" class="form-control" id="id_buku" name="id_buku" required value="<?= $bk["id_buku"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kategori_buku" class="form-label">Kategori Buku:</label>
                        <input type="text" class="form-control" id="kategori_buku" name="kategori_buku" required value="<?= $bk["kategori_buku"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama_buku" class="form-label">Nama Buku:</label>
                        <input type="text" class="form-control" id="nama_buku" name="nama_buku" required value="<?= $bk["nama_buku"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="harga_buku" class="form-label">Harga Buku:</label>
                        <input type="text" class="form-control" id="harga_buku" name="harga_buku" required value="<?= $bk["harga_buku"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="stok_buku" class="form-label">Stok Buku:</label>
                        <input type="text" class="form-control" id="stok_buku" name="stok_buku" required value="<?= $bk["stok_buku"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="penerbit_buku" class="form-label">Penerbit Buku:</label>
                        <input type="text" class="form-control" id="penerbit_buku" name="penerbit_buku" required value="<?= $bk["penerbit_buku"] ?>">
                    </div>
                    <div>
                        <button type="submit" name="submit" class="btn btn-primary">Ubah</button>
                        <a class="btn btn-danger" href="Admin.php" role="button">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>