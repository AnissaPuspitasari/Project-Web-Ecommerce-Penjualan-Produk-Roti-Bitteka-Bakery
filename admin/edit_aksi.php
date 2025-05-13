<?php 
//koneksi database
include 'koneksi.php';

//menangkap data yang di kirim dari form
$menu = $_POST['menu'];
$quantity = $_POST['jumlah'];
$date = $_POST['tanggal'];
$time = $_POST['waktu'];
$name = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['telepon'];
$address = $_POST['alamat'];
$spesial_request = $_POST['catatan_khusus'];
$total_harga = $_POST['total_harga'];

//menginput data ke database
mysqli_query($koneksi,"update tbl_pemesanan set jumlah='$quantity', tanggal='$date', waktu='$time', nama='$name', email='$email', telepon='$phone', alamat='$address', catatan_khusus='$spesial_request', total_harga='$total_harga'  WHERE menu='$menu'");

//mengalihkan halaman kembali ke index.php
header("location:tabel_hasil.php");

?>