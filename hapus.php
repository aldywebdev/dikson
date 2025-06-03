<?php
include "koneksi.php";

if (isset($_POST['id_buku'])) {
    $id = $_POST['id_buku'];
    $hapus = mysqli_query($connection, "DELETE FROM data_buku WHERE id_buku='$id'");

    if ($hapus) {
        echo "<script>alert('Buku berhasil dihapus!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus buku!'); window.location='index.php';</script>";
    }
} else {
    header("Location: index.php");
}
?>
