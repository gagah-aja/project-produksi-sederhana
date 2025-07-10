<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Moobi Style Landing Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * { box-sizing: border-box; }
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #fff;
      color: #333;
    }

    header {
      background: #fff;
      border-bottom: 1px solid #eee;
      padding: 20px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .logo img {
      height: 40px;
    }

    nav {
      display: flex;
      justify-content: center;
      flex: 1;
      gap: 30px;
    }

    nav a {
      text-decoration: none;
      color: #6b46c1;
      font-weight: bold;
      font-size: 16px;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #4c2ca0;
    }

    .hero {
      display: flex;
      flex-wrap: wrap;
      padding: 60px 40px;
      align-items: center;
      background: #f8f8ff;
    }

    .hero-text {
      flex: 1;
      min-width: 300px;
    }

    .hero-text h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    .hero-text span {
      color: #9f7aea;
    }

    .hero-text p {
      color: #666;
      max-width: 600px;
    }

    .hero-img {
      flex: 1;
      text-align: center;
      min-width: 300px;
    }

    .hero-img img {
      max-width: 100%;
      height: auto;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #f0f0f0;
      margin-top: 40px;
      font-size: 14px;
      color: #666;
    }

    @media (max-width: 768px) {
      nav {
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>

<header>
  <div class="logo">
    <img src="{{ asset('logo roti.png') }}" alt="logo">
  </div>
  <nav>
    <a href="#">BERANDA</a>
    <a href="#">FITUR</a>
    <a href="#">PRODUK</a>
    <a href="#">HARGA</a>
    <a href="#">BLOG</a>
    <a href="#">FAQ</a>
  </nav>
</header>

<section class="hero">
  <div class="hero-text">
    <h1>Menu <span>spesifik</span> dan adaptif <br> <span>sesuai</span> bidang bisnis</h1>
    <p>Menu moobi dirancang dapat menyesuaikan secara spesifik untuk kategori bidang bisnis seperti Retail, Food, Salon, Service, Logistic, Hotel, Medis, Pendidikan, Sekolah, Travel, dan Kontraktor.</p>
  </div>
  <div class="hero-img">
    <img src="{{ asset('roti.png') }}" alt="Ilustrasi Sistem" width="400">
  </div>
</section>

<footer>
  &copy; {{ date('Y') }} Moobi-style UMKM App. All rights reserved.
</footer>

</body>
</html>
