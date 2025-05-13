<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menginput data ke dalam database
mysqli_query($koneksi,"insert into tbl_pengguna values ('','$username','$password')");

// mengalihkan kembali ke formlogin.php
header("location:formlogin.php");
