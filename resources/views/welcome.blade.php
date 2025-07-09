<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selamat Datang di Restoran Kami</title>
</head>

<body style="margin: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #fff8f1; color: #4e342e;">
<style>
  html {
    scroll-behavior: smooth;
  }
</style>

<!-- Header -->
<header style="background-color: #a1887f; padding: 20px 40px; display: flex; justify-content: space-between; align-items: center;">
  <h1 style="margin: 0; color: white;">Restoran Nusantara</h1>
  <nav>
    <span style="margin-right: 20px; color: #fff;">👤 Halo, <strong>User</strong></span>
    <a href="#menu" style="color: #fff; margin-right: 15px; text-decoration: none;">Menu</a>
    <a href="#reservasi" style="color: #fff; text-decoration: none;">Reservasi</a>
  </nav>
</header>

<!-- Hero Section -->
<section style="display: flex; flex-wrap: wrap; align-items: center; padding: 60px 20px; background-color: #fff8f1; font-family: 'Open Sans', sans-serif;">
  <div style="flex: 1 1 400px; padding: 20px;">
    <h2 style="font-size: 2.8rem; color: #4e342e; font-family: 'Merriweather', serif; margin-bottom: 20px; line-height: 1.3;">
      Nikmati Hidangan Terbaik Hari Ini
    </h2>
    <p style="font-size: 1.1rem; margin-bottom: 30px; line-height: 1.7; color: #5d4037;">
      Kami menyajikan makanan segar, lezat, dan dibuat dengan cinta dari resep-resep otentik Nusantara. Yuk, pesan sekarang dan rasakan cita rasa Indonesia sesungguhnya!
    </p>
    <a href="#menu" style="padding: 14px 28px; background-color: #8d6e63; color: white; border-radius: 8px; text-decoration: none; font-weight: bold; font-size: 1rem; transition: background 0.3s;">
      🍽️ Lihat Menu
    </a>
  </div>

  <div style="flex: 1 1 400px; text-align: center; padding: 20px;">
    <img src="makanan nusantara.jpg" alt="Makanan Nusantara" class="fancy-image">
  </div>
</section>

<!-- Gaya CSS Tambahan -->
<style>
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
</style>


<!-- Tambahkan ini di bawah untuk efek hover gambar -->
<style>
  section img:hover {
    transform: scale(1.03);
  }
</style>


<!-- Menu Hari Ini -->
<section id="menu" style="padding: 60px 20px; background-color: #fff8f1;">
  <h2 style="text-align: center; font-size: 2rem; color: #6d4c41;">Rekomendasi Hari Ini</h2>
  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin-top: 40px;">

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="nasgor.jpg" alt="Nasi Goreng" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Nasi Goreng Spesial</h3>
      <p>Rp 25.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 15 porsi</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Nasi%20Goreng%20Spesial" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Nasi%20Goreng%20Spesial&body=Halo%2C%20saya%20ingin%20memesan%20Nasi%20Goreng%20Spesial" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
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
      <img src="basmal.jpg" alt="Bakso" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
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
      <p style="color: #888; font-size: 0.9rem;">Stok: 20 mangkuk</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Empal%20Gentong" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Empal%20Gentong&body=Halo%2C%20saya%20ingin%20memesan%20Empal%20Gentong" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="nasi jamblang.jpg" alt="Nasi Jamblang" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Nasi Jamblang</h3>
      <p>Rp 25.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 20 porsi</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Nasi%20Jamblang" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Nasi%20Jamblang&body=Halo%2C%20saya%20ingin%20memesan%20Nasi%20Jamblang" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="bebek goreng.jpg" alt="Bebek Goreng Kremes" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Bebek Goreng Kremes</h3>
      <p>Rp 33.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 20 porsi</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Bebek%20Goreng%20Kremes" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Bebek%20Goreng%20Kremes&body=Halo%2C%20saya%20ingin%20memesan%20Bebek%20Goreng%20Kremes" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="soto ayam.jpg" alt="Soto Ayam" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Soto Ayam</h3>
      <p>Rp 15.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 20 mangkuk</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Soto%20Ayam" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Soto%20Ayam&body=Halo%2C%20saya%20ingin%20memesan%20Soto%20Ayam" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="mie ayam ceker.jpg" alt="Mie Ayam Ceker" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Mie Ayam Ceker</h3>
      <p>Rp 25.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 20 mangkuk</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Mie%20Ayam%20Ceker" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Mie%20Ayam%20Ceker&body=Halo%2C%20saya%20ingin%20memesan%20Mie%20Ayam%20Ceker" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="kwetiau goreng.jpg" alt="Kwetiau Goreng" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Kwetiau Goreng</h3>
      <p>Rp 25.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 20 porsi</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Kwetiau%20Goreng" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Kwetiau%20Goreng&body=Halo%2C%20saya%20ingin%20memesan%20Kwetiau%20Goreng" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="ayam geprek.jpg" alt="Ayam Geprek" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Ayam Geprek</h3>
      <p>Rp 18.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 20 porsi</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Ayam%20Geprek" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Ayam%20Geprek&body=Halo%2C%20saya%20ingin%20memesan%20Ayam%20Geprek" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="ikan bakar.jpg" alt="Ikan Bakar" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Ikan Bakar</h3>
      <p>Rp 40.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 20 porsi</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Ikan%20Bakar" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Ikan%20Bakar&body=Halo%2C%20saya%20ingin%20memesan%20Ikan%20Bakar" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 5px 12px rgba(0,0,0,0.1); text-align: center;">
      <img src="pizza.jpg" alt="Pizza" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
      <h3>Pizza</h3>
      <p>Rp 50.000</p>
      <p style="color: #888; font-size: 0.9rem;">Stok: 20 porsi</p>
      <div style="display: flex; justify-content: center; gap: 8px; margin-top: 10px;">
        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20Pizza" target="_blank" style="flex: 1; padding: 8px 10px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">WhatsApp</a>
        <a href="mailto:resto@example.com?subject=Pesan%20Pizza&body=Halo%2C%20saya%20ingin%20memesan%20Pizza" style="flex: 1; padding: 8px 10px; background-color: #4285F4; color: white; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">Email</a>
      </div>
    </div>

  </div>
</section>
     

<!-- Reservasi -->
<section id="reservasi" style="padding: 60px 20px; background-color: #fff8f1; text-align: center;">
  <h2 style="font-size: 2rem; color: #6d4c41;">Ingin Makan di Tempat?</h2>
  <p>Reservasi tempat dengan mudah hanya dalam beberapa klik.</p>
  <a href="/reservasi" style="margin-top: 20px; display: inline-block; padding: 14px 28px; background-color: #6d4c41; color: white; border-radius: 8px; text-decoration: none; font-weight: bold;">Reservasi Sekarang</a>
</section>

<!-- Latar Belakang Restoran -->
<section id="latar-belakang" style="padding: 60px 20px; background-color: #fff8f1;">
  <div style="max-width: 800px; margin: 0 auto;">
    <h2 style="text-align: center; font-size: 2rem; color: #6d4c41;">Latar Belakang Restoran Nusantara</h2>
    <p style="margin-top: 30px; font-size: 1rem; line-height: 1.8; text-align: justify; color: #5d4037;">
      Restoran Nusantara hadir sebagai bentuk kecintaan terhadap kekayaan kuliner tradisional Indonesia yang begitu beragam dan mendalam. Terinspirasi dari cita rasa khas dari Sabang hingga Merauke, Restoran Nusantara berkomitmen menyajikan hidangan otentik yang menggugah selera, sekaligus memperkenalkan kembali warisan kuliner bangsa kepada masyarakat luas.
    </p>
    <p style="margin-top: 20px; font-size: 1rem; line-height: 1.8; text-align: justify; color: #5d4037;">
      Didirikan pada tahun 2025, Restoran Nusantara bermula dari keinginan sederhana untuk menyediakan makanan Indonesia yang tidak hanya lezat, tetapi juga dibuat dengan bahan-bahan segar dan resep asli daerah. Kami percaya bahwa makanan adalah bagian penting dari budaya, dan melalui setiap sajian, kami ingin menyampaikan cerita dari setiap sudut nusantara.
    </p>
    <p style="margin-top: 20px; font-size: 1rem; line-height: 1.8; text-align: justify; color: #5d4037;">
      Dengan suasana yang hangat dan pelayanan yang ramah, Restoran Nusantara menjadi tempat yang ideal bagi keluarga, sahabat, dan pecinta kuliner untuk berkumpul dan menikmati rasa khas Indonesia dalam satu meja.
    </p>
  </div>
</section>

<!-- Footer -->
<footer style="background-color: #a1887f; padding: 30px 20px; color: white; text-align: center; display: flex; justify-content: center; align-items: center; gap: 40px; flex-wrap: wrap;">
  <div style="text-align: left; max-width: 300px;">
    <p>Jl. Kuliner No. 88, Jakarta</p>
    <p>📞 (021) 1234 5678</p>
    <p style="margin: 5px 0;">
      📧 <a href="mailto:info@rasanusantara.id" style="color: white; text-decoration: underline;">info@rasanusantara.id</a>
    </p>
  </div>
  <div>
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507172.04253533715!2d107.89996127343751!3d-6.735462399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1f386029826f%3A0x7cc773d692e955d3!2sPasta%20Nusantara!5e0!3m2!1sid!2sid!4v1752459800446!5m2!1sid!2sid"
      width="300" 
      height="200" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade"
      title="Peta Restoran Rasa Nusantara"
    >
  </iframe>
  <p>&copy; 2025 Restoran Rasa Nusantara</p>
  </div>
</footer>


</body>
</html>
