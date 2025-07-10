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

  <header style="display: flex; align-items: center; justify-content: space-between; padding: 20px 40px; background: #fff3e0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; box-shadow: 0 4px 12px rgba(141, 110, 99, 0.15); position: sticky; top: 0; z-index: 1000;">
    <div class="logo" style="flex-shrink: 0;">
      <img src="{{ asset('logo roti.png') }}" alt="logo" style="height: 50px; filter: drop-shadow(0 1px 1px rgba(141,110,99,0.4));">
    </div>
    <nav style="display: flex; gap: 30px; font-weight: 700; font-size: 1rem;">
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
    </nav>
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

<section class="hero" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; padding: 80px 20px; background: #fff3e0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; gap: 40px;">
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
    <form style="flex: 1 1 350px; display: flex; flex-direction: column; gap: 18px; animation: fadeInRight 1s ease forwards;">
      <input type="text" placeholder="Nama Bahan Baku" required
        style="padding: 14px 16px; border: 1.5px solid #b89c81; border-radius: 8px; font-size: 1rem; color: #5d4037; transition: border-color 0.3s;">
      <input type="number" placeholder="Jumlah (misal: 2)" min="0" required
        style="padding: 14px 16px; border: 1.5px solid #b89c81; border-radius: 8px; font-size: 1rem; color: #5d4037; transition: border-color 0.3s;">
      <input type="text" placeholder="Satuan (misal: kg, liter, gram)" required
        style="padding: 14px 16px; border: 1.5px solid #b89c81; border-radius: 8px; font-size: 1rem; color: #5d4037; transition: border-color 0.3s;">
      <input type="number" placeholder="Harga per Satuan (Rp)" min="0" required
        style="padding: 14px 16px; border: 1.5px solid #b89c81; border-radius: 8px; font-size: 1rem; color: #5d4037; transition: border-color 0.3s;">
      <input type="date" placeholder="Tanggal Pembelian" required
        style="padding: 14px 16px; border: 1.5px solid #b89c81; border-radius: 8px; font-size: 1rem; color: #5d4037; transition: border-color 0.3s;">
      <button type="submit" style="padding: 14px 0; background: #8d6e63; color: white; border: none; border-radius: 8px; font-weight: 700; font-size: 1.1rem; cursor: pointer; box-shadow: 0 5px 12px rgba(141,110,99,0.35); transition: background-color 0.3s;">
        Simpan Bahan Baku
      </button>
    </form>

  </div>
</section>

<!-- Section: Proses Produksi dan Hasil Produksi -->
<section id="produksi" style="padding: 60px 20px; background: #fff3e0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <h2 style="text-align: center; color: #8d6e63; font-size: 2.25rem; font-weight: 700; margin-bottom: 40px;">
    🔧 Proses Produksi
  </h2>
  <p style="text-align: center; color: #a5673d; max-width: 600px; margin: 0 auto 40px; font-size: 1rem;">
    Masukkan jumlah roti yang ingin diproduksi. Sistem akan otomatis mengurangi stok bahan baku dan mencatat hasil produksinya.
  </p>

  <div style="max-width: 600px; margin: 0 auto; background: #fff8f5; padding: 30px 40px; border-radius: 20px; box-shadow: 0 8px 20px rgba(141, 110, 99, 0.25);">
    <label for="jumlahProduksi" style="font-weight: 700; display: block; margin-bottom: 15px; font-size: 1.1rem; color: #5d4037;">
      Jumlah Produksi Roti:
    </label>
    <input type="number" id="jumlahProduksi" placeholder="Contoh: 100" min="0" required
      style="width: 100%; padding: 14px 16px; font-size: 1rem; border-radius: 8px; border: 1.5px solid #b89c81; color: #5d4037; box-sizing: border-box; transition: border-color 0.3s;">

    <button onclick="prosesProduksi()"
      style="margin-top: 30px; background: #8d6e63; color: white; padding: 14px 0; width: 100%; font-size: 1.1rem; font-weight: 700; border: none; border-radius: 8px; cursor: pointer; box-shadow: 0 5px 12px rgba(141, 110, 99, 0.35); transition: background-color 0.3s;">
      Mulai Produksi
    </button>

    <div id="notifikasiProduksi" style="display: none; margin-top: 25px; padding: 15px; border-radius: 8px; font-size: 1rem; color: #5d4037;"></div>

    <div id="hasilProduksiSection" style="margin-top: 50px; display: none;">
      <h3 style="font-size: 1.5rem; margin-bottom: 25px; color: #8d6e63;">
        📦 Hasil Produksi Hari Ini
      </h3>
      <div style="overflow-x: auto;">
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
  </div>
</section>

<section id="stokBahan" style="padding: 60px 20px; background: #fff3e0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <h2 style="text-align: center; color: #8d6e63; font-size: 2.25rem; font-weight: 700; margin-bottom: 40px;">
    📦 Stok Bahan Baku
  </h2>
  <div style="max-width: 600px; margin: 0 auto; background: #fff8f5; padding: 30px 40px; border-radius: 20px; box-shadow: 0 8px 20px rgba(141, 110, 99, 0.25);">
    <table style="width: 100%; border-collapse: collapse; font-size: 1rem; color: #5d4037;">
      <thead>
        <tr style="background-color: #8d6e63; color: white; font-weight: 700;">
          <th style="padding: 14px; border: 1.5px solid #b89c81; text-align: left;">Bahan</th>
          <th style="padding: 14px; border: 1.5px solid #b89c81; text-align: right;">Stok (kg)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="padding: 14px; border: 1.5px solid #b89c81;">Tepung</td>
          <td id="stokTepung" style="padding: 14px; border: 1.5px solid #b89c81; text-align: right;">100</td>
        </tr>
        <tr>
          <td style="padding: 14px; border: 1.5px solid #b89c81;">Gula</td>
          <td id="stokGula" style="padding: 14px; border: 1.5px solid #b89c81; text-align: right;">50</td>
        </tr>
        <tr>
          <td style="padding: 14px; border: 1.5px solid #b89c81;">Ragi</td>
          <td id="stokRagi" style="padding: 14px; border: 1.5px solid #b89c81; text-align: right;">20</td>
        </tr>
        <tr>
          <td style="padding: 14px; border: 1.5px solid #b89c81;">Mentega</td>
          <td id="stokMentega" style="padding: 14px; border: 1.5px solid #b89c81; text-align: right;">30</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>


<script>
  // Simulasi stok awal
  let stok = {
    tepung: 100, // kg
    gula: 50,
    ragi: 20,
    mentega: 30
  };

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
      notif.innerText = "⚠️ Masukkan jumlah produksi yang valid.";
      notif.style.backgroundColor = "#ffcdd2";
      notif.style.color = "#b71c1c";
      notif.style.display = "block";
      return;
    }

    const kebutuhan = {
      tepung: jumlah * perRoti.tepung,
      gula: jumlah * perRoti.gula,
      ragi: jumlah * perRoti.ragi,
      mentega: jumlah * perRoti.mentega
    };

    // Cek stok
    if (
      stok.tepung >= kebutuhan.tepung &&
      stok.gula >= kebutuhan.gula &&
      stok.ragi >= kebutuhan.ragi &&
      stok.mentega >= kebutuhan.mentega
    ) {
      // Kurangi stok
      stok.tepung -= kebutuhan.tepung;
      stok.gula -= kebutuhan.gula;
      stok.ragi -= kebutuhan.ragi;
      stok.mentega -= kebutuhan.mentega;

      // Tanggal hari ini
      const today = new Date().toLocaleDateString('id-ID');

      // Tambahkan baris hasil produksi
      tabel.innerHTML += `
        <tr>
          <td style="padding: 10px; border: 1px solid #ccc;">${today}</td>
          <td style="padding: 10px; border: 1px solid #ccc;">${jumlah}</td>
          <td style="padding: 10px; border: 1px solid #ccc;">${stok.tepung.toFixed(2)}</td>
          <td style="padding: 10px; border: 1px solid #ccc;">${stok.gula.toFixed(2)}</td>
          <td style="padding: 10px; border: 1px solid #ccc;">${stok.ragi.toFixed(2)}</td>
          <td style="padding: 10px; border: 1px solid #ccc;">${stok.mentega.toFixed(2)}</td>
        </tr>
      `;

      hasilSection.style.display = "block";
 
      notif.innerText = `✅ Berhasil memproduksi ${jumlah} roti.`;
      notif.style.backgroundColor = "#c8e6c9";
      notif.style.color = "#2e7d32";
      notif.style.display = "block";

    } else {
      notif.innerText = "❌ Stok bahan tidak mencukupi untuk produksi.";
      notif.style.backgroundColor = "#ffcdd2";
      notif.style.color = "#b71c1c";
      notif.style.display = "block";
    }
  }
</script>

<script>
    // Ambil stok saat ini
    const stok = {
      tepung: parseFloat(document.getElementById('stokTepung').textContent),
      gula: parseFloat(document.getElementById('stokGula').textContent),
      ragi: parseFloat(document.getElementById('stokRagi').textContent),
      mentega: parseFloat(document.getElementById('stokMentega').textContent)
    };

    // Cek apakah stok cukup
    for (let bahan in kebutuhan) {
      if (kebutuhan[bahan] > stok[bahan]) {
        tampilkanNotifikasi(`Stok ${bahan} tidak cukup untuk produksi.`, "gagal");
        return;
      }
    }

    // Kurangi stok
    document.getElementById('stokTepung').textContent = (stok.tepung - kebutuhan.tepung).toFixed(2);
    document.getElementById('stokGula').textContent = (stok.gula - kebutuhan.gula).toFixed(2);
    document.getElementById('stokRagi').textContent = (stok.ragi - kebutuhan.ragi).toFixed(2);
    document.getElementById('stokMentega').textContent = (stok.mentega - kebutuhan.mentega).toFixed(2);

    // Tambahkan data ke tabel hasil produksi
    const tabel = document.getElementById('tabelHasilProduksi');
    const row = tabel.insertRow();
    const tanggal = new Date().toLocaleDateString();

    row.innerHTML = `
      <td style="padding: 10px; border: 1px solid #ccc;">${tanggal}</td>
      <td style="padding: 10px; border: 1px solid #ccc;">${jumlah}</td>
      <td style="padding: 10px; border: 1px solid #ccc;">${kebutuhan.tepung.toFixed(2)}</td>
      <td style="padding: 10px; border: 1px solid #ccc;">${kebutuhan.gula.toFixed(2)}</td>
      <td style="padding: 10px; border: 1px solid #ccc;">${kebutuhan.ragi.toFixed(2)}</td>
      <td style="padding: 10px; border: 1px solid #ccc;">${kebutuhan.mentega.toFixed(2)}</td>
    `;

    // Tampilkan hasil produksi
    document.getElementById('hasilProduksiSection').style.display = 'block';

    tampilkanNotifikasi(`Produksi ${jumlah} roti berhasil diproses.`, "sukses");
  }

  // Fungsi tampilkan notifikasi
  function tampilkanNotifikasi(pesan, tipe) {
    const notif = document.getElementById("notifikasiProduksi");
    notif.style.display = "block";
    notif.style.backgroundColor = tipe === "sukses" ? "#c8e6c9" : "#ffcdd2";
    notif.style.color = tipe === "sukses" ? "#256029" : "#c62828";
    notif.textContent = pesan;
  }
</script>



<footer>
  &copy; {{ date('Y') }} Roti Mulia App. All rights reserved.
</footer>

</body>
</html>
