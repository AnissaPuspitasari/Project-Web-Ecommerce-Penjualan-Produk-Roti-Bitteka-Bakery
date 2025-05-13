<?php
include 'koneksi.php';
$menu = $_GET['menu'];
$data = mysqli_query($koneksi, "select * from tbl_pemesanan where menu='$menu'");
$pesanan = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Pesanan - BitTeka</title>
    <link rel="shortcut icon" href="img/biteka1.png" type="image/x-icon" />
    <link rel="icon" href="img/biteka1.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/icofont.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styleall.css" />
    <link rel="stylesheet" href="css/responsive.css" />

    <style>
    .form-container {
        background: #fff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 4px 16px rgba(0,0,0,0.1);
        max-width: 700px;
        margin: 120px auto 60px;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 30px;
        font-weight: 700;
        color: #5a3e1b;
    }

    input[readonly], input[disabled] {
        background-color: #f5f5f5 !important;
        border: 1px solid #ccc;
        color: #333;
        font-weight: 500;
        cursor: not-allowed;
    }

    .tombol-custom {
        background: linear-gradient(45deg, #FFD700, rgb(159, 118, 63));
        color: white;
        border: none;
        padding: 12px 30px;
        font-weight: bold;
        text-transform: uppercase;
        border-radius: 30px;
        transition: background 0.3s ease;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }

    .tombol-custom:hover {
        background: linear-gradient(45deg, #FFC300, rgb(161, 120, 67));
        color: white;
    }

    .text-center {
        text-align: center;
    }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="header py-1">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light px-0 py-0">
                    <a class="navbar-brand" href="index.html">
                        <div class="logo">
                            <img src="img/biteka2.png" class="w-100 img-fluid" alt="Logo" />
                        </div>
                    </a>
                    <div class="open-time">
                        <h6><i class="icofont-clock-time"></i> Open Now</h6>
                        <span>8AM - 10PM</span>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                        <i class="icofont-navigation-menu"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-custom">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a href="produk2.php" class="nav-link">Produk</a></li>
                            <li class="nav-item"><a href="tabel_hasil.php" class="nav-link">Laporan</a></li>
                            <li class="nav-item last-menu-bg"><a href="login.php" class="nav-link">Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- END HEADER -->

    <!-- FORM -->
    <div class="container">
        <div class="form-container">
            <h2>Detail Pesanan Pelanggan</h2>
            <form>
                <div class="form-group">
                    <label>Menu</label>
                    <input type="text" class="form-control" value="<?= $menu; ?>" readonly disabled>
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" class="form-control" value="<?= $pesanan['jumlah'] ?>" readonly disabled>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" value="<?= $pesanan['tanggal'] ?>" readonly disabled>
                </div>
                <div class="form-group">
                    <label>Waktu</label>
                    <input type="time" class="form-control" value="<?= $pesanan['waktu'] ?>" readonly disabled>
                </div>
                <div class="form-group">
                    <label>Nama Pemesan</label>
                    <input type="text" class="form-control" value="<?= $pesanan['nama'] ?>" readonly disabled>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" value="<?= $pesanan['email'] ?>" readonly disabled>
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" class="form-control" value="<?= $pesanan['telepon'] ?>" readonly disabled>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" value="<?= $pesanan['alamat'] ?>" readonly disabled>
                </div>
                <div class="form-group">
                    <label>Catatan Khusus</label>
                    <input type="text" class="form-control" value="<?= $pesanan['catatan_khusus'] ?>" readonly disabled>
                </div>
                <div class="form-group">
                    <label>Total Harga</label>
                    <input type="text" class="form-control" value="<?= $pesanan['total_harga'] ?>" readonly disabled>
                </div>

                <div class="text-center mt-4">
                    <a href="tabel_hasil.php" class="tombol-custom">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer-bootom">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <p class="copyright-txt">Copyright CodeSirens</p>
                </div>
                <div class="col-md-5 text-right">
                    <div class="terms">
                        <a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>
