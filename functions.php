<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "data");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambahB($isi)
{
    global $conn;
    $id_buku = htmlspecialchars($isi["id_buku"]);
    $kategori_buku = htmlspecialchars($isi["kategori_buku"]);
    $nama_buku = htmlspecialchars($isi["nama_buku"]);
    $harga_buku = htmlspecialchars($isi["harga_buku"]);
    $stok_buku = htmlspecialchars($isi["stok_buku"]);
    $penerbit_buku = htmlspecialchars($isi["penerbit_buku"]);

    $query = "INSERT INTO buku 
        VALUES ('','$id_buku','$kategori_buku','$nama_buku','$harga_buku','$stok_buku','$penerbit_buku')
        ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahP($isi)
{
    global $conn;
    $id_penerbit = $isi["id_penerbit"];
    $nama_penerbit = $isi["nama_penerbit"];
    $alamat_penerbit = $isi["alamat_penerbit"];
    $kota_penerbit = $isi["kota_penerbit"];
    $telepon_penerbit = $isi["telepon_penerbit"];


    $query = "INSERT INTO penerbit 
        VALUES ('','$id_penerbit','$nama_penerbit','$alamat_penerbit','$kota_penerbit','$telepon_penerbit')
        ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusb($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id ");

    return mysqli_affected_rows($conn);
}

function hapusp($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM penerbit WHERE id = $id ");

    return mysqli_affected_rows($conn);
}

function ubahp($isi)
{
    global $conn;

    $id = $isi["id"];
    $id_penerbit = $isi["id_penerbit"];
    $nama_penerbit = $isi["nama_penerbit"];
    $alamat_penerbit = $isi["alamat_penerbit"];
    $kota_penerbit = $isi["kota_penerbit"];
    $telepon_penerbit = $isi["telepon_penerbit"];


    $query = "UPDATE penerbit SET 
        id_penerbit = '$id_penerbit',
        nama_penerbit = '$nama_penerbit',
        alamat_penerbit = '$alamat_penerbit',
        kota_penerbit = '$kota_penerbit',
        telepon_penerbit = '$telepon_penerbit'
        WHERE id = $id
        ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubahb($isi)
{
    global $conn;

    $id = $isi["id"];
    $id_buku = $isi["id_buku"];
    $kategori_buku = $isi["kategori_buku"];
    $nama_buku = $isi["nama_buku"];
    $harga_buku = $isi["harga_buku"];
    $stok_buku = $isi["stok_buku"];
    $penerbit_buku = $isi["penerbit_buku"];

    $query = "UPDATE buku SET 
        id_buku = '$id_buku',
        kategori_buku = '$kategori_buku',
        nama_buku = '$nama_buku',
        harga_buku = '$harga_buku',
        stok_buku = '$stok_buku',
        penerbit_buku = '$penerbit_buku'
        WHERE id = $id
        ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cariBuku($keyword){
	return query("SELECT * FROM buku WHERE nama_buku LIKE '%$keyword%'");
}
