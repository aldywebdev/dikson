<?php
$connection = mysqli_connect("localhost", "root", "", "perpustakaan");
if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
