
<?php
include "koneksi.php";

$judul = $_POST['judul_buku'];
$penulis = $_POST['penulis_buku'];
$tahun = $_POST['tahun_terbit'];

$query = "INSERT INTO data_buku (judul_buku, penulis_buku, tahun_terbit) 
          VALUES ('$judul', '$penulis', '$tahun')";

if (mysqli_query($connection, $query)) {
    header("Location: index.php?berhasil=tambah");
    exit;
} else {
    echo "Gagal menambahkan buku: " . mysqli_error($connection);
}
?>
