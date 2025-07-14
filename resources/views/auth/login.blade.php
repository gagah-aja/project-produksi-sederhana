<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin - Restoran Rasa Nusantara</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Mengubah tema menjadi lebih soft dan nuansa Nusantara */
    body {
      background-image: url('https://images.unsplash.com/photo-1627308593360-149258282e70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80'); /* Contoh foto makanan Indonesia */
      background-size: cover;
      background-position: center;
      background-attachment: fixed; /* Membuat gambar latar belakang tetap saat di-scroll */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Font yang lebih lembut */
      position: relative;
      min-height: 100vh;
      display: flex; /* Untuk memposisikan konten di tengah secara vertikal */
      align-items: center; /* Untuk memposisikan konten di tengah secara vertikal */
      justify-content: center; /* Untuk memposisikan konten di tengah secara horizontal */
      padding: 20px; /* Padding agar tidak terlalu mepet tepi */
    }

    /* Overlay untuk membuat teks lebih mudah dibaca di atas gambar */
    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(121, 85, 72, 0.7); /* Warna cokelat lembut dari tema footer, dengan transparansi */
      z-index: 1;
    }

    .container {
      position: relative;
      z-index: 2; /* Memastikan konten container berada di atas overlay */
      max-width: 450px; /* Lebar container disesuaikan */
    }

    /* Styling untuk Card Login */
    .card {
      background-color: rgba(255, 255, 255, 0.95); /* Sedikit transparan agar nuansa background terlihat */
      border-radius: 15px; /* Sudut lebih membulat */
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Bayangan lebih lembut */
      border: none; /* Hilangkan border default Bootstrap */
    }

    .card-header {
      background-color: #795548; /* Warna cokelat tua yang hangat */
      color: white;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      font-weight: bold;
      padding: 18px;
      font-size: 1.25rem; /* Ukuran teks header lebih besar */
    }

    .card-body {
      padding: 35px;
    }

    /* Styling untuk Form Control */
    .form-control {
      border-radius: 8px; /* Sudut input field lebih lembut */
      border: 1px solid #a1887f; /* Border sesuai tema */
      padding: 10px 15px;
    }

    .form-control:focus {
      border-color: #a1887f; /* Border saat fokus sesuai tema */
      box-shadow: 0 0 0 0.25rem rgba(161, 136, 127, 0.3); /* Glow saat fokus lebih lembut */
    }

    /* Styling untuk Tombol */
    .btn-primary {
      background-color: #795548; /* Warna tombol sesuai tema cokelat tua */
      border-color: #795548;
      border-radius: 8px;
      padding: 10px 15px;
      font-size: 1.1rem;
      transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #5d4037; /* Warna lebih gelap saat hover */
      border-color: #5d4037;
    }

    /* Styling untuk Alert */
    .alert {
      border-radius: 8px;
      font-size: 0.95rem;
    }

    /* Styling untuk Link */
    a {
      color: #795548; /* Warna link sesuai tema */
      text-decoration: none;
      transition: color 0.3s ease;
    }

    a:hover {
      text-decoration: underline;
      color: #5d4037; /* Warna link lebih gelap saat hover */
    }
  </style>
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card shadow">
        <div class="card-header text-center">🔒 Login Admin</div>
        <div class="card-body">
          @if ($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
          @endif
          @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>