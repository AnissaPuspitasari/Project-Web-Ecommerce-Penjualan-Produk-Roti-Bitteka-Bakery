<?php
include 'koneksi.php'; // Pastikan file koneksi.php ada dan berfungsi

// Ambil ID produk dari URL
$produk_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Ambil data produk dari database
$query = "SELECT * FROM tbl_produk WHERE id = $produk_id";
$result = mysqli_query($koneksi, $query);
$produk = mysqli_fetch_assoc($result);

// Cek jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $harga = isset($_POST['harga']) ? intval($_POST['harga']) : 0;
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $gambar = $produk['gambar'];

    // Handle upload gambar jika ada
   // Handle upload gambar jika ada
// Handle upload gambar jika ada
if (isset($_FILES['gambar']) && $_FILES['gambar']['name']) {
    $nama_file = basename($_FILES['gambar']['name']);
    $gambar_admin = 'img/' . $nama_file;
    $gambar_pelanggan = '../pelanggan/img/' . $nama_file;
    
    // Upload ke folder admin
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $gambar_admin)) {
        // Jika berhasil upload ke admin, copy ke folder pelanggan
        if (!copy($gambar_admin, $gambar_pelanggan)) {
            // Jika gagal copy ke pelanggan
            error_log("Gagal menyalin gambar ke folder pelanggan: " . $gambar_pelanggan);
            $gambar = $produk['gambar'];
        } else {
            $gambar = $gambar_admin;
        }
    } else {
        // Jika gagal upload gambar
        error_log("Gagal upload gambar: " . $_FILES['gambar']['error']);
        $gambar = $produk['gambar'];
    }
} else {
    $gambar = $produk['gambar'];
}

    // Update data ke database
    $update_query = "UPDATE tbl_produk SET nama='$nama', harga='$harga', deskripsi='$deskripsi', gambar='$gambar', kategori='$kategori' WHERE id=$produk_id";
    $update_result = mysqli_query($koneksi, $update_query);

    if ($update_result) {
        // Redirect ke produk.php dengan status sukses
        header("Location: produk.php?status=updated");
        exit;
    } else {
        // Jika gagal, redirect dengan status error
        header("Location: produk.php?status=error");
        exit;
    }
}
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Produk - BitTeka</title>
    <!-- Icon -->
    <link rel="shortcut icon" href="img/biteka1.png" type="image/x-icon" />
    <link rel="icon" href="img/biteka1.png" type="image/x-icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- Icofont CSS -->
    <link rel="stylesheet" href="css/icofont.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="css/venobox.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/styleall.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <style>
        /* Styling untuk tombol Simpan Perubahan dan Kembali */
        .button-group {
            display: flex;
            justify-content: center;
            gap: 20px; /* Jarak antar tombol */
            margin-top: 20px;
        }
        .button-group .book-now {
            padding: 10px 20px; /* Sesuaikan padding agar tombol lebih rapi */
        }
        /* Tambahan padding untuk memberikan jarak dari header */
        .reservation-form {
            padding-top: 80px; /* Jarak atas agar tidak mepet dengan header */
        }
    </style>
</head>
<body>
    <!-- Goto TOP -->
    <div id="top-btn">
        <button class="btn top-btn"><i class="icofont-arrow-up"></i></button>
    </div>

    <!-- HEADER PART START -->
    <header>
        <div class="header py-1">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light px-0 py-0">
                    <a class="navbar-brand" href="index.html">
                        <div class="logo">
                            <img src="img/biteka2.png" class="w-100 img-fluid" alt="" />
                        </div>
                    </a>
                    <div class="open-time">
                        <h6><i class="icofont-clock-time"></i> Open Now</h6>
                        <span>8AM - 10PM</span>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="icofont-navigation-menu"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-custom">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="produk.php">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tabel_hasil.php">Laporan</a>
                            </li>
                            <li class="nav-item last-menu-bg">
                                <span class="nav-link"><a href="login.php">Logout</a></span>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- HEADER PART END -->

    <!-- RESERVATION FORM SECTION START -->
    <div class="reservation-form">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="reservation-head text-center">
                        <h2>Edit Produk <span>BitTeka</span></h2>
                        <p>Perbarui detail produk di bawah ini.</p>
                    </div>

                    <?php
                    if (!$produk) {
                        echo "<p class='text-center'>Produk tidak ditemukan.</p>";
                    } else {
                    ?>
                    <div class="form">
                        <div class="personal">
                            <form class="custom-form" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <label for="nama">Nama Produk</label>
                                        <input type="text" class="reservation-input" name="nama" value="<?php echo htmlspecialchars($produk['nama']); ?>" required>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <label for="harga">Harga (Rp)</label>
                                        <input type="number" class="reservation-input" name="harga" value="<?php echo htmlspecialchars($produk['harga']); ?>" required>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="reservation-textarea" name="deskripsi"><?php echo htmlspecialchars($produk['deskripsi']); ?></textarea>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <label for="gambar">Gambar Produk</label>
                                        <input type="file" class="reservation-input" name="gambar">
                                        <p>Gambar saat ini: <?php echo htmlspecialchars($produk['gambar']); ?></p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <label for="kategori">Kategori</label>
                                        <select class="reservation-input" name="kategori">
                                            <option value="donuts" <?php echo $produk['kategori'] === 'donuts' ? 'selected' : ''; ?>>Donat</option>
                                            <option value="bolu" <?php echo $produk['kategori'] === 'bolu' ? 'selected' : ''; ?>>Bolu</option>
                                            <option value="roti" <?php echo $produk['kategori'] === 'roti' ? 'selected' : ''; ?>>Roti</option>
                                            <option value="jajan" <?php echo $produk['kategori'] === 'jajan' ? 'selected' : ''; ?>>Jajanan Pasar</option>
                                            <option value="pastry" <?php echo $produk['kategori'] === 'pastry' ? 'selected' : ''; ?>>Pastry</option>
                                            <option value="lapis" <?php echo $produk['kategori'] === 'lapis' ? 'selected' : ''; ?>>Lapis</option>
                                        </select>
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="button-group">
                                            <button type="submit" class="book-now">Simpan Perubahan</button>
                                            <a href="produk.php" class="book-now">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- RESERVATION FORM SECTION END -->

    <!-- FOOTER BOTTOM START -->
    <div class="footer-bootom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                    <div class="copyright-txt">
                        <p>Copyright 2025. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                    <div class="terms">
                        <span>
                            <a href="#">Terms & Conditions</a> |
                            <a href="#">Privacy Policy</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER BOTTOM END -->

    <!-- jQuery File -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Venobox JS -->
    <script src="js/venobox.min.js"></script>
    <!-- main.js -->
    <script src="js/main.js"></script>
</body>
</html>