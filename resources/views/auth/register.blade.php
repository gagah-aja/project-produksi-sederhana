<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Register - RotiMulia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #fff9f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }
    h2 {
      text-align: center;
      color: #a5673d;
    }
    input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    button {
      width: 100%;
      background: #a5673d;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
    }
    p {
      text-align: center;
      margin-top: 10px;
    }
    a {
      color: #a5673d;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Daftar Akun Baru</h2>
    <form action="{{ route('register.submit') }}" method="POST">
      @csrf
      <input type="text" name="name" placeholder="Nama Lengkap" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
      <button type="submit">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
  </div>
</body>
</html>
