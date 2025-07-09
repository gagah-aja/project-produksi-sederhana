<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selamat Datang di Restoran Kami</title>
</head>
<body style="margin: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #fff8f1; color: #4e342e;">

  <header style="display: flex; align-items: center; justify-content: space-between; padding: 5px 40px; background: #fff3e0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; box-shadow: 0 4px 12px rgba(141, 110, 99, 0.15); position: sticky; top: 0; z-index: 1000;">
    <div class="logo" style="flex-shrink: 0;">
      <img src="{{ asset('logo roti.png') }}" alt="logo" style="height: 50px; filter: drop-shadow(0 1px 1px rgba(141,110,99,0.4));">
    </div>
   <nav style="display: flex; gap: 30px; font-weight: 700; font-size: 1rem; margin-left: auto;">
  <a href="#" style="color: #8d6e63; text-decoration: none; position: relative; padding-bottom: 4px; transition: color 0.3s ease;">
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

<section id="galery" style="padding: 40px 20px; background: #fff3e0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <h2 style="text-align: center; color: #8d6e63; font-size: 2rem; font-weight: 700; margin-bottom: 30px;">
    Galeri Toko Roti Rekomendasi
  </h2>

  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; max-width: 1000px; margin: 0 auto;">
    
    <!-- CARD 1 -->
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

    <!-- CARD 2 -->
    <div style="border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(141,110,99,0.15); background: #fff;">
      <img src="{{ asset('picture/kenangan.jpg') }}" alt="Roti Kenanga" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 12px;">
        <h3 style="margin: 0; color: #5d4037; font-size: 1rem;">Roti Kenanga</h3>
        <p style="color: #8d6e63; font-size: 0.85rem;">Jl. Anggrek No.5, Jakarta</p>
        <div style="margin-top: 10px; display: flex; gap: 6px;">
          <a href="https://wa.me/6281122334455" target="_blank" style="flex: 1; background-color: #25D366; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">WhatsApp</a>
          <a href="mailto:kenanga@email.com" style="flex: 1; background-color: #8d6e63; color: #fff; padding: 6px; border-radius: 5px; text-align: center; font-size: 0.8rem; text-decoration: none;">Email</a>
        </div>
      </div>
    </div>
    <!-- CARD 3 -->
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

    <!-- CARD 4 -->
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

  <!-- Footer -->
  <footer style="background-color: #a1887f; padding: 30px 20px; color: white; text-align: center;">
    <p>&copy; 2025 Restoran Rasa Nusantara</p>
    <p>Jl. Kuliner No. 88, Jakarta | 📞 (021) 1234 5678 | 📧 info@rasanusantara.id</p>
  </footer>

</body>
</html>
