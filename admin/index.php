<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BitTeka Bakery</title>
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
        /* Tambah style biar link nggak ubah tampilan tapi kelihatan clickable */
        .food-menu-link {
    text-decoration: none;
    color: inherit;
    display: block;
    position: relative; /* Untuk overlay */
}

.food-menu-link:hover {
    cursor: pointer;
}

.food-menu-link:hover .food-menu {
    background-color: rgba(0, 0, 0, 0.2); /* Warna overlay hitam 20% transparan */
    transition: background-color 0.3s ease; /* Transisi smooth untuk background */
}

.food-menu {
    position: relative;
    overflow: hidden; /* Pastikan overlay tidak keluar dari elemen */
    transition: all 0.3s ease; /* Transisi untuk semua perubahan */
}

/* Optional: Efek overlay dengan pseudo-element */
      .food-menu-link:hover .food-menu::after {
          content: '';
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(234, 201, 153, 0.81); /* Warna merah muda transparan saat hover */
          transition: background-color 0.3s ease;
          z-index: 1; /* Di atas gambar tapi di bawah teks */
      }

      .food-menu .food-informaion {
          position: relative;
          z-index: 2; /* Pastikan teks di atas overlay */
      }

      .food-menu .food-img {
          transition: transform 0.3s ease; /* Efek zoom pada gambar */
      }

      .food-menu-link:hover .food-img {
          transform: scale(1.05); /* Zoom sedikit saat hover */
      }
    </style>
</head>
<body>
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
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
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

    <!-- HOME HERO SECTION START -->
    <div class="home-hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="home-hero-content">
                        <h1>Fresh Baked. <strong>Smart Made</strong> at <strong>BitTeka Bakery</strong></h1>
                        <p>Temukan rasa terbaik <span><a href="order.php">dalam setiap gigitan.</a></span></p>
                        <a class="btn menu-btn" href="#food-menu">Menu Hari Ini <i class="icofont-double-right"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="burger-img">
                        <img src="img/kuwe.png" class="w-100 img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOME HERO SECTION END -->

    <!-- SPECIAL SECTION START -->
    <div class="special-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-5 col-lg-6 col-xl-6">
                    <div class="special-img">
                        <img src="img/lapis.jpg" class="w-100" alt="" />
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-6 col-xl-6">
                    <div class="special-content text-center">
                        <div class="donut-icon m-auto">
                            <img src="img/icon.png" class="w-100" alt="" />
                        </div>
                        <h2>Menu Spesial <span>Andalan minggu ini</span></h2>
                        <p>Lapis Legit. Kue klasik berlapis yang manis, lembut, dan kaya rasa. Cocok buat teman santai atau hadiah spesial.</p>
                        <div class="offer-info">
                            <div class="form-row justify-content-center align-items-center">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <div class="item-price">
                                        <h3><span>Rp</span>70.000</h3>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <div class="item-number">
                                        <div class="item-quantity">
                                            <button><i class="icofont-plus"></i></button>
                                            <span>01</span>
                                            <button><i class="icofont-minus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <a href="login.php" class="btn order-btn">Pesan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SPECIAL SECTION END -->

    <!-- HOME SERVICES SECTION START -->
    <div class="home-services-section">
        <div class="container">
            <div class="home-services">
                <div class="form-row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="image-box clearfix">
                            <div class="box-image float-left">
                                <img src="img/honney.png" alt="" />
                            </div>
                            <div class="image-text float-left">
                                <h2>Pilih Menu</h2>
                                <p>Jelajahi aneka pilihan roti lezat dan spesial kami yang selalu fresh tiap hari.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="image-box clearfix">
                            <div class="box-image float-left">
                                <img src="img/macaron.png" alt="" />
                            </div>
                            <div class="image-text float-left">
                                <h2>Order</h2>
                                <p>Sudah nemu yang kamu suka? Langsung aja pesan rotinya sekarang juga!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="image-box clearfix">
                            <div class="box-image float-left">
                                <img src="img/dinner.png" alt="" />
                            </div>
                            <div class="image-text float-left">
                                <h2>Enjoy it</h2>
                                <p>Nikmati sensasi roti lembut dan harum di setiap gigitannya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOME SERVICES SECTION END -->

    <!-- MENU SECTION START -->
    <div class="food-menu-section" id="food-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="menu-head text-center">
                        <h2>Kategori Menu <span>BitTeka Bakery</span></h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row food-box">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <a href="produk.php?category=donuts" class="food-menu-link">
                        <div class="food-menu text-center">
                            <div class="food-img-info">
                                <div class="food-img">
                                    <img src="img/Menu/donat1.png" class="w-100" alt="" />
                                </div>
                            </div>
                            <div class="food-informaion">
                                <div class="row align-items-center">
                                    <div class="col-12"><h2 class="text-center">Donat</h2></div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <a href="produk.php?category=bolu" class="food-menu-link">
                        <div class="food-menu text-center">
                            <div class="food-img-info">
                                <div class="food-img">
                                    <img src="img/Menu/bolu1.png" class="w-100" alt="" />
                                </div>
                            </div>
                            <div class="food-informaion">
                                <div class="row align-items-center">
                                    <div class="col-12"><h2 class="text-center">Bolu</h2></div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <a href="produk.php?category=roti" class="food-menu-link">
                        <div class="food-menu text-center">
                            <div class="food-img-info">
                                <div class="food-img">
                                    <img src="img/Menu/roti1.png" class="w-100" alt="" />
                                </div>
                            </div>
                            <div class="food-informaion">
                                <div class="row align-items-center">
                                    <div class="col-12"><h2 class="text-center">Roti</h2></div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <a href="produk.php?category=jajan" class="food-menu-link">
                        <div class="food-menu text-center">
                            <div class="food-img-info">
                                <div class="food-img">
                                    <img src="img/Menu/pasar.png" class="w-100" alt="" />
                                </div>
                            </div>
                            <div class="food-informaion">
                                <div class="row align-items-center">
                                    <div class="col-12"><h2 class="text-center">Jajan Pasar</h2></div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <a href="produk.php?category=pastry" class="food-menu-link">
                        <div class="food-menu text-center">
                            <div class="food-img-info">
                                <div class="food-img">
                                    <img src="img/Menu/pastry.png" class="w-100" alt="" />
                                </div>
                            </div>
                            <div class="food-informaion">
                                <div class="row align-items-center">
                                    <div class="col-12"><h2 class="text-center">Pastry</h2></div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <a href="produk.php?category=lapis" class="food-menu-link">
                        <div class="food-menu text-center">
                            <div class="food-img-info">
                                <div class="food-img">
                                    <img src="img/Menu/lapis.png" class="w-100" alt="" />
                                </div>
                            </div>
                            <div class="food-informaion">
                                <div class="row align-items-center">
                                    <div class="col-12"><h2 class="text-center">Lapis</h2></div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"></div>
                                </div>
                            </div>
                        </div>
                    </a>
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
                        <p>Copyright CodeSirens</p>
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
    </script>
</body>
</html>