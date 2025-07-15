<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selamat Datang di Restoran Kami</title>

  <!-- Font Awesome untuk logo sosial media -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body style="margin: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #fff8f1; color: #4e342e;">
<style>
  html {
    scroll-behavior: smooth;
  }
  .fancy-image {
    max-width: 100%;
    max-height: 400px;
    object-fit: cover;
    border-radius: 20px;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    transition: transform 0.4s ease;
    clip-path: polygon(0 0, 100% 10%, 100% 90%, 0% 100%);
  }
  .fancy-image:hover {
    transform: scale(1.05);
  }
  @media (max-width: 768px) {
    .fancy-image {
      clip-path: none;
      border-radius: 15px;
    }
  }
  section img:hover {
    transform: scale(1.03);
  }
</style>

<!-- Header -->
<header style="background-color: #a1887f; padding: 20px 40px; display: flex; justify-content: space-between; align-items: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <!-- Logo dan Judul -->
  <div style="display: flex; align-items: center;">
    <img src="logo.jpg" alt="Logo Restoran" style="height: 60px; margin-right: 15px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.3);">
    <h1 style="margin: 0; color: white; font-weight: 700; font-size: 1.8rem; letter-spacing: 1px;">
      Restoran Nusantara
    </h1>
  </div>

  <!-- Navigasi -->
  <nav>
    <a href="#menu" class="nav-link" style="color: #fff; margin-right: 25px; text-decoration: none; font-weight: 600; font-size: 1rem; position: relative; padding-bottom: 3px;">
      <i class="fas fa-utensils" style="margin-right: 6px;"></i>Menu
    </a>
    <a href="#reservasi" class="nav-link" style="color: #fff; text-decoration: none; font-weight: 600; font-size: 1rem; position: relative; padding-bottom: 3px;">
      <i class="fas fa-calendar-check" style="margin-right: 6px;"></i>Reservasi
    </a>
  </nav>

  <!-- Garis bawah animasi -->
  <style>
    header nav a.nav-link::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      width: 0%;
      height: 3px;
      background-color: #fff;
      border-radius: 3px;
      transition: width 0.3s ease;
    }
    header nav a.nav-link:hover::after,
    header nav a.nav-link.active::after {
      width: 100%;
    }
  </style>
</header>

<!-- JavaScript Active State -->
<script>
  const navLinks = document.querySelectorAll('header nav a.nav-link');
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      navLinks.forEach(l => l.classList.remove('active'));
      link.classList.add('active');
    });
  });
</script>

<!-- Hero Section -->
<section id="hero" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; padding: 60px 20px; background: linear-gradient(135deg, #fff4e6, #ffe8d1); font-family: 'Segoe UI', sans-serif; border-radius: 20px; box-shadow: 0 8px 24px rgba(0,0,0,0.05); margin: 40px 20px;">
  
  <!-- Teks Kiri -->
  <div style="flex: 1 1 400px; padding: 20px; max-width: 600px;">
    <h2 style="font-size: 2.8rem; color: #4e342e; font-family: 'Merriweather', serif; margin-bottom: 20px; line-height: 1.3;">
      Nikmati Hidangan Terbaik <br>Hari Ini
    </h2>
    <p style="font-size: 1.1rem; margin-bottom: 30px; line-height: 1.7; color: #5d4037;">
      Kami menyajikan makanan segar, lezat, dan dibuat dengan cinta dari resep-resep otentik Nusantara. Yuk, pesan sekarang dan rasakan cita rasa Indonesia sesungguhnya!
    </p>
  </div>

  <!-- Carousel Kanan -->
  <div style="max-width: 600px; position: relative; overflow: hidden; padding: 20px; border-radius: 12px;">
    <div id="carousel-wrapper" style="width: 100%; overflow: hidden;">
      <div id="carousel" style="display: flex; transition: transform 0.6s ease-in-out;">
        <!-- Slides -->
        <div class="slide"><img src="makanan-nusantara1.jpg" alt="Makanan Nusantara 1"></div>
        <div class="slide"><img src="makanan-nusantara2.jpg" alt="Makanan Nusantara 2"></div>
        <div class="slide"><img src="makanan-nusantara3.jpg" alt="Makanan Nusantara 3"></div>
        <div class="slide"><img src="makanan-nusantara4.jpg" alt="Makanan Nusantara 4"></div>
      </div>
    </div>
  
    <!-- Tombol Navigasi -->
    <button onclick="prevSlide()" class="nav-button left">‹</button>
    <button onclick="nextSlide()" class="nav-button right">›</button>
  </div>
  
  <style>
    .slide {
      min-width: 100%;
      box-sizing: border-box;
      padding: 0 5px;
    }
  
    .slide img {
      width: 100%;
      height: auto;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      transition: transform 0.3s ease;
    }
  
    .slide img:hover {
      transform: scale(1.02);
    }
  
    .nav-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.4);
      color: white;
      border: none;
      padding: 10px 14px;
      border-radius: 50%;
      cursor: pointer;
      z-index: 10;
    }
  
    .nav-button.left {
      left: 10px;
    }
  
    .nav-button.right {
      right: 10px;
    }
  
    .nav-button:hover {
      background-color: rgba(0, 0, 0, 0.6);
    }
  </style>
  
  <script>
    const carousel = document.getElementById("carousel");
    let currentIndex = 0;
    const totalSlides = carousel.children.length;
  
    function updateSlide() {
      carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    }
  
    function nextSlide() {
      if (currentIndex < totalSlides - 1) {
        currentIndex++;
        updateSlide();
      }
    }
  
    function prevSlide() {
      if (currentIndex > 0) {
        currentIndex--;
        updateSlide();
      }
    }
  </script>
  
</section>

<!-- Menu Hari Ini -->
<section id="menu" style="padding: 80px 20px; background: linear-gradient(135deg, #fff4e6, #ffe8d1); font-family: 'Segoe UI', sans-serif; border-radius: 20px; box-shadow: 0 8px 24px rgba(0,0,0,0.05); margin: 40px 20px;">
  <h2 style="text-align: center; font-size: 2.4rem; color: #4e342e; margin-bottom: 40px;">Menu Restoran Nusantara</h2>
  
  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
    <!-- Semua menu card tetap sama, hanya ditempatkan dalam section dengan background yang sama -->

    <!-- Contoh 1 Menu Card (Nasi Goreng) -->
    <div style="background: white; padding: 20px; border-radius: 12px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center; transition: transform 0.3s;">
      <img src="nasgor.jpg" alt="Nasi Goreng" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3 style="margin: 15px 0 5px;">Nasi Goreng Spesial</h3>
      <p style="font-weight: bold; color: #6d4c41;">Rp 25.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 15 porsi</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 12px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Nasi%20Goreng%20Spesial" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 6px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Nasi%20Goreng%20Spesial&body=Halo%2C%20saya%20ingin%20memesan%20Nasi%20Goreng%20Spesial" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 6px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="sate.jpg" alt="Sate Ayam" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Sate Ayam Madura</h3>
      <p>Rp 30.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 10 porsi</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Sate%20Ayam%20Madura" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Sate%20Ayam%20Madura&body=Halo%2C%20saya%20ingin%20memesan%20Sate%20Ayam%20Madura" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>
    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="basmal.jpg" alt="Bakso Malang" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Bakso Malang</h3>
      <p>Rp 22.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 20 mangkuk</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Bakso%20Malang" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Bakso%20Malang&body=Halo%2C%20saya%20ingin%20memesan%20Bakso%20Malang" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>
    
    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="empal gentong.jpg" alt="Empal Gentong" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Empal Gentong</h3>
      <p>Rp 30.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 10 mangkuk</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Empal%20Gentong" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Empal%20Gentong&body=Halo%2C%20saya%20ingin%20memesan%20Empal%20Gentong" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="nasi jamblang.jpg" alt="Nasi Jamblang" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Nasi Jamblang</h3>
      <p>Rp 25.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 23 porsi</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Nasi%20Jamblang" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Nasi%20Jamblang&body=Halo%2C%20saya%20ingin%20memesan%20Nasi%20Jamblang" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="bebek goreng.jpg" alt="Bebek Goreng Kremes" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Bebek Goreng Kremes</h3>
      <p>Rp 33.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 6 porsi</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Bebek%20Goreng%20Kremes" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Bebek%20Goreng%20Kremes&body=Halo%2C%20saya%20ingin%20memesan%20Bebek%20Goreng%20Kremes" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="soto ayam.jpg" alt="Soto Ayam" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Soto Ayam</h3>
      <p>Rp 15.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 16 mangkuk</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Soto%20Ayam" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Soto%20Ayam&body=Halo%2C%20saya%20ingin%20memesan%20Soto%20Ayam" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="mie ayam ceker.jpg" alt="Mie Ayam Ceker" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Mie Ayam Ceker</h3>
      <p>Rp 25.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 16 mangkuk</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Mie%20Ayam%20Ceker" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Mie%20Ayam%20Ceker&body=Halo%2C%20saya%20ingin%20memesan%20Mie%20Ayam%20Ceker" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="kwetiau goreng.jpg" alt="Kwetiau Goreng" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Kwetiau Goreng</h3>
      <p>Rp 25.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 29 porsi</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Kwetiau%20Goreng" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Kwetiau%20Goreng&body=Halo%2C%20saya%20ingin%20memesan%20Kwetiau%20Goreng" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="ayam geprek.jpg" alt="Ayam Geprek" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Ayam Geprek</h3>
      <p>Rp 18.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 9 porsi</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Ayam%20Geprek" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Ayam%20Geprek&body=Halo%2C%20saya%20ingin%20memesan%20Ayam%20Geprek" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="ikan bakar.jpg" alt="Ikan Bakar" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Ikan Bakar</h3>
      <p>Rp 40.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 27 porsi</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Ikan%20Bakar" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Ikan%20Bakar&body=Halo%2C%20saya%20ingin%20memesan%20Ikan%20Bakar" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="pizza.jpg" alt="Pizza" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Pizza</h3>
      <p>Rp 50.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 4 loyang</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Pizza" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Pizza&body=Halo%2C%20saya%20ingin%20memesan%20Pizza" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>
  </div>
</section>

     

<!-- Reservasi -->
<section id="reservasi" style="padding: 80px 20px; background: linear-gradient(135deg, #fff4e6, #ffe8d1); font-family: 'Segoe UI', sans-serif; border-radius: 20px; box-shadow: 0 8px 24px rgba(0,0,0,0.05); margin: 40px 20px;">
  <div style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap-reverse; gap: 40px; max-width: 1100px; margin: auto;">
    
    <!-- Konten Reservasi -->
    <div style="flex: 1 1 400px; text-align: left; min-width: 300px;">
      <h2 style="font-size: 2.5rem; color: #4e342e; margin-bottom: 15px; letter-spacing: 0.5px;">Ingin Makan di Tempat?</h2>
      <p style="font-size: 1.15rem; color: #6d4c41; margin-bottom: 35px; line-height: 1.6;">
        Nikmati suasana hangat dan makanan lezat langsung di tempat kami. Reservasi meja sekarang hanya dengan beberapa klik!
      </p>
      <a href="/reservasi" style="display: inline-block; padding: 16px 36px; background-color: #6d4c41; color: #fff; border-radius: 12px; text-decoration: none; font-weight: bold; font-size: 1.05rem; box-shadow: 0 6px 16px rgba(0,0,0,0.15); transition: all 0.3s ease;" 
         onmouseover="this.style.backgroundColor='#4e342e'; this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.2)'" 
         onmouseout="this.style.backgroundColor='#6d4c41'; this.style.transform='scale(1)'; this.style.boxShadow='0 6px 16px rgba(0,0,0,0.15)'">
        Reservasi Sekarang
      </a>
    </div>

    <!-- Gambar -->
    <div style="flex: 1 1 400px; text-align: center; min-width: 300px;">
      <img src="restoran.jpg" alt="Gambar Restoran" style="width: 100%; max-width: 480px; border-radius: 16px; box-shadow: 0 6px 20px rgba(0,0,0,0.1);">
    </div>

  </div>
</section>

<!-- Latar Belakang -->
<section id="latar-belakang" style="padding: 80px 20px; background: linear-gradient(135deg, #fff4e6, #ffe8d1); font-family: 'Segoe UI', sans-serif; border-radius: 20px; box-shadow: 0 8px 24px rgba(0,0,0,0.05); margin: 40px 20px;">
  <div style="max-width: 900px; margin: 0 auto; text-align: justify; color: #5d4037; line-height: 1.8; font-size: 1.1rem;">
    <h2 style="text-align: center; font-size: 2.4rem; color: #4e342e; margin-bottom: 30px; letter-spacing: 0.5px;">Latar Belakang</h2>

    <p style="margin-bottom: 24px;">
      <strong>Restoran Rasa Nusantara</strong> didirikan dengan satu tujuan mulia: menghadirkan kekayaan cita rasa kuliner Indonesia ke tengah-tengah masyarakat modern, tanpa kehilangan sentuhan tradisi yang autentik. Berawal dari kecintaan pada masakan ibu dan resep warisan keluarga yang turun-temurun, Rasa Nusantara lahir sebagai ruang bagi setiap orang untuk kembali merasakan “rumah” dalam setiap suapan.
    </p>

    <p style="margin-bottom: 24px;">
      Didirikan di Jakarta pada tahun 2020, Rasa Nusantara mengusung konsep kuliner dari Sabang hingga Merauke, menyajikan aneka hidangan dari berbagai daerah—seperti <em>Rendang Minang</em>, <em>Ayam Betutu Bali</em>, <em>Coto Makassar</em>, hingga <em>Papeda dari Timur Indonesia</em>. Kami percaya bahwa makanan bukan hanya soal rasa, tetapi juga cerita, sejarah, dan identitas bangsa.
    </p>

    <p style="margin-bottom: 24px;">
      Kami bekerja sama dengan petani lokal dan pengrajin bumbu tradisional untuk menjaga kualitas dan keaslian bahan baku. Dengan nuansa interior yang hangat dan atmosfer yang mengundang, Rasa Nusantara bukan sekadar restoran—ini adalah perayaan terhadap kekayaan budaya Indonesia.
    </p>

    <p>
      Di Rasa Nusantara, setiap hidangan adalah <strong>perjalanan rasa</strong>, dan setiap tamu adalah <strong>bagian dari kisah kami</strong>.
    </p>
  </div>
</section>


<!-- Footer -->
<footer style="background-color: #a1887f; padding: 30px 20px; color: white;">
  <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; max-width: 1200px; margin: 0 auto; gap: 20px;">
    
    <!-- Kolom Kontak di Kiri -->
    <div style="text-align: left; max-width: 300px; flex: 1; margin-top: 60px; padding: 20px; background-color: rgba(255, 255, 255, 0.1); border-radius: 8px;">
      <h3 style="margin-bottom: 15px; font-size: 20px; color: #fff;">Hubungi Kami</h3>
      
      <p style="margin: 10px 0;">
        <span style="color: #ffe082;">📍</span> Jl. Kuliner No. 88, Jakarta
      </p>
      
      <p style="margin: 10px 0;">
        <span style="color: #81d4fa;">📞</span> (021) 1234 5678
      </p>
      
      <p style="margin: 10px 0;">
        <span style="color: #ffab91;">📧</span>
        <a href="mailto:info@rasanusantara.id" style="color: #fff; text-decoration: underline;">info@rasanusantara.id</a>
      </p>
    </div>    

    <!-- Sosial Media -->
<div style="text-align: left; max-width: 300px; flex: 1; margin-top: 60px; padding: 20px; background-color: rgba(255, 255, 255, 0.1); border-radius: 8px;">
  <h4 style="margin-bottom: 10px; font-size: 18px; color: #fff;">Ikuti Kami:</h4>
  <div style="display: flex; flex-direction: column; gap: 10px; font-size: 16px;">
    
    <a href="https://instagram.com/rasanusantara" target="_blank"
       style="color: #fce4ec; text-decoration: none; display: flex; align-items: center; gap: 8px;">
      <i class="fab fa-instagram"></i> Instagram
    </a>
    
    <a href="https://facebook.com/rasanusantara" target="_blank"
       style="color: #e3f2fd; text-decoration: none; display: flex; align-items: center; gap: 8px;">
      <i class="fab fa-facebook"></i> Facebook
    </a>
    
    <a href="https://www.tiktok.com/@rasanusantara" target="_blank"
       style="color: #e1bee7; text-decoration: none; display: flex; align-items: center; gap: 8px;">
      <i class="fab fa-tiktok"></i> TikTok
    </a>

  </div>
</div>
    

    <!-- Kolom Peta dan Copyright -->
    <div style="text-align: center; flex: 2;">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507172.04253533715!2d107.89996127343751!3d-6.735462399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1f386029826f%3A0x7cc773d692e955d3!2sPasta%20Nusantara!5e0!3m2!1sid!2sid!4v1752459800446!5m2!1sid!2sid"
        width="100%" 
        height="250" 
        style="border:0; max-width: 650px;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
        title="Peta Restoran Rasa Nusantara">
      </iframe>
      <p style="margin-top: 30px;">&copy; 2025 Restoran Rasa Nusantara</p>
    </div>
  </div>
</footer>



</body>
</html>
