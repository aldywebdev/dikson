<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="data_buku.php">Lihat Buku</a></li>
        <li><a href="cari_buku.php">Cari Buku</a></li>
    </ul>
</div>

<?php 
include "koneksi.php";

echo "<h1 class='welcome-box'>Selamat Datang di Perpustakaan</h1>";
?>

<form action="tambah.php" method="post" class="form-container">
    <label>Judul Buku:</label><br>
    <input type="text" name="judul_buku" required><br>

    <label>Penulis:</label><br>
    <input type="text" name="penulis_buku" required><br>

    <label>Tahun Terbit:</label><br>
    <input type="number" name="tahun_terbit" required><br><br>

    <input type="submit" value="Tambah Buku">
    <input type="reset" value="Reset">
</form>

</body>
</html>
