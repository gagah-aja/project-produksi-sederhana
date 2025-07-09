<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RotiMulia - Roti Fresh Setiap Hari</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background-color: #fff8e1;
      color: #333;
    }

    header {
      background-color: #ffb74d;
      padding: 40px 20px;
      text-align: center;
    }

    header h1 {
      font-size: 2.8rem;
      color: #4e342e;
    }

    header p {
      font-size: 1.2rem;
      margin-top: 10px;
    }

    .cta-button {
      display: inline-block;
      margin-top: 25px;
      background-color: #d84315;
      color: white;
      padding: 15px 30px;
      font-size: 1.1rem;
      border-radius: 8px;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .cta-button:hover {
      background-color: #bf360c;
    }

    .section {
      padding: 60px 20px;
      text-align: center;
    }

    .section h2 {
      font-size: 2rem;
      margin-bottom: 20px;
    }

    .section p {
      font-size: 1.1rem;
      line-height: 1.6;
      max-width: 700px;
      margin: 0 auto 30px;
    }

    .gallery {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 30px;
    }

    .gallery img {
      width: 300px;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }

    .gallery img:hover {
      transform: scale(1.05);
    }

    footer {
      background-color: #ffe0b2;
      text-align: center;
      padding: 20px;
      font-size: 0.9rem;
      color: #666;
    }

    @media (max-width: 600px) {
      header h1 {
        font-size: 2rem;
      }

      .cta-button {
        padding: 12px 24px;
        font-size: 1rem;
      }

      .gallery img {
        width: 90%;
      }
    }
  </style>
</head>
<body>

  <!-- Hero Section -->
  <header>
    <h1>🍞 RotiMulia</h1>
    <p>Roti lembut, fresh setiap hari, tanpa bahan pengawet.</p>
    <a href="https://wa.me/6281234567890" class="cta-button">Pesan Sekarang via WhatsApp</a>
  </header>

  <!-- Why Section -->
  <section class="section">
    <h2>Kenapa Pilih RotiMulia?</h2>
    <p>
      ✅ Dibuat setiap pagi dari bahan berkualitas <br>
      ✅ Tanpa pengawet & bahan kimia berbahaya <br>
      ✅ Rasa lembut dan nikmat untuk seluruh keluarga <br>
      ✅ Gratis ongkir area Kota Bandung
    </p>

    <!-- Gambar Roti -->
    <div class="gallery">
      <img src="https://images.unsplash.com/photo-1608198093002-ad4e005484f5?auto=format&fit=crop&w=600&q=80" alt="Roti 1">
      <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?auto=format&fit=crop&w=600&q=80" alt="Roti 2">
      <img src="https://images.unsplash.com/photo-1542831371-d531d36971e6?auto=format&fit=crop&w=600&q=80" alt="Roti 3">
    </div>
  </section>

  <!-- Footer -->
  <footer>
    &copy; 2025 RotiMulia. Made with ❤️ untuk pecinta roti sehat.
  </footer>

</body>
</html>
