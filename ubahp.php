<?php
require 'functions.php';

$id_penerbit = $_GET["id"];
$pnb = query("SELECT * FROM penerbit WHERE id = $id_penerbit")[0];

if (isset($_POST["submit"])) {
    if (ubahp($_POST) > 0) {
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
        <h3>Form Ubah Penerbit</h3>
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $pnb["id"] ?>">
                    <div class="mb-3">
                        <label for="id_penerbit" class="form-label">ID Penerbit:</label>
                        <input type="text" class="form-control" id="id_penerbit" name="id_penerbit" required value="<?= $pnb["id_penerbit"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama_penerbit" class="form-label">Nama Penerbit:</label>
                        <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" required value="<?= $pnb["nama_penerbit"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat_penerbit" class="form-label">Alamat Penerbit:</label>
                        <input type="text" class="form-control" id="alamat_penerbit" name="alamat_penerbit" required value="<?= $pnb["alamat_penerbit"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kota_penerbit" class="form-label">Kota Penerbit:</label>
                        <input type="text" class="form-control" id="kota_penerbit" name="kota_penerbit" required value="<?= $pnb["kota_penerbit"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="telepon_penerbit" class="form-label">Telepon Penerbit:</label>
                        <input type="text" class="form-control" id="telepon_penerbit" name="telepon_penerbit" required value="<?= $pnb["telepon_penerbit"] ?>">
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