<?php
// Contoh data produk (Anda bisa menggantinya dengan data dari database)
$products = [
    ['nama' => 'Donat Salju', 'harga' => 'Rp. 3.000', 'deskripsi' => 'Lembutnya adonan, manisnya gula salju, nikmatnya tiada tara!
                  Donat Salju siap jadi teman ngemilmu hari ini. Satu gigitan, jatuh cinta!', 'gambar' => 'img/Menu/donat1.png'],
    ['nama' => 'Donat Coklat', 'harga' => 'Rp. 3.000', 'deskripsi' => 'Donat lembut yang dilapisi cokelat premium, memberikan rasa manis yang kaya dan memanjakan lidah. 
                    Sempurna untuk cemilan, hadiah, atau teman minum kopi.','gambar' => 'img/Menu/donat2.png'],
    ['nama' => 'Donat Keju', 'harga' => 'Rp. 3.000', 'deskripsi' => 'Donat empuk bertabur keju pilihan, menciptakan perpaduan rasa manis dan gurih yang sempurna. 
                    Ideal untuk hidangan santai maupun acara spesial.', 'gambar' => 'img/Menu/donat3.png'],
    ['nama' => 'Donat Almond', 'harga' => 'Rp. 3.500', 'deskripsi' => 'Donat lembut dengan lapisan cokelat putih manis dan taburan almond renyah, memberikan rasa gurih yang sempurna..', 'gambar' => 'img/Menu/donat5.jpg'],
    ['nama' => 'Donat Matcha', 'harga' => 'Rp. 3.000', 'deskripsi' => 'Nikmati kelembutan donat dengan sentuhan matcha premium, memberikan rasa manis seimbang dan keharuman teh hijau yang segar. 
                    Sempurna untuk pencinta matcha!', 'gambar' => 'img/Menu/donat6.jpg'],
    ['nama' => 'Donat Mix', 'harga' => 'Rp. 15.000','deskripsi' => 'Nikmati sensasi berbagai rasa dalam satu piring!  Memberikan pengalaman rasa yang beragam dalam setiap gigitan.', 'gambar' => 'img/Menu/donat4.jpg'],
    ['nama' => 'Bolu Coklat Almond', 'harga' => 'Rp. 15.000', 'deskripsi' => 'Nikmati kelembutan bolu coklat yang dipadukan dengan kenikmatan almond panggang, 
                    menciptakan kombinasi rasa manis dan gurih yang menggoda!', 'gambar' => 'img/Menu/bolu1.png'],
    ['nama' => 'Bolu Pisang', 'harga' => 'Rp. 13.000', 'deskripsi' => 'Bolu lembut dengan rasa manis alami pisang yang matang, memberikan sensasi kelembutan dan keharuman yang menggoda. 
                    Sempurna untuk camilan ringan atau teman minum teh!','gambar' => 'img/Menu/bolu2.png'],
    ['nama' => 'Bolu Pandan Keju', 'harga' => 'Rp. 15.000', 'deskripsi' => 'Bolu lembut dengan aroma pandan segar dan topping keju gurih, sempurna untuk camilan manis dan gurih!', 'gambar' => 'img/Menu/bolu3.png'],
    ['nama' => 'Bolu Coklat', 'harga' => 'Rp. 13.000', 'deskripsi' => 'Bolu lembut dengan rasa coklat yang kaya, nikmat dan memanjakan lidah di setiap gigitan!','gambar' => 'img/Menu/bolu4.png'],
    ['nama' => 'Bolu Keju', 'harga' => 'Rp. 13.000', 'deskripsi' => 'Bolu lembut dengan rasa manis dan gurih dari keju, cocok untuk camilan nikmat!', 'gambar' => 'img/Menu/bolu5.png'],
    ['nama' => 'Bolu Roll', 'harga' => 'Rp. 15.000', 'deskripsi' => 'Bolu lembut yang digulung dengan isian manis, memberikan kombinasi rasa nikmat dalam setiap lapisannya!', 'gambar' => 'img/Menu/bolu6.png'],
    ['nama' => 'Roti Abon', 'harga' => 'Rp. 4.000', 'deskripsi' => 'Roti lembut dengan taburan abon daging yang gurih, 
                    sempurna sebagai camilan savory yang mengenyangkan!', 'gambar' => 'img/Menu/roti1.png'],
    ['nama' => 'Roti Pisang Coklat', 'harga' => 'Rp. 4.500', 'deskripsi' => 'Roti lembut dengan isian pisang manis dan coklat leleh, menciptakan rasa yang kaya dan menggoda!', 'gambar' => 'img/Menu/roti2.png'],
    ['nama' => 'Garlic Bread', 'harga' => 'Rp. 4.000', 'deskripsi' => 'Roti panggang renyah dengan taburan mentega bawang putih yang harum, 
                    sempurna untuk menemani hidangan atau dinikmati begitu saja!','gambar' => 'img/Menu/roti3.png'],
    ['nama' => 'Roti Goreng Isi Coklat', 'harga' => 'Rp. 3.000', 'deskripsi' => 'Roti goreng renyah di luar dengan isian coklat leleh yang manis, 
                    menciptakan sensasi rasa yang menggoda di setiap gigitan!','gambar' => 'img/Menu/roti4.png'],
    ['nama' => 'Roti Kasur', 'harga' => 'Rp. 10.000', 'deskripsi' => 'Roti lembut dan empuk dengan tekstur seperti kasur, 
                    sempurna untuk dinikmati dengan berbagai isian atau sebagai camilan ringan yang nyaman!', 'gambar' => 'img/Menu/roti5.png'],
    ['nama' => 'Choco Bun', 'harga' => 'Rp. 4.500', 'deskripsi' => 'Roti empuk dengan isian coklat lezat yang meleleh di dalam, 
                    memberikan sensasi manis dan kenikmatan di setiap gigitan!', 'gambar' => 'img/Menu/roti6.png'],
    ['nama' => 'Klepon', 'harga' => 'Rp. 3.000', 'deskripsi' => 'Kue ketan isi gula merah yang kenyal, dibalut kelapa parut, 
                    memberikan rasa manis dan gurih yang sempurna dalam setiap gigitan!', 'gambar' => 'img/Menu/jajan1.jpg'],
    ['nama' => 'Kue Lumpur', 'harga' => 'Rp. 3.000', 'deskripsi' => 'Kue lembut dengan tekstur kenyal, dipadu rasa manis dan gurih, 
                    sering disajikan dengan topping kacang atau coklat, cocok untuk camilan santai!','gambar' => 'img/Menu/jajan2.jpg'],
    ['nama' => 'Onde Onde', 'harga' => 'Rp. 3.000', 'deskripsi' => 'Kue ketan isi kacang hijau manis, 
                    dilapisi biji wijen yang renyah, memberikan rasa gurih dan manis yang sempurna!', 'gambar' => 'img/Menu/jajan3.jpg'],
    ['nama' => 'Dadar Gulung', 'harga' => 'Rp. 3.000', 'deskripsi' => 'Kue tradisional dengan lapisan tepung hijau yang lembut, 
                    diisi kelapa parut dan gula merah manis, menggoda selera dalam setiap gulungannya!','gambar' => 'img/Menu/jajan4.jpg'],
    ['nama' => 'Serabi', 'harga' => 'Rp. 2.500', 'deskripsi' => 'Serabi kenyal dengan rasa gurih atau manis, dibungkus daun pisang yang menambah aroma khas, 
                    sempurna untuk camilan tradisional!','gambar' => 'img/Menu/jajan5.jpg'],
    ['nama' => 'Getuk Lindri', 'harga' => 'Rp. 1.500', 'deskripsi' => 'Kue tradisional berbahan singkong yang dihaluskan dan dibentuk memanjang, berwarna-warni, 
                    dengan rasa manis legit dan taburan kelapa parut!','gambar' => 'img/Menu/jajan6.jpg'],
    ['nama' => 'Croissant', 'harga' => 'Rp. 10.000', 'deskripsi' => 'Roti berlapis-lapis dengan tekstur renyah di luar dan lembut di dalam, 
                beraroma mentega, cocok untuk sarapan atau camilan elegan!', 'gambar' => 'img/Menu/pastry1.jpg'],
    ['nama' => 'Danish Pastry', 'harga' => 'Rp. 8.000', 'deskripsi' => 'Pastry berlapis renyah dengan isian manis seperti buah, krim, atau coklat, 
                menawarkan perpaduan rasa lezat dalam setiap gigitan!', 'gambar' => 'img/Menu/pastry2.jpg'],
    ['nama' => 'Tart Buah', 'harga' => 'Rp. 5.000', 'deskripsi' => 'Kue tart dengan dasar renyah dan lembut, diisi krim manis lalu dihias aneka buah segar yang menggoda!','gambar' => 'img/Menu/pastry3.jpg'],
    ['nama' => 'Puff Pastry', 'harga' => 'Rp. 7.000', 'deskripsi' => 'Pastry berlapis ringan dan renyah, dipadukan dengan topping aneka buah segar untuk rasa manis dan segar yang sempurna!','gambar' => 'img/Menu/pastry4.jpg'],
    ['nama' => 'Pastel de Nata', 'harga' => 'Rp. 5.000', 'deskripsi' => 'Kue tart khas Portugal dengan kulit pastry renyah dan isian krim custard manis, 
                dipanggang hingga keemasan untuk cita rasa lembut dan kaya!','gambar' => 'img/Menu/pastry5.jpg'],
    ['nama' => 'Sfogliatella', 'harga' => 'Rp. 11.000','deskripsi' => 'Pastry khas Italia dengan lapisan tipis dan renyah, berisi campuran manis seperti ricotta, semolina, dan buah kering, 
                menghasilkan tekstur garing di luar dan lembut di dalam!', 'gambar' => 'img/Menu/pastry6.jpg'],
    ['nama' => 'Lapis Legit', 'harga' => 'Rp. 53.000', 'deskripsi' => 'Kue lapis bertekstur padat dan lembut, dibuat dengan bahan utama telur, mentega, dan rempah-rempah, 
                memiliki rasa manis dengan lapisan tipis yang disusun bertumpuk!','gambar' => 'img/Menu/lapis.png'],
    ['nama' => 'Lapis Sagu', 'harga' => 'Rp. 15.000', 'deskripsi' => 'Kue lapis dengan tekstur kenyal dan lembut, terbuat dari sagu yang diberi warna-warni dan rasa manis, 
                cocok sebagai camilan tradisional!', 'gambar' => 'img/Menu/lapis2.jpg'],
    ['nama' => 'Lapis Susu', 'harga' => 'Rp. 45.000', 'deskripsi' => 'Kue lapis yang lembut dengan lapisan susu manis, 
                memberikan rasa yang creamy dan nikmat dalam setiap lapisannya', 'gambar' => 'img/Menu/lapis3.jpg'],
    ['nama' => 'Lapis Talas', 'harga' => 'Rp. 40.000', 'deskripsi' => 'Kue lapis dengan tekstur lembut dan kenyal, terbuat dari talas yang memberikan rasa gurih dan manis yang unik, 
                cocok untuk camilan tradisional!','gambar' => 'img/Menu/lapis4.jpg'],
    ['nama' => 'Lapis Belacan', 'harga' => 'Rp. 45.000', 'deskripsi' => 'Kue lapis dengan lapisan berwarna hitam yang khas', 'gambar' => 'img/Menu/lapis5.jpg'],
    ['nama' => 'Lapis Daun Pandan', 'harga' => 'Rp. 45.000', 'deskripsi' => 'Kue lapis dengan aroma pandan segar, lapisan lembut dan kenyal yang memberikan rasa manis dan harum alami, 
                cocok untuk camilan tradisional','gambar' => 'img/Menu/lapis6.jpg'],
      
];

// Ambil query pencarian dari URL
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Filter produk berdasarkan query
$filteredProducts = array_filter($products, function($product) use ($query) {
    return stripos($product['nama'], $query) !== false; // Mencari produk yang sesuai
});
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
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
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
        margin-left: auto; /* Memindahkan ke kanan */
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
    <!--HEADER PART START-->
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
                <li class="nav-item active">
                  <a href="produk.php" class="nav-link">Produk</a>
                </li>
                <li class="nav-item">
                  <a href="login.php" class="nav-link">Order</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tentang_kami.php">Tentang Kami</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!--HEADER PART END-->
    <div class="food-menu-section" id="food-menu">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="menu-head text-center">
              <br><br>
              <h2>Menu of <span>BitTeka</span></h2>
              <p></p>
            </div>
    <div class="container">
  <h3 class="text-center my-4">Hasil Pencarian untuk: "<?php echo htmlspecialchars($query); ?>"</h3>
  <div class="row">
    <?php if (count($filteredProducts) > 0): ?>
      <?php foreach ($filteredProducts as $product): ?>
        <div class="col-xs-12 col-sm-6 col-md-4 product">
          <div class="food-menu text-center">
            <div class="food-img-info">
              <div class="food-img">
                <img src="<?php echo $product['gambar']; ?>" alt="<?php echo $product['nama']; ?>" class="w-100" />
              </div>
              <div class="overlay text-left">
                <h4>Deskripsi</h4>
                <span><?php echo $product['deskripsi']; ?></span>
              </div>
            </div>
            <div class="food-informaion">
              <h2><?php echo $product['nama']; ?></h2>
              <div class="food-info">
                <h3><?php echo $product['harga']; ?></h3>
              </div>
              <a href="login.php" class="btn order-btn2">Pesan</a>
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