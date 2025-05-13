-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2025 at 07:46 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dessertzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'bitteka@gmail.com', 'sirens1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan`
--

CREATE TABLE `tbl_pemesanan` (
  `id` int NOT NULL,
  `menu` varchar(100) DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `alamat` text,
  `catatan_khusus` text,
  `total_harga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`id`, `menu`, `jumlah`, `tanggal`, `waktu`, `nama`, `email`, `telepon`, `alamat`, `catatan_khusus`, `total_harga`) VALUES
(6, 'Donat Keju', 20, '2025-04-29', '22:31:00', 'Yaya', 'indomie@gmail.com', '5555555555', 'Jalan melati', 'mantab', 70000),
(11, 'Bolu Pisang', 2, '2025-05-07', '10:49:00', 'Walid', 'walid@gmail.com', '87878787', 'Jalan Kamboja', 'Jangan terlalu manis', 26000),
(12, 'Bolu Coklat Almond', 5, '2025-05-07', '10:52:00', 'Bunga', 'rosebunga@gmail.com', '87878787', 'Jalan Rose', '123', 75000),
(13, 'Bolu Coklat Almond', 4, '2025-05-07', '12:09:00', 'Walid', 'walid@gmail.com', '87878787', 'Jalan marjan', 'Jangan terlalu manis', 60000),
(15, 'Bolu Coklat Almond', 4, '2025-05-07', '20:13:00', 'Maya', 'mayasari@gmail.com', '87878787', 'Jalan Bunga', 'Jangan terlalu manis', 60000),
(16, 'Bolu Keju', 3, '2025-05-07', '20:23:00', 'Indah', 'indah@gmail.com', '123456789', 'Jalan marjan', 'Kejunya yang banyak', 39000),
(17, 'Bolu Coklat', 2, '2025-05-07', '20:35:00', 'Caca Marica', 'caca@gmail.com', '12345678', 'Jalan Merpati', 'Jangan terlalu manis', 26000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` int NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kata_sandi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `nama_lengkap`, `no_hp`, `email`, `kata_sandi`) VALUES
(1, 'walid', '085641156567', 'walid@gmail.com', '$2y$10$H.xcps2cOKEXCo2SEMw5RuTvzMYq31vABBT6GWiC7s4Weixl7nQJS'),
(2, 'Rose', '12345678', 'rosebunga@gmail.com', '$2y$10$Y50jdFisVA7WTfH5THAzlOiOFmG6KmLq2CRSbKwumFaET248/mA6O'),
(3, 'Puspa', '12345678', 'ayupuspa@gmail.com', '$2y$10$xgQCvsVw67kt9f.F1JGf4.sAFbjdVv4Ou2Mv1rhiirz5BHptpvvcW'),
(4, 'maya sari', '12345678', 'mayasari@gmail.com', '$2y$10$MLRPH3HohE.WhZqEhslHQeftVpVIU8Cu54x6DeYE2AvQLHSnEcDgy'),
(5, 'indah sari', '12345678', 'indah@gmail.com', '$2y$10$sGRh34njnI5qlPeD12BhWOEe2SRdOXYoTeKsLZHzh88oepCTbpriW'),
(6, 'Caca Marica', '12345678', 'caca@gmail.com', '$2y$10$Lvf4dsHDk1fl8BPGFRFQcu4xHZ0WgYpyuIpHp/CLmcseYUvAy9myW');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id` int NOT NULL,
  `nama` varchar(35) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kategori` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id`, `nama`, `harga`, `deskripsi`, `gambar`, `kategori`) VALUES
(1, 'Donat Salju', '3000', 'Donat lembut dengan taburan gula salju manis.', 'img/Menu/donat1.png', 'donuts'),
(2, 'Donat Coklat', '3000', 'Donat lembut dengan lapisan cokelat premium.', 'img/Menu/donat2.png', 'donuts'),
(3, 'Donat Keju', '3000', 'Donat empuk dengan taburan keju gurih.', 'img/Menu/donat3.png', 'donuts'),
(4, 'Donat Almond', '3500', 'Donat dengan cokelat putih dan topping almond.', 'img/Menu/donat5.jpg', 'donuts'),
(5, 'Donat Matcha', '3000', 'Donat dengan rasa matcha premium sekali', 'img/donat6.jpg', 'donuts'),
(6, 'Donat Mix', '15000', 'Kumpulan donat berbagai rasa.', 'img/Menu/donat4.jpg', 'donuts'),
(7, 'Bolu Coklat Almond', '15000', 'Bolu coklat dengan topping almond panggang.', 'img/Menu/bolu1.png', 'bolu'),
(8, 'Bolu Pisang', '13000', 'Bolu manis dengan rasa pisang alami.', 'img/Menu/bolu2.png', 'bolu'),
(9, 'Bolu Pandan Keju', '15000', 'Bolu pandan dengan topping keju.', 'img/Menu/bolu3.png', 'bolu'),
(10, 'Bolu Coklat', '13000', 'Bolu dengan rasa coklat yang kaya.', 'img/Menu/bolu4.png', 'bolu'),
(11, 'Bolu Keju', '13000', 'Bolu manis dengan keju gurih banget', 'img/bolu5.png', 'bolu'),
(12, 'Bolu Roll', '15000', 'Bolu gulung dengan isian manis.', 'img/Menu/bolu6.png', 'bolu'),
(13, 'Roti Abon', '4000', 'Roti lembut dengan topping abon gurih.', 'img/Menu/roti1.png', 'roti'),
(14, 'Roti Pisang Coklat', '4500', 'Roti dengan isian pisang dan coklat leleh.', 'img/Menu/roti2.png', 'roti'),
(15, 'Garlic Bread', '4000', 'Roti panggang dengan mentega bawang putih.', 'img/Menu/roti3.png', 'roti'),
(16, 'Roti Goreng Isi Coklat', '3000', 'Roti goreng dengan isian coklat leleh.', 'img/Menu/roti4.png', 'roti'),
(17, 'Roti Kasur', '10000', 'Roti empuk cocok untuk berbagai isian.', 'img/Menu/roti5.png', 'roti'),
(18, 'Choco Bun', '4500', 'Roti dengan isian coklat manis.', 'img/Menu/roti6.png', 'roti'),
(19, 'Klepon', '3000', 'Ketan isi gula merah dengan balutan kelapa.', 'img/Menu/jajan1.jpg', 'jajan'),
(20, 'Kue Lumpur', '5000', 'Kue kenyal dengan topping kacang atau coklat.', 'img/Menu/jajan2.jpg', 'jajan'),
(21, 'Onde Onde', '3000', 'Ketan isi kacang hijau dengan wijen.', 'img/Menu/jajan3.jpg', 'jajan'),
(22, 'Dadar Gulung', '3000', 'Kue gulung isi kelapa dan gula merah.', 'img/Menu/jajan4.jpg', 'jajan'),
(23, 'Serabi', '3000', 'Serabi kenyal dengan aroma daun pisang.', 'img/jajan5.jpg', 'jajan'),
(24, 'Getuk Lindri', '1500', 'Singkong halus warna-warni dengan kelapa parut.', 'img/jajan6.jpg', 'jajan'),
(25, 'Croissant', '10000', 'Roti lapis renyah bermentega.', 'img/Menu/pastry1.jpg', 'pastry'),
(26, 'Danish Pastry', '8000', 'Pastry renyah dengan isian buah atau coklat.', 'img/Menu/pastry2.jpg', 'pastry'),
(27, 'Tart Buah', '5000', 'Tart dengan krim dan buah segar.', 'img/Menu/pastry3.jpg', 'pastry'),
(28, 'Puff Pastry', '7000', 'Pastry lapis ringan dengan topping buah.', 'img/Menu/pastry4.jpg', 'pastry'),
(29, 'Pastel de Nata', '7000', 'Tart custard khas Portugal.', 'img/pastry5.jpg', 'pastry'),
(30, 'Sfogliatella', '11000', 'Pastry renyah isi ricotta dan semolina.', 'img/Menu/pastry6.jpg', 'pastry'),
(31, 'Lapis Legit', '53000', 'Kue lapis manis dengan aroma rempah.', 'img/Menu/lapis.png', 'lapis'),
(32, 'Lapis Sagu', '15000', 'Kue lapis kenyal dari sagu warna-warni.', 'img/Menu/lapis2.jpg', 'lapis'),
(33, 'Lapis Susu', '45000', 'Kue lapis lembut dengan lapisan susu creamy.', 'img/Menu/lapis3.jpg', 'lapis'),
(34, 'Lapis Talas', '40000', 'Kue lapis kenyal dengan rasa talas unik.', 'img/Menu/lapis4.jpg', 'lapis'),
(35, 'Lapis Belacan', '45000', 'Kue lapis dengan lapisan hitam khas.', 'img/Menu/lapis5.jpg', 'lapis'),
(36, 'Lapis Daun Pandan', '45000', 'Kue lapis dengan aroma pandan segar.', 'img/Menu/lapis6.jpg', 'lapis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
