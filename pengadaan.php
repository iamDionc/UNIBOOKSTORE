<?php
require 'functions.php';

$bukuTerdikit = query('SELECT * FROM buku WHERE stok_buku = (SELECT MIN(stok_buku) FROM buku);')[0];
$nama_penerbit = $bukuTerdikit['penerbit_buku'];
$penerbit = query("SELECT * FROM penerbit WHERE nama_penerbit = '$nama_penerbit'")[0];
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengadaan</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="Admin.php">Admin</a>
                <a class="nav-link active" aria-current="page" href="pengadaan.php">Pengadaan</a>
            </div>
            </div>
        </div>
    </nav>



<div class="container mt-4 d-flex justify-content-center">
	<div class="card mb-3" style="width: 20rem;">
	  <div class="card-header text-center bg-danger text-white">
	    Buku Stok Tipis <sup><span class="badge text-bg-secondary"><?= $bukuTerdikit['stok_buku'] ?></span></sup>
	  </div>
	  <ul class="list-group list-group-flush">
	    <li class="list-group-item">ID Buku : <?= $bukuTerdikit['id_buku'] ?></li>
	    <li class="list-group-item">Kategori : <?= $bukuTerdikit['kategori_buku'] ?></li>
	    <li class="list-group-item">Nama Buku : <?= $bukuTerdikit['nama_buku'] ?></li>
	    <li class="list-group-item">Harga : <?= $bukuTerdikit['harga_buku'] ?></li>
	    <li class="list-group-item"><b>Stok : <?= $bukuTerdikit['stok_buku'] ?></b></li>
	    <li class="list-group-item">ID Penerbit : <?= $penerbit['id_penerbit'] ?></li>
	    <li class="list-group-item">Nama Penerbit : <?= $penerbit['nama_penerbit'] ?></li>
	    <li class="list-group-item">Alamat Penerbit : <?= $penerbit['alamat_penerbit'] ?></li>
	    <li class="list-group-item">Kota Penerbit : <?= $penerbit['kota_penerbit'] ?></li>
	    <li class="list-group-item">Telepon Penerbit : <?= $penerbit['telepon_penerbit'] ?></li>
	  </ul>	
	</div>
</div>	
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>