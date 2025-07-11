<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Roti Mulia</title>
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

  <header style="display: flex; align-items: center; justify-content: space-between; padding: 5px 40px; background: #fff3e0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; box-shadow: 0 4px 12px rgba(141, 110, 99, 0.15); position: sticky; top: 0; z-index: 1000;">
    <div class="logo" style="flex-shrink: 0;">
      <img src="{{ asset('logo roti update.png') }}" alt="logo" style="height: 50px; filter: drop-shadow(0 1px 1px rgba(141,110,99,0.4));">
    </div>
   <nav style="display: flex; gap: 30px; font-weight: 700; font-size: 1rem; margin-left: auto;">
  <a href="#hero" style="color: #8d6e63; text-decoration: none; position: relative; padding-bottom: 4px; transition: color 0.3s ease;">
    BERANDA
    <span style="content: ''; position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background: #a5673d; transition: width 0.3s ease;"></span>
  </a>
  <a href="#input-bahanbaku" style="color: #8d6e63; text-decoration: none; position: relative; padding-bottom: 4px; transition: color 0.3s ease;">
    BAHAN BAKU
    <span style="content: ''; position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background: #a5673d; transition: width 0.3s ease;"></span>
  </a>
  <a href="#produksi" style="color: #8d6e63; text-decoration: none; position: relative; padding-bottom: 4px; transition: color 0.3s ease;">
    PRODUKSI
    <span style="content: ''; position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background: #a5673d; transition: width 0.3s ease;"></span>
  </a>
  <a href="#stokBahan" style="color: #8d6e63; text-decoration: none; position: relative; padding-bottom: 4px; transition: color 0.3s ease;">
    STOK
    <span style="content: ''; position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background: #a5673d; transition: width 0.3s ease;"></span>
  </a>
   <a href="#galery" style="color: #8d6e63; text-decoration: none; position: relative; padding-bottom: 4px; transition: color 0.3s ease;">
    GALLERY
    <span style="content: ''; position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background: #a5673d; transition: width 0.3s ease;"></span>
  </a>
</nav>


    <div class="auth-buttons">
    @guest
      <a href="{{ route('login') }}" class="login">Login</a>
      <a href="{{ route('register') }}" class="register">Register</a>
    @endguest

    @auth
    <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
      @csrf
      <button type="submit" class="logout-button">
        Logout
      </button>
    </form>
    
    <style>
      .logout-button {
        background-color: #8d6e63;
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 10px rgba(141, 110, 99, 0.25);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }
    
      .logout-button:hover {
        background-color: #a67c52;
        box-shadow: 0 6px 14px rgba(141, 110, 99, 0.35);
      }
    </style>
    
    @endauth
  </div>
  </header>
  
  <script>
    // Tambahan efek underline animasi saat hover
    const navLinks = document.querySelectorAll('header nav a');
    navLinks.forEach(link => {
      link.addEventListener('mouseenter', () => {
        const underline = link.querySelector('span');
        underline.style.width = '100%';
        link.style.color = '#a5673d';
      });
      link.addEventListener('mouseleave', () => {
        const underline = link.querySelector('span');
        underline.style.width = '0';
        link.style.color = '#8d6e63';
      });
    });
  </script>
  

<style>
  /* Animasi fadeInLeft dan fadeInRight (reuse dari hero) */
  @keyframes fadeInLeft {
    0% {opacity: 0; transform: translateX(-40px);}
    100% {opacity: 1; transform: translateX(0);}
  }
  @keyframes fadeInRight {
    0% {opacity: 0; transform: translateX(40px);}
    100% {opacity: 1; transform: translateX(0);}
  }

  /* Input focus style */
  form input:focus {
    outline: none;
    border-color: #8d6e63;
    box-shadow: 0 0 6px #c2a785;
  }

  /* Button hover */
  form button:hover {
    background-color: #a67c52;
  }

  /* Responsive */
  @media (max-width: 768px) {
    #input-bahanbaku > div {
      flex-direction: column;
      gap: 30px !important;
    }
    form, .hero-text, .hero-img {
      max-width: 100% !important;
      flex: unset !important;
      animation: none !important;
    }
  }
</style>

<section id="hero" class="hero" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; padding: 80px 20px; background: #fff3e0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; gap: 40px;">
  <div class="hero-text" style="flex: 1 1 400px; max-width: 600px; animation: fadeInLeft 1s ease forwards; color: #4e342e;">
    <h1 style="font-size: 3rem; line-height: 1.2; margin-bottom: 25px; font-weight: 700;">
      <span style="color: #d2691e;">RotiMulia</span> – Rasa <br>
      yang <span style="color: #d2691e; font-style: italic;">Autentik</span> dan berkualitas
    </h1>
    <p style="font-size: 1.125rem; line-height: 1.6; color: #5d4037;">
      RotiMulia menghadirkan berbagai pilihan roti dengan cita rasa khas dan bahan baku pilihan. Cocok untuk kebutuhan harian, acara keluarga, maupun pesanan dalam jumlah besar untuk bisnis Anda.
    </p>
  </div>

  <div class="hero-img" style="flex: 1 1 350px; max-width: 450px; animation: fadeInRight 1s ease forwards;">
    <img src="{{ asset('roti.png') }}" alt="Ilustrasi RotiMulia" style="width: 100%; border-radius: 20px; box-shadow: 0 8px 20px rgba(141, 110, 99, 0.3);">
  </div>
</section>

<section id="input-bahanbaku" style="padding: 60px 20px; background: #fff3e0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <h2 style="text-align: center; color: #8d6e63; font-size: 2.25rem; font-weight: 700; margin-bottom: 40px;">
    Input Bahan Baku Roti
  </h2>

  <div style="display: flex; flex-wrap: wrap; max-width: 1000px; margin: 0 auto; gap: 50px; align-items: center; justify-content: center;">
    
    <!-- Gambar -->
    <div style="flex: 1 1 350px; text-align: center; animation: fadeInLeft 1s ease forwards;">
      <img src="{{ asset('tiii.jpg') }}" alt="Ilustrasi Bahan Baku Roti" style="width: 100%; max-width: 350px; border-radius: 20px; box-shadow: 0 8px 20px rgba(141, 110, 99, 0.25);">
      <p style="color: #a5673d; font-style: italic; margin-top: 15px; font-size: 1rem;">
        Gunakan bahan berkualitas untuk rasa terbaik
      </p>
    </div>
    
    <!-- Form Input -->
    <form onsubmit="return  tambahBahanBaku(event)" style="flex: 1 1 350px; display: flex; flex-direction: column; gap: 18px; animation: fadeInRight 1s ease forwards;">
    <select id="bahanNama" required style="padding: 14px 16px; border: 1.5px solid #b89c81; border-radius: 8px; font-size: 1rem; color: #5d4037; background-color: white; transition: border-color 0.3s;">
    <option value="">-- Pilih Bahan Baku --</option>
    <option value="Tepung">Tepung</option>
    <option value="Gula">Gula</option>
    <option value="Ragi">Ragi</option>
    <option value="Mentega">Mentega</option>
      </select>
      <input id="bahanJumlah" type="number" placeholder="Jumlah (misal: 2)" min="0" required
        style="padding: 14px 16px; border: 1.5px solid #b89c81; border-radius: 8px; font-size: 1rem; color: #5d4037; transition: border-color 0.3s;">
      <input id="bahanSatuan" type="text" placeholder="Satuan (misal: kg, liter, gram)" required
        style="padding: 14px 16px; border: 1.5px solid #b89c81; border-radius: 8px; font-size: 1rem; color: #5d4037; transition: border-color 0.3s;">

      <input id="bahanTanggal" type="date" placeholder="Tanggal Pembelian" required
        style="padding: 14px 16px; border: 1.5px solid #b89c81; border-radius: 8px; font-size: 1rem; color: #5d4037; transition: border-color 0.3s;">
      <button type="submit" style="padding: 14px 0; background: #8d6e63; color: white; border: none; border-radius: 8px; font-weight: 700; font-size: 1.1rem; cursor: pointer; box-shadow: 0 5px 12px rgba(141,110,99,0.35); transition: background-color 0.3s;">
        Simpan Bahan Baku
      </button>
      <div id="notifikasiInput"></div>
    </form>

  </div>
</section>

<script>
  function tambahBahanBaku(event) {
    event.preventDefault(); // Mencegah reload

    const nama = document.getElementById("bahanNama").value.trim().toLowerCase();
    const jumlah = parseFloat(document.getElementById("bahanJumlah").value);
    const notifikasi = document.getElementById("notifikasiInput");

    const bahanMap = {
      'tepung': 'stokTepung',
      'gula': 'stokGula',
      'ragi': 'stokRagi',
      'mentega': 'stokMentega'
    };

    if (!bahanMap[nama]) {
      notifikasi.innerHTML = `<div class="error">❌ Bahan "${nama}" tidak dikenali. Masukkan: tepung, gula, ragi, mentega.</div>`;
      return false;
    }

    if (isNaN(jumlah) || jumlah <= 0) {
      notifikasi.innerHTML = `<div class="error">❌ Jumlah tidak valid.</div>`;
      return false;
    }

    const stokElement = document.getElementById(bahanMap[nama]);
    const stokSekarang = parseFloat(stokElement.textContent);
    const stokBaru = stokSekarang + jumlah;

    stokElement.textContent = stokBaru.toFixed(2);
    notifikasi.innerHTML = `<div class="success">✅ Stok ${nama} berhasil ditambahkan sebanyak ${jumlah}.</div>`;

    // Reset form
    event.target.reset();
    return false;
  }
</script>
<!-- Section: Proses Produksi dan Hasil Produksi -->
<section id="produksi" style="padding: 80px 20px; background: #fff3e0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <div style="max-width: 1000px; margin: 0 auto; display: flex; flex-wrap: wrap; gap: 40px; align-items: center; justify-content: center;">
    
    <!-- Kiri: Teks & Ilustrasi -->
    <div style="flex: 1 1 400px; animation: fadeInLeft 1s ease forwards;">
      <h2 style="color: #8d6e63; font-size: 2.25rem; font-weight: 700; display: flex; align-items: center; gap: 10px;">
        Proses Produksi
      </h2>
      <p style="color: #a5673d; font-size: 1.05rem; margin-top: 15px;">
        Masukkan jumlah roti yang ingin diproduksi. Sistem akan otomatis mengurangi stok bahan baku dan mencatat hasil produksinya.
      </p>
      <img src="{{ asset('picture/rti.jpg') }}" alt="Ilustrasi Proses" style="margin-top: 30px; width: 100%; max-width: 300px; border-radius: 16px; box-shadow: 0 5px 15px rgba(141, 110, 99, 0.2);">
    </div>

    <!-- Kanan: Form -->
    <div style="flex: 1 1 400px; background: #fff8f5; padding: 30px 40px; border-radius: 20px; box-shadow: 0 8px 20px rgba(141, 110, 99, 0.25); animation: fadeInRight 1s ease forwards;">
      <label for="jumlahProduksi" style="font-weight: 700; display: block; margin-bottom: 15px; font-size: 1.1rem; color: #5d4037;">
        Jumlah Produksi Roti:
      </label>
      <input type="number" id="jumlahProduksi" placeholder="Contoh: 100" min="0" required
        style="width: 100%; padding: 14px 16px; font-size: 1rem; border-radius: 8px; border: 1.5px solid #b89c81; color: #5d4037; transition: border-color 0.3s;">

      <button onclick="prosesProduksi()"
        style="margin-top: 30px; background: #8d6e63; color: white; padding: 14px 0; width: 100%; font-size: 1.1rem; font-weight: 700; border: none; border-radius: 8px; cursor: pointer; box-shadow: 0 5px 12px rgba(141, 110, 99, 0.35); transition: background-color 0.3s;">
        Mulai Produksi
      </button>

      <div id="notifikasiProduksi" style="display: none; margin-top: 25px; padding: 15px; border-radius: 8px; font-size: 1rem; color: #5d4037;"></div>
    </div>
  </div>

  <!-- Hasil Produksi -->
  <div id="hasilProduksiSection" style="margin-top: 60px; display: none;">
    <h3 style="text-align: center; font-size: 1.8rem; margin-bottom: 30px; color: #8d6e63;">
      Hasil Produksi Hari Ini
    </h3>
    <div style="overflow-x: auto; max-width: 1000px; margin: 0 auto;">
      <table style="width: 100%; border-collapse: collapse; font-size: 1rem; color: #5d4037;">
        <thead>
          <tr style="background-color: #8d6e63; color: white;">
            <th style="padding: 14px; border: 1.5px solid #b89c81;">Tanggal</th>
            <th style="padding: 14px; border: 1.5px solid #b89c81;">Jumlah Roti</th>
            <th style="padding: 14px; border: 1.5px solid #b89c81;">Tepung (kg)</th>
            <th style="padding: 14px; border: 1.5px solid #b89c81;">Gula (kg)</th>
            <th style="padding: 14px; border: 1.5px solid #b89c81;">Ragi (kg)</th>
            <th style="padding: 14px; border: 1.5px solid #b89c81;">Mentega (kg)</th>
          </tr>
        </thead>
        <tbody id="tabelHasilProduksi"></tbody>
      </table>
    </div>
  </div>
</section>


<section id="stokBahan" style="padding: 60px 20px ; background: #fff3e0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <h2 style="text-align: center; color: #8d6e63; font-size: 2.25rem; font-weight: 700; margin-bottom: 40px;">
    Stok Bahan Baku
  </h2>
  <div style="max-width: 600px; margin: 0 auto; background: #fff8f5; padding: 30px 40px; border-radius: 20px; box-shadow: 0 8px 20px rgba(141, 110, 99, 0.25);">
    <table style="width: 100%; border-collapse: collapse; font-size: 1rem; color: #5d4037;">
    <thead>
  <tr style="background-color: #8d6e63; color: white; font-weight: 700;">
    <th style="padding: 14px; border: 1.5px solid #b89c81; text-align: left;">Bahan</th>
    <th style="padding: 14px; border: 1.5px solid #b89c81; text-align: right;">Stok (kg)</th>
    <th style="padding: 14px; border: 1.5px solid #b89c81; text-align: right;">Terakhir Update</th>
  </tr>
</thead>

     <tbody>
  <tr>
    <td style="padding: 14px; border: 1.5px solid #b89c81;">Tepung</td>
    <td id="stokTepung" style="padding: 14px; border: 1.5px solid #b89c81; text-align: right;">100</td>
    <td id="tanggalTepung" style="padding: 14px; border: 1.5px solid #b89c81; text-align: right;">-</td>
  </tr>
  <tr>
    <td style="padding: 14px; border: 1.5px solid #b89c81;">Gula</td>
    <td id="stokGula" style="padding: 14px; border: 1.5px solid #b89c81; text-align: right;">50</td>
    <td id="tanggalGula" style="padding: 14px; border: 1.5px solid #b89c81; text-align: right;">-</td>
  </tr>
  <tr>
    <td style="padding: 14px; border: 1.5px solid #b89c81;">Ragi</td>
    <td id="stokRagi" style="padding: 14px; border: 1.5px solid #b89c81; text-align: right;">20</td>
    <td id="tanggalRagi" style="padding: 14px; border: 1.5px solid #b89c81; text-align: right;">-</td>
  </tr>
  <tr>
    <td style="padding: 14px; border: 1.5px solid #b89c81;">Mentega</td>
    <td id="stokMentega" style="padding: 14px; border: 1.5px solid #b89c81; text-align: right;">30</td>
    <td id="tanggalMentega" style="padding: 14px; border: 1.5px solid #b89c81; text-align: right;">-</td>
  </tr>
</tbody>

    </table>
  </div>
</section>

<section id="galery" style="padding: 40px 20px; background: #fff3e0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <h2 style="text-align: center; color: #8d6e63; font-size: 2rem; font-weight: 700; margin-bottom: 30px;">
    Galeri Toko Roti Rekomendasi
  </h2>

  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; max-width: 1000px; margin: 0 auto;">
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/surya.jpg') }}" alt="Toko Roti Surya" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Toko Roti Surya</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. Melati No.10, Bandung</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281234567890" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:toko.surya@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>

    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/kenangan.jpg') }}" alt="Roti Kenanga" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Roti Kenangan</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. Anggrek No.5, Jakarta</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281122334455" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:kenanga@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>

    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/bakery bahagia.jpg') }}" alt="Bakery Bahagia" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Bakery Bahagia</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. Cendana No.21, Surabaya</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281222233344" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:bahagia@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>

    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/dapur roti.jpg') }}" alt="Dapoer Roti" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Dapoer Roti</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. Mawar No.8, Yogyakarta</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281999888777" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:dapoer@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/aroma bakery.jpg') }}" alt="Dapoer Roti" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Aroma Bakery</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. teratai No.9, jakarta</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281999888777" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:dapoer@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/holland bakery.jpg') }}" alt="Dapoer Roti" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Hollad Bakery</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. sudirman No.1, Depok</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281999888777" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:dapoer@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/roti o.jpg') }}" alt="Dapoer Roti" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Roti O</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. Bugenfil No.5, Yogyakarta</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281999888777" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:dapoer@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/roti boy.jpg') }}" alt="Dapoer Roti" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Roti Boy</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. Mawar No.4, Bandung</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281999888777" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:dapoer@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/barokah bakery.jpg') }}" alt="Dapoer Roti" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Barokah Bakery</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. Talaga No.12, Majalengka</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281999888777" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:dapoer@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/roti go.jpg') }}" alt="Dapoer Roti" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Roti Go</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. Melati No.6, Yogyakarta</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281999888777" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:dapoer@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/kenari bakery.jpg') }}" alt="Dapoer Roti" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Kenary Bakery</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. Mawar No.2, Yogyakarta</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281999888777" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:dapoer@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/roti pelangi.jpg') }}" alt="Dapoer Roti" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Roti Pelangi</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. Kartini No.3, Jakarta</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281999888777" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:dapoer@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/bakery harmoni.jpg') }}" alt="Dapoer Roti" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Bakery Harmoni</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. Jingga No.9, Yogyakarta</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281999888777" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:dapoer@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/roti murni.jpg') }}" alt="Dapoer Roti" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Roti Murni</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. Anggrek No.6, Yogyakarta</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281999888777" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:dapoer@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/roti juara.jpg') }}" alt="Dapoer Roti" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Roti Juara</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. Kamboja No.19, Yogyakarta</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281999888777" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:dapoer@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/roti klasik.jpg') }}" alt="Dapoer Roti" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Roti Klasik</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. Kirana No.5, Yogyakarta</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281999888777" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:dapoer@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>

  </div>
</section>

<script>
  function tambahBahanBaku(event) {
    event.preventDefault();

    const nama = document.getElementById("bahanNama").value;
    const jumlah = parseFloat(document.getElementById("bahanJumlah").value);
    const tanggal = document.getElementById("bahanTanggal").value;
    const notifikasi = document.getElementById("notifikasiInput");

    if (!nama || isNaN(jumlah) || jumlah <= 0 || !tanggal) {
      notifikasi.style.color = "#c62828";
      notifikasi.textContent = "⚠️ Harap lengkapi data dengan benar.";
      return false;
    }

    const stokId = "stok" + nama;
    const tanggalId = "tanggal" + nama;

    const stokEl = document.getElementById(stokId);
    const tanggalEl = document.getElementById(tanggalId);

    if (stokEl && tanggalEl) {
      const stokSebelumnya = parseFloat(stokEl.textContent);
      const stokBaru = stokSebelumnya + jumlah;

      stokEl.textContent = stokBaru.toFixed(2);
      tanggalEl.textContent = new Date(tanggal).toLocaleDateString("id-ID");

      notifikasi.style.color = "#256029";
      notifikasi.textContent = `✅ Bahan ${nama} berhasil ditambahkan sebanyak ${jumlah}`;
    } else {
      notifikasi.style.color = "#c62828";
      notifikasi.textContent = "❌ Nama bahan tidak ditemukan di tabel stok.";
    }

    // Reset form (optional)
    event.target.reset();
    return false;
  }
</script>

<script>
  const perRoti = {
    tepung: 0.05,
    gula: 0.02,
    ragi: 0.01,
    mentega: 0.03
  };

  function prosesProduksi() {
    const jumlah = parseInt(document.getElementById("jumlahProduksi").value);
    const notif = document.getElementById("notifikasiProduksi");
    const hasilSection = document.getElementById("hasilProduksiSection");
    const tabel = document.getElementById("tabelHasilProduksi");

    notif.style.display = "none";

    if (isNaN(jumlah) || jumlah <= 0) {
      tampilkanNotifikasi("⚠️ Masukkan jumlah produksi yang valid.", "gagal");
      return;
    }

    // Ambil stok saat ini dari elemen HTML
    let stok = {
      tepung: parseFloat(document.getElementById('stokTepung').textContent),
      gula: parseFloat(document.getElementById('stokGula').textContent),
      ragi: parseFloat(document.getElementById('stokRagi').textContent),
      mentega: parseFloat(document.getElementById('stokMentega').textContent)
    };

    // Hitung kebutuhan
    const kebutuhan = {
      tepung: jumlah * perRoti.tepung,
      gula: jumlah * perRoti.gula,
      ragi: jumlah * perRoti.ragi,
      mentega: jumlah * perRoti.mentega
    };

    // Cek stok cukup
    for (let bahan in kebutuhan) {
      if (kebutuhan[bahan] > stok[bahan]) {
        tampilkanNotifikasi(`❌ Stok ${bahan} tidak cukup untuk ${jumlah} roti.`, "gagal");
        return;
      }
    }

    // Kurangi stok dan tampilkan ke HTML
    stok.tepung -= kebutuhan.tepung;
    stok.gula -= kebutuhan.gula;
    stok.ragi -= kebutuhan.ragi;
    stok.mentega -= kebutuhan.mentega;

    document.getElementById('stokTepung').textContent = stok.tepung.toFixed(2);
    document.getElementById('stokGula').textContent = stok.gula.toFixed(2);
    document.getElementById('stokRagi').textContent = stok.ragi.toFixed(2);
    document.getElementById('stokMentega').textContent = stok.mentega.toFixed(2);

    // Tambahkan ke tabel hasil produksi
    const tanggal = new Date().toLocaleDateString("id-ID");
    const row = tabel.insertRow();
    row.innerHTML = `
      <td style="padding: 10px; border: 1px solid #ccc;">${tanggal}</td>
      <td style="padding: 10px; border: 1px solid #ccc;">${jumlah}</td>
      <td style="padding: 10px; border: 1px solid #ccc;">${kebutuhan.tepung.toFixed(2)}</td>
      <td style="padding: 10px; border: 1px solid #ccc;">${kebutuhan.gula.toFixed(2)}</td>
      <td style="padding: 10px; border: 1px solid #ccc;">${kebutuhan.ragi.toFixed(2)}</td>
      <td style="padding: 10px; border: 1px solid #ccc;">${kebutuhan.mentega.toFixed(2)}</td>
    `;

    hasilSection.style.display = "block";
    tampilkanNotifikasi(`✅ Produksi ${jumlah} roti berhasil diproses.`, "sukses");
  }

  function tampilkanNotifikasi(pesan, tipe) {
    const notif = document.getElementById("notifikasiProduksi");
    notif.style.display = "block";
    notif.style.backgroundColor = tipe === "sukses" ? "#c8e6c9" : "#ffcdd2";
    notif.style.color = tipe === "sukses" ? "#256029" : "#c62828";
    notif.textContent = pesan;
  }
</script>



<footer style="background-color: #4e342e; color: #fff; padding: 30px 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <div style="max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-between; gap: 30px;">

    <!-- Logo dan Deskripsi Singkat -->
    <div style="flex: 1 1 220px;">
      <h3 style="margin-bottom: 10px; color: #ffc107;">Roti Mulia</h3>
      <p style="font-size: 0.9rem; line-height: 1.6;">
        Roti Mulia adalah solusi terbaik untuk kebutuhan roti segar Anda. Dibuat dengan bahan berkualitas dan rasa yang tak terlupakan.
      </p>
    </div>

    <!-- Navigasi -->
    <div style="flex: 1 1 150px;">
      <h4 style="margin-bottom: 10px;">Menu</h4>
      <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.9rem;">
        <li><a href="#home" style="color: #fff; text-decoration: none;">Home</a></li>
        <li><a href="#produk" style="color: #fff; text-decoration: none;">Produk</a></li>
        <li><a href="#galery" style="color: #fff; text-decoration: none;">Galeri</a></li>
        <li><a href="#kontak" style="color: #fff; text-decoration: none;">Kontak</a></li>
      </ul>
    </div>

    <!-- Kontak -->
    <div style="flex: 1 1 200px;">
      <h4 style="margin-bottom: 10px;">Kontak Kami</h4>
      <p style="margin: 6px 0; font-size: 0.9rem;">📍 Jl. Mawar No.123, Yogyakarta</p>
      <p style="margin: 6px 0; font-size: 0.9rem;">📧 <a href="mailto:rotimulia@email.com" style="color: #ffc107; text-decoration: none;">rotimulia@email.com</a></p>
      <p style="margin: 6px 0; font-size: 0.9rem;">📞 <a href="tel:+628123456789" style="color: #ffc107; text-decoration: none;">+62 812 3456 789</a></p>
    </div>

    <!-- Sosial Media -->
    <div style="flex: 1 1 150px;">
      <h4 style="margin-bottom: 10px;">Ikuti Kami</h4>
      <div style="display: flex; gap: 10px;">
        <a href="#" style="color: #ffc107; font-size: 1.2rem; text-decoration: none;">Instagram</a>
        <a href="#" style="color: #ffc107; font-size: 1.2rem; text-decoration: none;">Facebook</a>
      </div>
    </div>
  </div>

  <div style="text-align: center; margin-top: 25px; padding-top: 15px; border-top: 1px solid #6d4c41; font-size: 0.85rem; color: #d7ccc8;">
    &copy; {{ date('Y') }} Roti Mulia App. All rights reserved.
  </div>
</footer>

</body>
</html>
