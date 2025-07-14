<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin - Restoran Rasa Nusantara</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Global Styling & Nusantara Theme Base */
    body {
      background-color: #f8f9fa; /* Latar belakang putih lembut */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex; /* Menggunakan Flexbox */
      align-items: center; /* Pusat vertikal */
      justify-content: center; /* Pusat horizontal */
      padding: 20px; /* Padding agar tidak terlalu mepet tepi */
      overflow: auto; /* Scroll jika konten lebih besar dari viewport */
      margin: 0; /* Pastikan tidak ada margin default pada body */
    }

    /* --- */
    /* Container untuk Login Card */
    .login-wrapper {
      background-color: white; /* Card wrapper berwarna putih penuh */
      border-radius: 20px;
      box-shadow: 0 20px 45px rgba(0, 0, 0, 0.15); /* Bayangan halus dan elegan */
      overflow: hidden; /* Memastikan sudut melengkung pada semua sisi */
      width: 100%; /* Memastikan lebar responsif */
      max-width: 450px; /* Lebar maksimal wrapper disesuaikan agar kompak */
      animation: fadeInScale 0.8s ease-out forwards; /* Animasi muncul saat dimuat */
      flex-shrink: 0; /* Memastikan flex item ini tidak terlalu menyusut */
      margin: auto; /* Membantu centering lebih kuat */
    }

    /* --- */
    /* Styling for the Login Form Card itself */
    .card-login-form {
      background-color: transparent; /* Transparan agar latar belakang putih wrapper terlihat */
      border: none;
      box-shadow: none;
      border-radius: 0;
    }

    .card-header {
      background-color: #795548; /* Cokelat tua yang hangat */
      color: white;
      font-weight: 600;
      padding: 30px; /* Padding lebih besar untuk kesan premium */
      font-size: 1.55rem; /* Ukuran teks header lebih besar */
      letter-spacing: 0.8px; /* Sedikit lebih banyak jarak antar huruf */
      border-radius: 20px 20px 0 0; /* Radius hanya di sudut atas, mengikuti login-wrapper */
      text-align: center; /* Pastikan teks header terpusat */
      border-bottom: 2px solid rgba(255, 255, 255, 0.1); /* Garis bawah halus */
    }

    .card-body {
      padding: 40px;
    }

    /* --- */
    /* Form Control Styling */
    .form-label {
        font-weight: 500;
        color: #5d4037;
        margin-bottom: 10px; /* Jarak antara label dan input lebih besar */
    }

    .form-control {
      border-radius: 15px; /* Sudut input field lebih lembut dan besar */
      border: 1px solid #bcaaa4; /* Border warna abu-abu cokelat lembut */
      padding: 16px 20px; /* Padding lebih nyaman */
      font-size: 1.05rem; /* Ukuran font sedikit lebih besar */
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: #8d6e63;
      box-shadow: 0 0 0 0.35rem rgba(141, 110, 99, 0.2); /* Glow saat fokus lebih lembut */
      background-color: #fffdfa; /* Sedikit off-white saat fokus */
    }

    /* --- */
    /* Button Styling */
    .btn-primary {
      background-color: #8d6e63;
      border-color: #8d6e63;
      border-radius: 15px; /* Sudut tombol lebih lembut dan besar */
      padding: 16px 28px; /* Padding tombol lebih besar */
      font-size: 1.25rem; /* Ukuran font tombol lebih besar */
      font-weight: 600;
      letter-spacing: 0.8px;
      transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
    }

    .btn-primary:hover {
      background-color: #795548;
      border-color: #795548;
      transform: translateY(-4px); /* Efek angkat lebih jauh saat hover */
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25); /* Bayangan lebih jelas saat hover */
    }

    .btn-primary:active {
      transform: translateY(0);
      box-shadow: none;
    }

    /* --- */
    /* Alert Styling */
    .alert {
      border-radius: 12px; /* Sudut alert lebih lembut */
      font-size: 1rem; /* Ukuran font alert sedikit lebih besar */
      padding: 15px 25px;
      margin-bottom: 30px; /* Jarak bawah alert lebih besar */
    }
    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border-color: #f5c6cb;
    }
    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border-color: #c3e6cb;
    }

    /* --- */
    /* Link Styling */
    a {
      color: #795548;
      text-decoration: none;
      font-weight: 500; /* Link sedikit lebih tebal */
      transition: color 0.3s ease;
    }

    a:hover {
      text-decoration: underline;
      color: #5d4037;
    }

    /* --- */
    /* Animations */
    @keyframes fadeInScale {
      from {
        opacity: 0;
        transform: scale(0.97);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }
  </style>
</head>
<body>
<div class="container">
  <div class="login-wrapper">
    <div class="card card-login-form">
      <div class="card-header">
        🔒 Login Admin
        <br>
        <small style="font-size: 0.8em; opacity: 0.8;">Restoran Rasa Nusantara</small>
      </div>
      <div class="card-body">
        @if ($errors->any())
          <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif
        @if (session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
          @csrf
          <div class="mb-4">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="admin@example.com" required>
          </div>

          <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="********" required>
          </div>
          <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>