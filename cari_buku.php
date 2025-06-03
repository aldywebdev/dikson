<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cari Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Cari Buku</h1>

<div class="navbar">
    <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="data_buku.php">Lihat Buku</a></li>
        <li><a href="cari_buku.php">Cari Buku</a></li>
    </ul>
</div>

<form method="post" action="data_buku.php" class="form-container">
    <input type="text" name="keyword" placeholder="Masukkan judul buku..." required>
    <input type="submit" value="Cari">
</form>

</body>
</html>
