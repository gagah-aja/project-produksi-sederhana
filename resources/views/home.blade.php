<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>RotiMulia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * { box-sizing: border-box; }
    html {
      scroll-behavior: smooth;
    }

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
      color: #a5673d;
      font-weight: bold;
      font-size: 16px;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #a5673d;
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
      color: #a5673d;
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
    <a href="#hero">BERANDA</a>
    <a href="#input-bahanbaku">BAHAN BAKU</a>
    <a href="#">PRODUK</a>
    <a href="#">HARGA</a>
    <a href="#">BLOG</a>
    <a href="#">FAQ</a>
  </nav>
</header>

<section class="hero">
  <div class="hero-text">
    <h1><span>RotiMulia</span> – Rasa <br> yang <span>autentik</span> dan berkualitas</h1>
    <p>RotiMulia menghadirkan berbagai pilihan roti dengan cita rasa khas dan bahan baku pilihan. Cocok untuk kebutuhan harian, acara keluarga, maupun pesanan dalam jumlah besar untuk bisnis Anda.</p>
  </div>
  <div class="hero-img">
    <img src="{{ asset('roti.png') }}" alt="Ilustrasi RotiMulia" width="400">
  </div>
</section>


<section id="input-bahanbaku" style="padding: 60px 40px; background: #f8f8ff;">
  <h2 style="text-align: center; color: #a5673d; font-size: 2rem;">
    Input Bahan Baku Roti
  </h2>

  <div style="display: flex; flex-wrap: wrap; max-width: 1000px; margin: 40px auto; align-items: center; gap: 40px;">
    
    <!-- Gambar Roti -->
    <div style="flex: 1; text-align: center; min-width: 300px;">
      <img src="{{ asset('tiii.jpg') }}" alt="Ilustrasi Bahan Baku Roti" style="max-width: 100%; height: auto;">
      <p style="color: #a5673d; font-style: italic; margin-top: 10px;">Gunakan bahan berkualitas untuk rasa terbaik</p>
    </div>
    
    <!-- Form Input -->
    <form style="flex: 1; min-width: 300px; display: flex; flex-direction: column; gap: 20px;">
      <input type="text" placeholder="Nama Bahan Baku" style="padding: 12px; border: 1px solid #ccc; border-radius: 6px;">
      <input type="number" placeholder="Jumlah (misal: 2)" style="padding: 12px; border: 1px solid #ccc; border-radius: 6px;">
      <input type="text" placeholder="Satuan (misal: kg, liter, gram)" style="padding: 12px; border: 1px solid #ccc; border-radius: 6px;">
      <input type="number" placeholder="Harga per Satuan (Rp)" style="padding: 12px; border: 1px solid #ccc; border-radius: 6px;">
      <input type="date" placeholder="Tanggal Pembelian" style="padding: 12px; border: 1px solid #ccc; border-radius: 6px;">
      <button type="submit" style="padding: 12px; background: #a5673d; color: #fff; border: none; border-radius: 6px; font-weight: bold; cursor: pointer;">
        Simpan Bahan Baku
      </button>
    </form>

  </div>
</section>


<footer>
  &copy; {{ date('Y') }} Roti Mulia App. All rights reserved.
</footer>

</body>
</html>
