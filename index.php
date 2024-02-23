<?php
require 'functions.php';
$buku = query("SELECT * FROM buku");
$penerbit = query("SELECT * FROM penerbit");

if(isset($_POST['cari'])) {
    $buku = caribuku($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                        <a class="nav-link" aria-current="page" href="Admin.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pengadaan.php">Pengadaan</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" method="post" action="">
                    <input class="form-control me-2" type="search" placeholder="Cari Buku" aria-label="Search" name="keyword">
                    <button class="btn btn-outline-success" type="submit" name="cari">Cari</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="pertama">
        <h3> Tabel Buku</h3>
    </div>

    <div class="table-container">
        <table class="table" border="1" cellpadding="10" cellspacing="0">
            <tr class="table-light">

                <th>ID Buku</th>
                <th>Kategori</th>
                <th>Nama Buku</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Penerbit</th>
            </tr>

            <?php foreach ($buku as $row) : ?>
                <tr>

                    <td><?= $row["id_buku"] ?></td>
                    <td><?= $row["kategori_buku"] ?></td>
                    <td><?= $row["nama_buku"] ?></td>
                    <td><?= $row["harga_buku"] ?></td>
                    <td><?= $row["stok_buku"] ?></td>
                    <td><?= $row["penerbit_buku"] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="kedua">
        <h3> Tabel Penerbit</h3>
    </div>
    <div class="table-container">
        <table class="table" border="1" cellpadding="10" cellspacing="0">
            <tr class="table-light">

                <th>ID Penerbit</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Telepon</th>
            </tr>

            <?php foreach ($penerbit as $row) : ?>
                <tr>

                    <td><?= $row["id_penerbit"] ?></td>
                    <td><?= $row["nama_penerbit"] ?></td>
                    <td><?= $row["alamat_penerbit"] ?></td>
                    <td><?= $row["kota_penerbit"] ?></td>
                    <td><?= $row["telepon_penerbit"] ?></td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>