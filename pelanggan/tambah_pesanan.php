<?php
include 'koneksi.php';

// 1. Validasi agar $_POST[...] ada semua
if (
    ! isset(
      $_POST['menu'], $_POST['jumlah'], $_POST['tanggal'], $_POST['waktu'],
      $_POST['nama'], $_POST['email'], $_POST['telepon'], 
      $_POST['alamat'], $_POST['catatan_khusus']
    )
) {
    echo "Ada data yang belum dikirim dari form. Cek kembali field input-nya.";
    exit;
}

// 2. Tangkap data
$menu           = $_POST['menu'];
$jumlah         = $_POST['jumlah'];
$tanggal        = $_POST['tanggal'];
$waktu          = $_POST['waktu'];
$nama           = $_POST['nama'];
$email          = $_POST['email'];
$telepon        = $_POST['telepon'];
$alamat         = $_POST['alamat'];
$catatan_khusus = $_POST['catatan_khusus'];

// 3. Ambil harga menu dari database
$sql_harga = "SELECT harga FROM tbl_produk WHERE nama = '$menu'";
$result_harga = mysqli_query($koneksi, $sql_harga);
$row = mysqli_fetch_assoc($result_harga);
$harga_per_item = $row['harga'];  // Ambil harga per item

// 4. Hitung total harga
$total_harga = $harga_per_item * $jumlah;

// 5. Simpan ke DB
$sql = "INSERT INTO tbl_pemesanan
    (menu, jumlah, tanggal, waktu, nama, email, telepon, alamat, catatan_khusus, total_harga)
  VALUES
    ('$menu', '$jumlah', '$tanggal', '$waktu', '$nama', '$email', '$telepon', '$alamat', '$catatan_khusus', '$total_harga')";
mysqli_query($koneksi, $sql);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Struk Pesanan</title>
    <link rel="stylesheet" href="styleall.css"> <!-- Pindahkan CSS ke file ini nanti -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff8f0;
            padding: 30px;
        }
        .struk {
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
            text-align: center;
        }
        .logo {
            width: 100px;
            margin-bottom: 10px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin: 5px 0;
        }
        .subtitle {
            font-size: 16px;
            color: #666;
            margin-bottom: 10px;
        }
        .divider {
            border-top: 1px dashed #aaa;
            margin: 10px 0 20px;
        }
        .info {
            text-align: left;
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 8px;
            background: #fdfdfd;
        }
        .info p {
            margin: 8px 0;
        }
        .thanks {
            margin-top: 30px;
            font-style: italic;
            color: #444;
        }
        .btn-ok {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 25px;
            font-size: 16px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        .info {
            text-align: left;
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 8px;
            background: #fdfdfd;
            font-size: 14px;
        }
        .row {
            display: grid;
            grid-template-columns: 150px 10px 1fr;
            margin: 6px 0;
        }
        .label {
            font-weight: bold;
        }
        .colon {
            text-align: center;
        }
    </style>
</head>

<body>
     <!-- Popup warning, harus di dalam body -->
  <div id="popup"
       style="display:none;
              position:fixed;
              top:0; left:0;
              width:100%; height:100%;
              background:rgba(0,0,0,0.5);">
    <div style="background:white;
                padding:20px;
                max-width:400px;
                margin:100px auto;
                border-radius:10px;
                text-align:center;">
      <p><strong>⚠️ HARAP DI SCREENSHOT TERLEBIH DAHULU!</strong></p>
      <p>Klik <strong>Hapus</strong> untuk menghapus data ini.<br>
         Klik <strong>Batal</strong> jika tidak.</p>
      <button onclick="hapusData()"
              style="background:#dc3545;
                     color:white;
                     padding:10px 20px;
                     border:none;
                     border-radius:6px;">
        Hapus
      </button>
      <button onclick="tutupPopup()"
              style="margin-left:10px;
                     background:gray;
                     color:white;
                     padding:10px 20px;
                     border:none;
                     border-radius:6px;">
        Batal
      </button>
    </div>
  </div>
    <div class="struk">
        <img src="img/biteka1.png" alt="Logo" class="logo">
        <div class="title">BitTeka Bakery</div>
        <div class="subtitle">Kudus</div>
        <div class="divider"></div>

        <div class="info">
            <div class="row"><span class="label">Nama</span><span class="colon">:</span><span><?php echo $nama; ?></span></div>
            <div class="row"><span class="label">Menu</span><span class="colon">:</span><span><?php echo $menu; ?></span></div>
            <div class="row"><span class="label">Jumlah</span><span class="colon">:</span><span><?php echo $jumlah; ?></span></div>
            <div class="row"><span class="label">Tanggal</span><span class="colon">:</span><span><?php echo $tanggal; ?></span></div>
            <div class="row"><span class="label">Waktu</span><span class="colon">:</span><span><?php echo $waktu; ?></span></div>
            <div class="row"><span class="label">Telepon</span><span class="colon">:</span><span><?php echo $telepon; ?></span></div>
            <div class="row"><span class="label">Email</span><span class="colon">:</span><span><?php echo $email; ?></span></div>
            <div class="row"><span class="label">Alamat</span><span class="colon">:</span><span><?php echo $alamat; ?></span></div>
            <div class="row"><span class="label">Catatan Khusus</span><span class="colon">:</span><span><?php echo $catatan_khusus; ?></span></div>
            <div class="row"><span class="label">Total Harga</span><span class="colon">:</span><span>Rp. <?php echo number_format($total_harga, 0, ',', '.'); ?></span></div>
        </div>

        <div class="thanks">Terima kasih telah memesan di toko kami!</div>

        <button class="btn-ok" onclick="konfirmasi()">OK</button>
    </div>

    <script>
        function konfirmasi() {
            document.getElementById('popup').style.display = 'block';
        }

        function tutupPopup() {
            document.getElementById('popup').style.display = 'none';
        }

        function hapusData() {
            window.location.href = "index.php";
        }
    </script>
</body>
</html>