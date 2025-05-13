<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/biteka1.png" type="image/x-icon" />
    <link rel="icon" href="img/biteka1.png" type="image/x-icon" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- Icofont CSS -->
    <link rel="stylesheet" href="css/icofont.min.css" />
    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="css/venobox.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/styleall.css?v=1" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Inline CSS untuk jarak, styling pencarian, dan notifikasi -->
    <style>
        .reservation-head {
            margin-top: 100px; /* Jarak lebih besar untuk memisahkan dari header */
        }
        .reservation-head h2 {
            color: rgb(44, 41, 34); /* Warna untuk "Laporan" */
        }
        .reservation-head h2 .pemesanan-text {
            color: rgb(90, 70, 48); /* Warna untuk "Pemesanan" */
        }
        /* Styling untuk input pencarian dan tombol */
        .search-container {
            margin: 20px 0;
            display: flex;
            justify-content: flex-start; /* Sejajarkan ke kiri */
            align-items: center;
            margin-left: 20px; /* Tambahkan jarak dari sisi kiri */
        }
        .search-container input {
            padding: 10px;
            width: 300px;
            border: 1px solid #ddd;
            border-right: none; /* Hapus border kanan agar menyatu dengan tombol */
            border-radius: 5px 0 0 5px; /* Sudut membulat di kiri */
            font-size: 16px;
        }
        .search-container input:focus {
            outline: none;
            border-color: #ff702a;
        }
        .search-container button {
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-left: none; /* Hapus border kiri agar menyatu dengan input */
            border-radius: 0 5px 5px 0; /* Sudut membulat di kanan */
            background-color: #ff702a; /* Warna background tombol */
            color: #fff; /* Warna ikon */
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .search-container button:hover {
            background-color: #e38b29; /* Warna saat hover */
        }
        /* Styling untuk notifikasi data tidak ditemukan */
        .no-data-notification {
            display: none;
            margin: 20px;
            padding: 15px;
            background-color: #ffe6e6;
            border: 1px solid #ff9999;
            border-radius: 5px;
            color: #cc0000;
            font-size: 16px;
            text-align: center;
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
                                <a class="nav-link" href="index.php">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="produk.php">Produk</a>
                            </li>
                            <li class="nav-item active">
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
    
    <div class="reservation-head text-center">
        <h2>Laporan <span class="pemesanan-text">Pemesanan</span></h2>
    </div>

    <!-- Kolom pencarian dengan ikon, sejajar kiri dengan jarak -->
    <div class="search-container">
        <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Cari berdasarkan Menu, Nama, atau Tanggal...">
        <button onclick="searchTable()"><i class="icofont-search-1"></i></button>
    </div>

    <!-- Elemen notifikasi data tidak ditemukan -->
    <div id="noDataNotification" class="no-data-notification">
        Data tidak ditemukan.
    </div>

    <br />
    <table class="tabel_hasil">
        <tr>
            <th>NO</th>
            <th>Menu</th>
            <th>Jumlah Pesanan</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Nama Pemesan</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Catatan Khusus</th>
            <th>Total Harga</th>
            <th>Aksi Tambahan</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from tbl_pemesanan");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['menu']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td><?php echo $d['tanggal']; ?></td>
                <td><?php echo $d['waktu']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['telepon']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['catatan_khusus']; ?></td>
                <td><?php echo $d['total_harga']; ?></td>
                <td>
                    <a href="edit_pesanan.php?menu=<?php echo $d['menu']; ?>" class="book-now">DETAIL PESANAN</a>
                    <a href="hapus_order.php?menu=<?php echo $d['menu']; ?>" class="book-now">HAPUS PESANAN</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <div class="col-12 text-center mt-5">
        <a href="order.php" class="book-now">TAMBAH PESANAN</a>
    </div>

    <!-- JavaScript untuk pencarian -->
    <script>
        function searchTable() {
            // Ambil input pencarian
            let input = document.getElementById("searchInput");
            let filter = input.value.toLowerCase();
            let table = document.querySelector(".tabel_hasil");
            let tr = table.getElementsByTagName("tr");
            let noDataNotification = document.getElementById("noDataNotification");
            let visibleRows = 0;

            // Loop melalui semua baris tabel, kecuali header (baris pertama)
            for (let i = 1; i < tr.length; i++) {
                let tdMenu = tr[i].getElementsByTagName("td")[1]; // Kolom Menu
                let tdNama = tr[i].getElementsByTagName("td")[5]; // Kolom Nama Pemesan
                let tdTanggal = tr[i].getElementsByTagName("td")[3]; // Kolom Tanggal

                if (tdMenu || tdNama || tdTanggal) {
                    let menuText = tdMenu.textContent || tdMenu.innerText;
                    let namaText = tdNama.textContent || tdNama.innerText;
                    let tanggalText = tdTanggal.textContent || tdTanggal.innerText;

                    // Cek apakah input cocok dengan salah satu kolom
                    if (
                        menuText.toLowerCase().indexOf(filter) > -1 ||
                        namaText.toLowerCase().indexOf(filter) > -1 ||
                        tanggalText.toLowerCase().indexOf(filter) > -1
                    ) {
                        tr[i].style.display = ""; // Tampilkan baris jika cocok
                        visibleRows++;
                    } else {
                        tr[i].style.display = "none"; // Sembunyikan baris jika tidak cocok
                    }
                }
            }

            // Tampilkan atau sembunyikan notifikasi berdasarkan jumlah baris yang terlihat
            if (visibleRows === 0) {
                noDataNotification.style.display = "block";
            } else {
                noDataNotification.style.display = "none";
            }
        }
    </script>
</body>
</html>