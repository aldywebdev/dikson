<?php
include "koneksi.php";

if (isset($_POST['keyword'])) {
    $keyword = mysqli_real_escape_string($connection, $_POST['keyword']);
    $query = "SELECT * FROM data_buku WHERE judul_buku LIKE '%$keyword%'";
    $hasil = mysqli_query($connection, $query);

    echo "<h2>Hasil Pencarian Buku: '$keyword'</h2>";

    if (mysqli_num_rows($hasil) > 0) {
        while ($data = mysqli_fetch_array($hasil)) {
            echo "Judul: " . $data['judul_buku'] . "<br>";
            echo "Penulis: " . $data['penulis_buku'] . "<br>";
            echo "Tahun Terbit: " . $data['tahun_terbit'] . "<br><br>";
        }
    } else {
        echo "Buku tidak ditemukan.";
    }
}
?>
