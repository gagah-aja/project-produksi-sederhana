<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Admin - Restoran Rasa Nusantara</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
    }

    body {
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #fcefdc 40%, #fff8f1 100%);
    }

    .login-container {
      display: flex;
      max-width: 900px;
      width: 100%;
      background: white;
      box-shadow: 0 20px 45px rgba(0,0,0,0.1);
      border-radius: 20px;
      overflow: hidden;
    }

    .image-side {
      flex: 1;
      background-image: url('/images/resto.jpg');
      background-size: cover;
      background-position: center;
      min-height: 400px;
    }

    .form-side {
      flex: 1;
      padding: 50px 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
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
      .login-container {
        flex-direction: column;
        max-width: 95%;
      }

      .image-side {
        display: none;
      }

      .form-side {
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
