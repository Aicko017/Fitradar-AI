<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tentang Fitradar AI - FITRADAR AI - Health & Fitness</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
    }

    body {
      background-color: #1E1F9D;
      color: white;
      line-height: 1.6;
    }

    .navbar {
      background-color: #1E1F9D;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar img {
      height: 50px;
    }

    .menu {
      display: flex;
      align-items: center;
      gap: 1.5rem;
    }

    .menu a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    .menu a:hover {
      color: #73DE3F;
    }

    .menu button {
      padding: 0.5rem 1rem;
      background-color: #ddd;
      border: none;
      border-radius: 5px;
      color: black;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .menu button:hover {
      background-color: #bbb;
    }

    .hero {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      padding: 4rem 2rem;
      background-color: white;
      color: #1E1F9D;
    }

    .hero .text {
      max-width: 500px;
    }

    .hero h1 {
      font-size: 2.5rem;
      font-weight: 800;
      margin-bottom: 1rem;
    }

    .hero p {
      font-size: 1rem;
      margin-bottom: 1.5rem;
      color: black;
    }

    .hero button {
      padding: 0.7rem 1.5rem;
      background-color: #73DE3F;
      color: black;
      font-weight: 600;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .hero button:hover {
      background-color: #5ac82b;
    }

    .hero img {
      height: 300px;
    }

    .green-bar {
      background-color: #73DE3F;
      height: 20px;
      width: 100%;
    }

    .section {
      background-color: #1E1F9D;
      color: white;
      padding: 4rem 2rem;
      text-align: center;
    }

    .section h2 {
      font-size: 1.8rem;
      font-weight: 600;
      margin-bottom: 2rem;
    }

    .features {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 2rem;
    }

    .feature {
      width: 400px;
      text-align: center;
    }

    .feature img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 0.5rem;
    }

    .feature h3 {
      font-size: 1rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .feature p {
      font-size: 0.9rem;
    }

    .about-container {
      background-image: url('/images/image.png');
      background-size: cover;
      background-position: center;
      position: relative;
      color: #fff;
      padding: 60px 40px;
      border-radius: 0px;
      margin: 0;
      width: 100vw;
      max-width: 100%;
      z-index: 1;
      overflow: hidden;
    }

    .about-container::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0, 0, 0, 0.6);
      z-index: 0;
      border-radius: 12px;
    }

    .about-container h1,
    .about-container p {
      position: relative;
      z-index: 2;
    }

    .about-container h1 {
      font-size: 2.3rem;
      text-align: center;
      margin-bottom: 25px;
      font-weight: 800;
    }

    .about-container p {
      font-size: 1rem;
      margin-bottom: 15px;
      text-align: justify;
    }

    .footer {
      background-color: #1E1F9D; /* Dark blue background */
      color: white;
      text-align: center; /* Center text content */
      padding: 2rem; /* Add some padding */
    }

    .footer .footer-logo-text {
      display: flex; /* Use flex to align logo and text */
      justify-content: center; /* Center horizontally */
      align-items: center; /* Vertically align */
      margin-bottom: 1rem; /* Space below the logo and text */
    }

    .footer .footer-logo-text img {
        height: 50px; /* Maintain logo size */
        margin-right: 10px; /* Space between logo and text */
    }

    .footer .footer-logo-text .logo-text {
        font-size: 1.5rem; /* Adjust text size as needed */
        font-weight: bold;
    }

    .footer p {
        font-size: 0.9rem; /* Adjust copyright text size */
        margin: 0; /* Remove default paragraph margin */
    }

  </style>
</head>
<body>
<div class="navbar">
  <div class="logo-container">
    <img src="/images/logo.png" alt="Logo FITRADAR AI" />
    <span class="logo-text">FITRADAR AI</span>
  </div>
  <div class="menu">
    <a href="#">Tentang kami</a>
    <button onclick="window.location.href='/login'">Masuk</button>
  </div>
</div>


  <div class="hero">
    <div class="text">
      <h1>Tingkatkan Gaya Hidup Sehatmu</h1>
      <p>Ingin kendalikan pola makanmu? Lacak makananmu, pahami kebiasaanmu, dan capai tujuanmu dengan mudah bersama kami.</p>
      <button onclick="window.location.href='/register'">Mulai</button>
    </div>
    <img src="/images/run.png" alt="Ilustrasi Lari" />
  </div>

  <div class="green-bar"></div>

  <div class="section">
    <h2>Dukungan terbaik untuk <br /><strong>kebutuhan kesehatan Anda</strong></h2>
    <div class="features">
      <div class="feature">
        <img src="/images/1.png" alt="Pelacakan Makanan" />
        <h3>Pelacakan Makanan</h3>
        <p>Catat apapun makanan Anda dengan mudah dan pantau nutrisi penting.</p>
      </div>
      <div class="feature">
        <img src="/images/2.png" alt="Rencana Personal" />
        <h3>Rencana Personal</h3>
        <p>Dapatkan rencana diet dan olahraga yang disesuaikan dengan tujuan Anda.</p>
      </div>
      <div class="feature">
        <img src="/images/3.png" alt="Pantau Kemajuan" />
        <h3>Pantau Kemajuan</h3>
        <p>Visualisasikan kemajuan Anda dengan laporan dan grafik yang mudah dipahami.</p>
      </div>
    </div>
  </div>


  <div class="about-container">
    <h1>Tentang Fitradar AI</h1>
    <p>Selamat datang di Fitradar AI! Kami dengan antusias mengembangkan Health & Fitness Evaluator AI, sebuah aplikasi web inovatif yang dirancang untuk mendukung perjalanan kesehatan Anda...</p>
    <p>Oleh karena itu, kami menciptakan solusi cerdas yang memberikan saran makanan dan olahraga yang disesuaikan dengan kebutuhan unik setiap individu.</p>
    <p>Fitur unggulan aplikasi kami adalah kemampuannya untuk mengenali kandungan nutrisi dan kalori makanan hanya dengan menggunakan kamera ponsel Anda.</p>
    <p>Tujuan utama kami adalah mewujudkan aplikasi ini menjadi alat yang bermanfaat dan mudah diakses...</p>
    <p>Harapan kami adalah agar aplikasi ini dapat menjadi sahabat setia Anda dalam meraih kesehatan yang lebih baik.</p>
  </div>

  <div class="footer">
    <div class="footer-logo-text">
      <img src="/images/logo.png" alt="Logo FITRADAR AI" />
      <span class="logo-text">FITRADAR AI</span>
    </div>
    <p>© 2025 Fitradar AI. Hak Cipta dilindungi.</p>
</div>

</body>
</html>