<?php
// Contoh data produk (Anda bisa menggantinya dengan data dari database)
$products = [
    ['name' => 'Donat Salju', 'price' => 'Rp. 3.000', 'image' => 'img/Menu/donat1.png'],
    ['name' => 'Donat Coklat', 'price' => 'Rp. 3.000', 'image' => 'img/Menu/donat2.png'],
    ['name' => 'Donat Keju', 'price' => 'Rp. 5.000', 'image' => 'img/Menu/donat3.png'],
    ['name' => 'Lemper Ayam', 'price' => 'Rp. 11.000', 'image' => 'img/traditional-snacks/lemper-ayam.png'],
    ['name' => 'Toblerone Box', 'price' => 'Rp. 70.000', 'image' => 'img/Daftar Menu/Menu4.png'],
    ['name' => 'Red Velvet Crumble', 'price' => 'Rp. 70.000', 'image' => 'img/Daftar Menu/Menu5.png'],
    ['name' => 'Matcha Dessert Box', 'price' => 'Rp. 70.000', 'image' => 'img/Daftar Menu/Menu6.png'],
];

// Ambil query pencarian dari URL
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Filter produk berdasarkan query
$filteredProducts = array_filter($products, function($product) use ($query) {
    return stripos($product['name'], $query) !== false; // Mencari produk yang sesuai
});
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icofont.min.css">
    <link rel="stylesheet" href="css/styleall.css"> <!-- Menggunakan style yang sama -->
    <style>
        .product {
            margin: 20px;
            text-align: center;
        }
        .product img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .product h2 {
            font-size: 18px;
            margin: 10px 0;
        }
        .product h3 {
            color: #e74c3c;
        }
        .no-results {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
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
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <i class="icofont-navigation-menu"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-custom">
                            <li class="nav-item">
                                <a class="nav-link" href="indexx.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="produk.php" class="nav-link">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a href="order.php" class="nav-link">Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tentang Kami</a>
                            </li>
                        </ul>
                    </div>
                    </nav>
            </div>
        </div>
    </header>
    <!-- HEADER PART END -->

    <div class="container">
        <h1 class="text-center my-4">Hasil Pencarian untuk: "<?php echo htmlspecialchars($query); ?>"</h1>
        <div class="row">
            <?php if (count($filteredProducts) > 0): ?>
                <?php foreach ($filteredProducts as $product): ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 product">
                        <div class="food-menu text-center">
                            <div class="food-img">
                                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                            </div>
                            <div class="food-informaion">
                                <h2><?php echo $product['name']; ?></h2>
                                <div class="food-info">
                                    <h3><?php echo $product['price']; ?></h3>
                                </div>
                                <a href="order.php" class="btn order-btn2">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="no-results">
                    <p>Tidak ada produk yang ditemukan.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

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
    <!-- main.js -->
    <script src="js/main.js"></script>
</body>
</html>