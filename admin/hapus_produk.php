<?php
include 'koneksi.php'; // Pastikan file koneksi.php ada dan berfungsi

// Ambil ID produk dari URL
$produk_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Jika ID valid, hapus produk dari database
if ($produk_id > 0) {
    $query = "DELETE FROM tbl_produk WHERE id = $produk_id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Redirect ke produk.php setelah penghapusan berhasil
        header("Location: produk.php?status=deleted");
        exit;
    } else {
        // Jika gagal menghapus, redirect dengan status error
        header("Location: produk.php?status=error");
        exit;
    }
} else {
    // Jika ID tidak valid, redirect dengan status error
    header("Location: produk.php?status=invalid");
    exit;
}
?>