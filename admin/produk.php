<?php
include 'koneksi.php'; // Include database connection

// Ambil status dari URL untuk pesan
$status = isset($_GET['status']) ? $_GET['status'] : '';
// Ambil kategori dari URL, default ke 'all' jika tidak ada
$category = isset($_GET['category']) ? $_GET['category'] : 'all';
// Validasi kategori
$valid_categories = ['all', 'donuts', 'bolu', 'roti', 'jajan', 'pastry', 'lapis'];
if (!in_array($category, $valid_categories)) {
    $category = 'all';
}
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to BitTeka</title>
    <!-- Icon -->
    <link rel="shortcut icon" href="img/biteka1.png" type="image/x-icon" />
    <link rel="icon" href="img/biteka1.png" type="image/x-icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- Icofont CSS -->
    <link rel="stylesheet" href="css/icofont.min.css" />
    <!-- Slick CSS -->
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/slick-theme.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="css/venobox.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/styleall.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <style>
        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            padding: 12px 20px;
            border-radius: 50px;
            font-size: 16px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.2);
            text-decoration: none;
            z-index: 1000;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: background 0.3s ease;
        }
        .whatsapp-float:hover {
            background-color: #1ebe5d;
        }
        .category-tabs {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .category-tab {
            font-size: 16px;
            font-weight: 500;
            color: #333;
            cursor: pointer;
            padding: 5px 10px;
            transition: color 0.3s ease;
        }
        .category-tab.active {
            color: #e74c3c;
            border-bottom: 2px solid #e74c3c;
        }
        .food-menu {
            margin-bottom: 30px;
        }
        .food-img img {
            border-radius: 10px;
            width: 100%;
            height: auto;
        }
        .food-informaion h2 {
            font-size: 18px;
            margin: 10px 0;
        }
        .food-info h3 {
            font-size: 16px;
            color: #e74c3c;
        }
        .rating {
            color: #f1c40f;
            margin: 5px 0;
        }
        .order-btn2 {
            background-color: #e74c3c;
            color: white;
            padding: 8px 20px;
            border-radius: 5px;
            text-transform: uppercase;
            font-size: 14px;
            margin-top: 6px;
        }
        .category-section {
            display: none;
        }
        .category-section.active {
            display: block;
        }
        .search-container {
            display: flex;
            align-items: center;
            margin-left: auto;
        }
        .search-container input[type="text"] {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-right: 5px;
        }
        .search-container button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
        }
        .search-container button:hover {
            background-color: #c0392b;
        }
        .action-buttons {
            margin-top: 10px;
            display: flex;
            gap: 10px;
            justify-content: center;
        }
        .action-buttons a.book-now {
            background-color: #555;
            color: white;
            padding: 8px 15px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 14px;
            border: none;
            transition: background-color 0.3s ease;
        }
        .action-buttons a.book-now:hover {
            background-color: #333;
        }
        .status-message {
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
        }
        .status-message.success {
            background-color: #d4edda;
            color: #155724;
        }
        .status-message.error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <!-- WhatsApp Button -->
    <a href="https://wa.me/6285540430051" class="whatsapp-float" target="_blank">
        <i class="icofont-brand-whatsapp"></i> Chat via WhatsApp
    </a>

    <!-- Goto TOP -->
    <div id="top-btn">
        <button class="btn top-btn"><i class="icofont-arrow-up"></i></button>
    </div>
    <!-- Preloader -->
    <div class="preloader-wrap">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
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
                                <a href="produk.php" class="nav-link">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a href="tabel_hasil.php" class="nav-link">Laporan</a>
                            </li>
                            <li class="nav-item last-menu-bg">
                                <a href="login.php" class="nav-link">Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- HEADER PART END -->

    <!-- MENU SECTION START -->
    <div class="food-menu-section" id="food-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="menu-head text-center">
                        <br><br>
                        <h2>Menu of <span>BitTeka</span></h2>
                        <p></p>
                    </div>

                    <!-- Pesan Status -->
                    <?php if ($status === 'updated') { ?>
                        <div class="status-message success">
                            Produk berhasil diperbarui!
                        </div>
                    <?php } elseif ($status === 'deleted') { ?>
                        <div class="status-message success">
                            Produk berhasil dihapus!
                        </div>
                    <?php } elseif ($status === 'error') { ?>
                        <div class="status-message error">
                            Gagal memproses. Silakan coba lagi.
                        </div>
                    <?php } elseif ($status === 'invalid') { ?>
                        <div class="status-message error">
                            ID produk tidak valid.
                        </div>
                    <?php } ?>

                    <!-- Category Tabs -->
                    <div class="category-tabs">
                        <div class="category-tab <?php echo $category === 'all' ? 'active' : ''; ?>" data-category="all">All</div>
                        <div class="category-tab <?php echo $category === 'donuts' ? 'active' : ''; ?>" data-category="donuts">Donat</div>
                        <div class="category-tab <?php echo $category === 'bolu' ? 'active' : ''; ?>" data-category="bolu">Bolu</div>
                        <div class="category-tab <?php echo $category === 'roti' ? 'active' : ''; ?>" data-category="roti">Roti</div>
                        <div class="category-tab <?php echo $category === 'jajan' ? 'active' : ''; ?>" data-category="jajan">Jajanan Pasar</div>
                        <div class="category-tab <?php echo $category === 'pastry' ? 'active' : ''; ?>" data-category="pastry">Pastry</div>
                        <div class="category-tab <?php echo $category === 'lapis' ? 'active' : ''; ?>" data-category="lapis">Lapis</div>
                    </div>
                    <!-- Form Pencarian -->
                    <div class="search-container">
                        <form action="search.php" method="GET">
                            <input type="text" name="query" placeholder="Cari produk..." required>
                            <button type="submit"><i class="icofont-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- All Products Category -->
            <div class="category-section <?php echo $category === 'all' ? 'active' : ''; ?>" id="all">
                <div class="row food-box">
                    <?php
                    $query = "SELECT * FROM tbl_produk ORDER BY nama ASC";
                    $result = mysqli_query($koneksi, $query) or die("Query all products error: ".mysqli_error($koneksi));
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="food-menu text-center">
                            <div class="food-img-info">
                                <div class="food-img">
                                    <img src="<?= htmlspecialchars($row['gambar']) ?>" class="w-100" alt="<?= htmlspecialchars($row['nama']) ?>" />
                                </div>
                                <div class="overlay text-left">
                                    <h4>Deskripsi</h4>
                                    <span><?= htmlspecialchars($row['deskripsi']) ?></span>
                                </div>
                            </div>
                            <div class="food-informaion">
                                <h2><?= htmlspecialchars($row['nama']) ?></h2>
                                <div class="food-info">
                                    <h3>Rp. <?= number_format($row['harga'], 0, ',', '.') ?></h3>
                                </div>
                                <a href="order.php?id=<?= $row['id'] ?>" class="btn order-btn2">Pesan</a>
                                <div class="action-buttons">
                                    <a href="edit_produk.php?id=<?= $row['id'] ?>" class="book-now">EDIT</a>
                                    <a href="hapus_produk.php?id=<?= $row['id'] ?>" class="book-now" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">HAPUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <!-- Donuts Category -->
            <div class="category-section <?php echo $category === 'donuts' ? 'active' : ''; ?>" id="donuts">
                <div class="row food-box">
                    <?php
                    $query = "SELECT * FROM tbl_produk WHERE kategori = 'donuts'";
                    $result = mysqli_query($koneksi, $query) or die("Query donuts error: ".mysqli_error($koneksi));
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="food-menu text-center">
                            <div class="food-img-info">
                                <div class="food-img">
                                    <img src="<?= htmlspecialchars($row['gambar']) ?>" class="w-100" alt="<?= htmlspecialchars($row['nama']) ?>" />
                                </div>
                                <div class="overlay text-left">
                                    <h4>Deskripsi</h4>
                                    <span><?= htmlspecialchars($row['deskripsi']) ?></span>
                                </div>
                            </div>
                            <div class="food-informaion">
                                <h2><?= htmlspecialchars($row['nama']) ?></h2>
                                <div class="food-info">
                                    <h3>Rp. <?= number_format($row['harga'], 0, ',', '.') ?></h3>
                                </div>
                                <a href="order.php?id=<?= $row['id'] ?>" class="btn order-btn2">Pesan</a>
                                <div class="action-buttons">
                                    <a href="edit_produk.php?id=<?= $row['id'] ?>" class="book-now">EDIT</a>
                                    <a href="hapus_produk.php?id=<?= $row['id'] ?>" class="book-now" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">HAPUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <!-- Bolu Category -->
            <div class="category-section <?php echo $category === 'bolu' ? 'active' : ''; ?>" id="bolu">
                <div class="row food-box">
                    <?php
                    $query = "SELECT * FROM tbl_produk WHERE kategori = 'bolu'";
                    $result = mysqli_query($koneksi, $query) or die("Query bolu error: ".mysqli_error($koneksi));
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="food-menu text-center">
                            <div class="food-img-info">
                                <div class="food-img">
                                    <img src="<?= htmlspecialchars($row['gambar']) ?>" class="w-100" alt="<?= htmlspecialchars($row['nama']) ?>" />
                                </div>
                                <div class="overlay text-left">
                                    <h4>Deskripsi</h4>
                                    <span><?= htmlspecialchars($row['deskripsi']) ?></span>
                                </div>
                            </div>
                            <div class="food-informaion">
                                <h2><?= htmlspecialchars($row['nama']) ?></h2>
                                <div class="food-info">
                                    <h3>Rp. <?= number_format($row['harga'], 0, ',', '.') ?></h3>
                                </div>
                                <a href="order.php?id=<?= $row['id'] ?>" class="btn order-btn2">Pesan</a>
                                <div class="action-buttons">
                                    <a href="edit_produk.php?id=<?= $row['id'] ?>" class="book-now">EDIT</a>
                                    <a href="hapus_produk.php?id=<?= $row['id'] ?>" class="book-now" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">HAPUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <!-- Roti Category -->
            <div class="category-section <?php echo $category === 'roti' ? 'active' : ''; ?>" id="roti">
                <div class="row food-box">
                    <?php
                    $query = "SELECT * FROM tbl_produk WHERE kategori = 'roti'";
                    $result = mysqli_query($koneksi, $query) or die("Query roti error: ".mysqli_error($koneksi));
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="food-menu text-center">
                            <div class="food-img-info">
                                <div class="food-img">
                                    <img src="<?= htmlspecialchars($row['gambar']) ?>" class="w-100" alt="<?= htmlspecialchars($row['nama']) ?>" />
                                </div>
                                <div class="overlay text-left">
                                    <h4>Deskripsi</h4>
                                    <span><?= htmlspecialchars($row['deskripsi']) ?></span>
                                </div>
                            </div>
                            <div class="food-informaion">
                                <h2><?= htmlspecialchars($row['nama']) ?></h2>
                                <div class="food-info">
                                    <h3>Rp. <?= number_format($row['harga'], 0, ',', '.') ?></h3>
                                </div>
                                <a href="order.php?id=<?= $row['id'] ?>" class="btn order-btn2">Pesan</a>
                                <div class="action-buttons">
                                    <a href="edit_produk.php?id=<?= $row['id'] ?>" class="book-now">EDIT</a>
                                    <a href="hapus_produk.php?id=<?= $row['id'] ?>" class="book-now" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">HAPUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <!-- Jajanan Pasar Category -->
            <div class="category-section <?php echo $category === 'jajan' ? 'active' : ''; ?>" id="jajan">
                <div class="row food-box">
                    <?php
                    $query = "SELECT * FROM tbl_produk WHERE kategori = 'jajan'";
                    $result = mysqli_query($koneksi, $query) or die("Query jajan error: ".mysqli_error($koneksi));
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="food-menu text-center">
                            <div class="food-img-info">
                                <div class="food-img">
                                    <img src="<?= htmlspecialchars($row['gambar']) ?>" class="w-100" alt="<?= htmlspecialchars($row['nama']) ?>" />
                                </div>
                                <div class="overlay text-left">
                                    <h4>Deskripsi</h4>
                                    <span><?= htmlspecialchars($row['deskripsi']) ?></span>
                                </div>
                            </div>
                            <div class="food-informaion">
                                <h2><?= htmlspecialchars($row['nama']) ?></h2>
                                <div class="food-info">
                                    <h3>Rp. <?= number_format($row['harga'], 0, ',', '.') ?></h3>
                                </div>
                                <a href="order.php?id=<?= $row['id'] ?>" class="btn order-btn2">Pesan</a>
                                <div class="action-buttons">
                                    <a href="edit_produk.php?id=<?= $row['id'] ?>" class="book-now">EDIT</a>
                                    <a href="hapus_produk.php?id=<?= $row['id'] ?>" class="book-now" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">HAPUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <!-- Pastry Category -->
            <div class="category-section <?php echo $category === 'pastry' ? 'active' : ''; ?>" id="pastry">
                <div class="row food-box">
                    <?php
                    $query = "SELECT * FROM tbl_produk WHERE kategori = 'pastry'";
                    $result = mysqli_query($koneksi, $query) or die("Query pastry error: ".mysqli_error($koneksi));
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="food-menu text-center">
                            <div class="food-img-info">
                                <div class="food-img">
                                    <img src="<?= htmlspecialchars($row['gambar']) ?>" class="w-100" alt="<?= htmlspecialchars($row['nama']) ?>" />
                                </div>
                                <div class="overlay text-left">
                                    <h4>Deskripsi</h4>
                                    <span><?= htmlspecialchars($row['deskripsi']) ?></span>
                                </div>
                            </div>
                            <div class="food-informaion">
                                <h2><?= htmlspecialchars($row['nama']) ?></h2>
                                <div class="food-info">
                                    <h3>Rp. <?= number_format($row['harga'], 0, ',', '.') ?></h3>
                                </div>
                                <a href="order.php?id=<?= $row['id'] ?>" class="btn order-btn2">Pesan</a>
                                <div class="action-buttons">
                                    <a href="edit_produk.php?id=<?= $row['id'] ?>" class="book-now">EDIT</a>
                                    <a href="hapus_produk.php?id=<?= $row['id'] ?>" class="book-now" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">HAPUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <!-- Lapis Category -->
            <div class="category-section <?php echo $category === 'lapis' ? 'active' : ''; ?>" id="lapis">
                <div class="row food-box">
                    <?php
                    $query = "SELECT * FROM tbl_produk WHERE kategori = 'lapis'";
                    $result = mysqli_query($koneksi, $query) or die("Query lapis error: ".mysqli_error($koneksi));
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="food-menu text-center">
                            <div class="food-img-info">
                                <div class="food-img">
                                    <img src="<?= htmlspecialchars($row['gambar']) ?>" class="w-100" alt="<?= htmlspecialchars($row['nama']) ?>" />
                                </div>
                                <div class="overlay text-left">
                                    <h4>Deskripsi</h4>
                                    <span><?= htmlspecialchars($row['deskripsi']) ?></span>
                                </div>
                            </div>
                            <div class="food-informaion">
                                <h2><?= htmlspecialchars($row['nama']) ?></h2>
                                <div class="food-info">
                                    <h3>Rp. <?= number_format($row['harga'], 0, ',', '.') ?></h3>
                                </div>
                                <a href="order.php?id=<?= $row['id'] ?>" class="btn order-btn2">Pesan</a>
                                <div class="action-buttons">
                                    <a href="edit_produk.php?id=<?= $row['id'] ?>" class="book-now">EDIT</a>
                                    <a href="hapus_produk.php?id=<?= $row['id'] ?>" class="book-now" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">HAPUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- MENU SECTION END -->

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
                        <span><a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a></span>
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
    <!-- Slick JS -->
    <script src="js/slick.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Venobox JS -->
    <script src="js/venobox.min.js"></script>
    <!-- main.js -->
    <script src="js/main.js"></script>
    <script>
        // Inisialisasi Slick Slider untuk testimonial
        $(".testimonial-slider").slick({
            autoplay: true,
            autoplaySpeed: 7000,
            arrows: true,
            prevArrow: '<i class="icofont-arrow-left"></i>',
            nextArrow: '<i class="icofont-arrow-right"></i>',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });

        // Fungsi klik untuk tab kategori
        const tabs = document.querySelectorAll('.category-tab');
        const sections = document.querySelectorAll('.category-section');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Hapus class 'active' dari semua tab
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                const category = tab.dataset.category;

                // Tampilkan atau sembunyikan section
                sections.forEach(section => {
                    if (category === 'all') {
                        if (section.id === 'all') {
                            section.classList.add('active');
                        } else {
                            section.classList.remove('active');
                        }
                    } else {
                        if (section.id === category) {
                            section.classList.add('active');
                        } else {
                            section.classList.remove('active');
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>