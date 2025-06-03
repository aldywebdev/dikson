<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navigasi -->
<div class="navbar">
    <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="data_buku.php">Lihat Buku</a></li>
        <li><a href="cari_buku.php">Cari Buku</a></li>
    </ul>
</div>

<?php
include "koneksi.php";

// Cek apakah sedang mencari
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['keyword'])) {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM data_buku WHERE judul_buku LIKE '%$keyword%'";
    echo "<h2>Hasil Pencarian untuk: <em>$keyword</em></h2>";
} else {
    $query = "SELECT * FROM data_buku";
    echo "<h2>Daftar Buku</h2>";
}

// Hitung total buku
$resultTotal = mysqli_query($connection, "SELECT COUNT(*) AS total FROM data_buku");
$rowTotal = mysqli_fetch_assoc($resultTotal);
$totalBuku = $rowTotal['total'];
echo "<p style='text-align:center; font-weight:bold;'>Total Buku yang Tersedia: $totalBuku</p>";

// Ambil data
$result = mysqli_query($connection, $query);

// Tampilkan tabel
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>No</th><th>Judul Buku</th><th>Penulis</th><th>Tahun Terbit</th></tr>";
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$no}</td>
                <td>{$row['judul_buku']}</td>
                <td>{$row['penulis_buku']}</td>
                <td>{$row['tahun_terbit']}</td>
              </tr>";
        $no++;
    }
    echo "</table>";
} else {
    echo "<p style='text-align:center;'>Data buku tidak ditemukan.</p>";
}
?>
</body>
</html>
