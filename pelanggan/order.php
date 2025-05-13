<?php
// Koneksi ke database (gunakan koneksi tunggal pada halaman ini)
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_dessertzone";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order | DessertZone</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="new_logo1.ico" type="image/x-icon" />
    <link rel="icon" href="new_logo1.ico" type="image/x-icon" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- Icofont CSS -->
    <link rel="stylesheet" href="css/icofont.min.css" />
    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="css/venobox.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/styleall.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- jQuery (dari CDN) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
</head>
<style>
  .reservation-head h2 {
    margin-top: 50px; /* Sesuaikan angka ini sesuai kebutuhan */
}

</style>
<body>
    <!-- HEADER, HERO, dsb... -->
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="icofont-navigation-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav navbar-custom">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a href="produk.php" class="nav-link">Produk</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Order</a></li>
                    <li class="nav-item"><a class="nav-link" href="tentang_kami.php">Tentang Kami</a></li>
                </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>

    

    <!-- FORM PESANAN -->
    <div class="reservation-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="reservation-head text-center">
                        <h2>Cicipi Kelezatan <span>Dessert Spesial</span> Sesuai Selera</h2>
                        <p>Pastikan detail pesanannya sudah tepat sebelum melakukan Konfirmasi</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 m-auto">
                    <div class="personal">
                        <!-- Form pesanan -->
                        <form method="post" action="tambah_pesanan.php">
                            <div class="form-row custom-form">
                                <!-- Pilih Menu -->
                                <div class="col-md-6 mt-3">
                                    <label for="menu">Pilih Menu<span class="wajib">*</span></label>
                                    <select id="menu" name="menu" class="form-control" required>
                                        <?php
                                        // Ubah query agar mengambil nama dan harga
                                        $sql = "SELECT nama, harga FROM tbl_produk";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value='" . $row["nama"] . "' data-harga='" . $row["harga"] . "'>" 
                                                    . $row["nama"] . "</option>";
                                            }
                                        } else {
                                            echo "<option value=''>Tidak ada menu</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <!-- Jumlah (dengan nilai default 1) -->
                                <div class="col-md-6 mt-3">
                                    <label for="jumlah">Jumlah<span class="wajib">*</span></label>
                                    <input type="number" id="jumlah" name="jumlah" class="form-control" min="1" max="20" value="1" required>
                                </div>

                                <!-- Harga Satuan -->
                                <div class="col-md-6 mt-3">
                                    <label for="harga">Harga Satuan</label>
                                    <input type="text" id="harga" name="harga" class="form-control" readonly>
                                </div>

                                <!-- Total Harga -->
                                <div class="col-md-6 mt-3">
                                    <label for="total_harga">Total Harga</label>
                                    <input type="text" id="total_harga" name="total_harga" class="form-control" readonly>
                                </div>

                                <!-- Tanggal -->
                                <div class="col-md-6 mt-3">
                                    <label for="tanggal">Tanggal<span class="wajib">*</span></label>
                                    <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                                </div>

                                <!-- Waktu -->
                                <div class="col-md-6 mt-3">
                                    <label for="waktu">Waktu<span class="wajib">*</span></label>
                                    <input type="time" id="waktu" name="waktu" class="form-control" required>
                                </div>

                                <div class="col-12 mt-5">
                                    <h4>Informasi Pribadi</h4>
                                </div>

                                <!-- Nama -->
                                <div class="col-md-6 mt-3">
                                    <label for="nama">Nama<span class="wajib">*</span></label>
                                    <input type="text" id="nama" name="nama" class="form-control" required>
                                </div>

                                <!-- Telepon -->
                                <div class="col-md-6 mt-3">
                                    <label for="telepon">Telepon<span class="wajib">*</span></label>
                                    <input type="text" id="telepon" name="telepon" class="form-control" required>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6 mt-3">
                                    <label for="email">Email<span class="wajib">*</span></label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>

                                <!-- Alamat -->
                                <div class="col-md-6 mt-3">
                                    <label for="alamat">Alamat<span class="wajib">*</span></label>
                                    <input type="text" id="alamat" name="alamat" class="form-control" required>
                                </div>

                                <!-- Catatan Khusus -->
                                <div class="col-12 mt-3">
                                    <label for="catatan_khusus">Catatan Khusus</label>
                                    <textarea id="catatan_khusus" name="catatan_khusus" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="col-12 text-center mt-5">
                                    <button type="submit" class="book-now">Kirim <i class="icofont-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                        <!-- Akhir form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir FORM PESANAN -->

    <!-- jQuery JS, Popper, Bootstrap, dan Venobox -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
    <!-- JavaScript untuk Menghitung Harga -->
    <script>
        function formatRupiah(angka) {
            return 'Rp ' + angka.toLocaleString('id-ID');
        }

        function updateHarga() {
            var selectedMenu = $('#menu').find(":selected");
            var harga = parseFloat(selectedMenu.data('harga')) || 0;
            var jumlah = parseInt($('#jumlah').val()) || 1;
            $('#harga').val(formatRupiah(harga));
            $('#total_harga').val(formatRupiah(harga * jumlah));
        }

        $(document).ready(function () {
            $('#menu, #jumlah').on('change keyup', updateHarga);
            updateHarga(); // Pemicu saat halaman dimuat
        });
        function formatRupiah(angka) {
    return 'Rp ' + angka.toLocaleString('id-ID');
}

function updateHarga() {
    var selectedMenu = $('#menu').find(":selected");
    var harga = parseFloat(selectedMenu.data('harga')) || 0;
    var jumlah = parseInt($('#jumlah').val()) || 1;

    // Jika harga atau jumlah tidak valid, set harga dan total harga ke 0
    if (harga > 0 && jumlah > 0) {
        $('#harga').val(formatRupiah(harga));
        $('#total_harga').val(formatRupiah(harga * jumlah));
    } else {
        $('#harga').val('');
        $('#total_harga').val('');
    }
}

$(document).ready(function () {
    $('#menu, #jumlah').on('change keyup', updateHarga);
    updateHarga(); // Pemicu saat halaman dimuat
});

    </script>
</body>
</html>

<?php
// Menutup koneksi
mysqli_close($conn);
?>