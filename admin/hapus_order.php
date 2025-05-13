<?php 
//koneksi database
include 'koneksi.php';

//menangkap data yang di kirim dari form
$menu = $_GET['menu'];

//menginput data ke database
mysqli_query($koneksi,"delete from tbl_pemesanan WHERE menu='$menu'");

//mengalihkan halaman kembali ke index.php
header("location:tabel_hasil.php");

?>