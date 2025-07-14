<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selamat Datang di Restoran Kami</title>
</head>
<body style="margin: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #fff8f1; color: #4e342e;">

  <!-- Header -->
  <header style="background-color: #a1887f; padding: 20px 40px; display: flex; justify-content: space-between; align-items: center;">
    <h1 style="margin: 0; color: white;">Restoran Rasa Nusantara</h1>
    <nav>
      <span style="margin-right: 20px; color: #fff;">👤 Halo, <strong>User</strong></span>
      <a href="#menu" style="color: #fff; margin-right: 15px; text-decoration: none;">Menu</a>
      <a href="#reservasi" style="color: #fff; text-decoration: none;">Reservasi</a>
    </nav>
  </header>

  <!-- Hero Section -->
  <section style="display: flex; flex-wrap: wrap; align-items: center; padding: 60px 20px; background-color: #ffe0b2;">
    <div style="flex: 1 1 400px; padding: 20px;">
      <h2 style="font-size: 2.5rem; color: #6d4c41;">Nikmati Hidangan Terbaik Hari Ini</h2>
      <p style="font-size: 1.2rem; margin-top: 20px;">Kami menyajikan makanan segar, lezat, dan dibuat dengan cinta. Yuk, pesan sekarang!</p>
      <a href="#menu" style="margin-top: 30px; display: inline-block; padding: 14px 28px; background-color: #8d6e63; color: white; border-radius: 8px; text-decoration: none; font-weight: bold;">Lihat Menu</a>
    </div>
    <div style="flex: 1 1 400px; text-align: center;">
      <img src="makanan nusantara.jpg" alt="Makanan Nusantara" style="max-width: 100%; border-radius: 15px; box-shadow: 0 10px 20px rgba(0,0,0,0.2);">
    </div>
  </section>

  <!-- Menu Hari Ini -->
  
<section id="menu" style="padding: 60px 20px; background-color: #fff3e0;">
  <h2 style="text-align: center; font-size: 2rem; color: #6d4c41;">Rekomendasi Hari Ini</h2>
  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin-top: 40px;">

    <!-- Card 1 -->
    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="nasgor.jpg" alt="Nasi Goreng" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Nasi Goreng Spesial</h3>
      <p>Rp 25.000</p>
    </div>

    <!-- Card 2 -->
    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="sate.jpg" alt="Sate Ayam" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Sate Ayam Madura</h3>
      <p>Rp 30.000</p>
    </div>

    <!-- Card 3 -->
    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="basmal.jpg" alt="Bakso" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Bakso Malang</h3>
      <p>Rp 22.000</p>
    </div>

  </div>
</section>
  

  <!-- Reservasi -->
  <section id="reservasi" style="padding: 60px 20px; text-align: center;">
    <h2 style="font-size: 2rem; color: #6d4c41;">Ingin Makan di Tempat?</h2>
    <p>Reservasi tempat dengan mudah hanya dalam beberapa klik.</p>
    <a href="/reservasi" style="margin-top: 20px; display: inline-block; padding: 14px 28px; background-color: #6d4c41; color: white; border-radius: 8px; text-decoration: none; font-weight: bold;">Reservasi Sekarang</a>
  </section>

  <!-- Footer -->
  <footer style="background-color: #a1887f; padding: 30px 20px; color: white; text-align: center;">
    <p>&copy; 2025 Restoran Rasa Nusantara</p>
    <p>Jl. Kuliner No. 88, Jakarta | 📞 (021) 1234 5678 | 📧 info@rasanusantara.id</p>
  </footer>

</body>
</html>
