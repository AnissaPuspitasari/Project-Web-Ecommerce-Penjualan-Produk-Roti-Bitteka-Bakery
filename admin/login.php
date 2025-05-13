<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_dessertzone";

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Proses login jika tombol diklik
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $kata_sandi = mysqli_real_escape_string($conn, $_POST['kata_sandi']);

  $query = "SELECT * FROM admin WHERE email='$email' AND password='$kata_sandi'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    $_SESSION['admin'] = $email;
    header("Location: index.php");
    exit();
  } else {
    echo "<script>alert('Email atau Kata Sandi salah!'); window.location='login.php';</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - BitTeka</title>
  <link rel="shortcut icon" href="img/biteka1.png" type="image/x-icon"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      height: 100%;
      font-family: 'Inter', sans-serif;
    }

    .background {
      background: url('img/bg2.jpg') no-repeat center center/cover;
      position: absolute;
      width: 100%;
      height: 100%;
      z-index: -2;
    }

    .overlay {
      position: absolute;
      width: 100%;
      height: 100%;
      background-color: rgba(34, 34, 33, 0.6); 
      z-index: -1;
    }

    .login-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      position: relative;
      z-index: 1;
      padding: 20px;
    }

    .login-container {
      background: #fff;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      max-width: 400px;
      width: 100%;
      text-align: center;
    }

    .icon-box {
      background: #fff0d9;
      width: 60px;
      height: 60px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
    }

    .icon-box img {
      width: 30px;
    }

    h2 {
      margin: 0 0 10px;
      color: #2c1c0f;
    }

    p {
      color: #6a5d4d;
      font-size: 14px;
      margin-bottom: 20px;
    }

    input[type="email"], input[type="password"], input[type="text"] {
      width: 100%;
      padding: 12px;
      border-radius: 10px;
      border: 1px solid #ccc;
      margin-bottom: 15px;
      font-size: 14px;
    }

    .password-box {
      position: relative;
    }

    .toggle-password {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      font-size: 18px;
      color: #999;
      height: 20px;
      display: flex;
      align-items: center;
    }
    .toggle-password i {
      font-size: 18px;
      color: #999;
    }

    button {
      background: #a45c40;
      color: #fff;
      padding: 12px;
      border: none;
      border-radius: 10px;
      width: 100%;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background: #8c4e34;
    }

    .register-text {
      margin-top: 20px;
      font-size: 14px;
      color: #555;
    }

    .register-text a {
      color: #a45c40;
      text-decoration: none;
      font-weight: 600;
    }

    .register-text a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="background"></div>
  <div class="overlay"></div>

  <div class="login-wrapper">
    <div class="login-container">
      <div class="icon-box">
        <img src="img/biteka1.png" alt="bread icon" />
      </div>
      <h2>Hai Admin Selamat Datang di BitTeka Bakery</h2>
      <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Alamat Email" required>
        <div class="password-box">
          <input type="password" name="kata_sandi" id="kata_sandi" placeholder="Kata Sandi" required>
          <span class="toggle-password" onclick="togglePassword(this)">
            <i class="fa-solid fa-eye"></i>
          </span>
        </div>
        <button type="submit">Login</button>
      </form>
    </div>
  </div>

  <script>
    function togglePassword(el) {
      const pw = document.getElementById('kata_sandi');
      const icon = el.querySelector('i');

      if (pw.type === 'password') {
        pw.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        pw.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    }
  </script>
</body>
</html>