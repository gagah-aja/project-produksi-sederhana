<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin - Restoran Rasa Nusantara</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Background motif gelombang */
    body {
      margin: 0;
      padding: 0;
      min-height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #fcefdc 40%, #fff8f1 100%);
      position: relative;
      overflow: hidden;
    }

    body::before {
      content: "";
      position: absolute;
      top: -100px;
      left: -50px;
      width: 140%;
      height: 300px;
      background: radial-gradient(circle at left, #e6cfc3 20%, transparent 70%);
      opacity: 0.3;
      transform: rotate(-5deg);
    }

    body::after {
      content: "";
      position: absolute;
      bottom: -100px;
      right: -80px;
      width: 160%;
      height: 300px;
      background: radial-gradient(circle at right, #d7ccc8 20%, transparent 70%);
      opacity: 0.25;
      transform: rotate(10deg);
    }

    .login-container {
      display: flex;
      flex-wrap: wrap;
      background: white;
      box-shadow: 0 20px 45px rgba(0,0,0,0.1);
      border-radius: 20px;
      overflow: hidden;
      max-width: 1000px;
      width: 100%;
    }

    .image-side {
      flex: 1;
      background-image: url('https://images.unsplash.com/photo-1609334762589-c5f2f96a3d89'); /* Ganti dengan gambar makanan Nusantara */
      background-size: cover;
      background-position: center;
      min-height: 450px;
    }

    .form-side {
      flex: 1;
      padding: 50px 40px;
    }

    .card-header {
      background-color: #795548;
      color: white;
      font-weight: bold;
      padding: 25px;
      font-size: 1.5rem;
      text-align: center;
      border-radius: 15px;
      margin-bottom: 30px;
    }

    .form-label {
      font-weight: 600;
      color: #5d4037;
    }

    .form-control {
      border-radius: 15px;
      padding: 15px;
      border: 1px solid #bcaaa4;
    }

    .form-control:focus {
      border-color: #8d6e63;
      box-shadow: 0 0 0 0.25rem rgba(141, 110, 99, 0.2);
    }

    .btn-primary {
      background-color: #8d6e63;
      border-color: #8d6e63;
      border-radius: 15px;
      font-size: 1.2rem;
      padding: 14px;
      width: 100%;
      font-weight: bold;
    }

    .btn-primary:hover {
      background-color: #6d4c41;
      border-color: #6d4c41;
    }

    .alert {
      border-radius: 10px;
      font-size: 0.95rem;
    }

    @media (max-width: 768px) {
      .image-side {
        display: none;
      }

      .form-side {
        width: 100%;
        padding: 40px 25px;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="image-side"></div>
    <div class="form-side">
      <div class="card-header">
        Login Admin
        <div style="font-size: 0.85rem; opacity: 0.85;">Restoran Rasa Nusantara</div>
      </div>

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

        <button type="submit" class="btn btn-primary mt-3">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
