<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - RotiMulia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #fff9f5 0%, #f3e0d6 50%, #d7b899 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    .container {
      background: #ffffff;
      padding: 30px 24px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(141, 110, 99, 0.25);
      width: 100%;
      max-width: 340px;
      text-align: center;
    }

    .logo {
      width: 60px;
      margin-bottom: 16px;
      animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-8px); }
    }

    h2 {
      color: #a5673d;
      font-size: 1.6rem;
      margin-bottom: 20px;
    }

    input {
      width: 100%;
      padding: 12px 14px;
      margin: 8px 0;
      border: 1.5px solid #d7c4b0;
      border-radius: 8px;
      font-size: 1rem;
      color: #5d4037;
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    input:focus {
      border-color: #a5673d;
      box-shadow: 0 0 6px rgba(165, 103, 61, 0.3);
      outline: none;
    }

    button {
      width: 100%;
      background: #a5673d;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      margin-top: 10px;
    }

    button:hover {
      background-color: #8d5a3d;
      box-shadow: 0 6px 14px rgba(141, 110, 99, 0.3);
    }

    .message {
      margin-bottom: 16px;
      padding: 12px;
      border-radius: 8px;
      text-align: center;
      font-size: 0.95rem;
    }

    .success {
      background-color: #e6ffed;
      color: #2d7a46;
      border: 1px solid #b7e1c5;
    }

    .error {
      background-color: #ffecec;
      color: #c0392b;
      border: 1px solid #f5c6cb;
    }

    .register-link {
      text-align: center;
      margin-top: 16px;
      font-size: 0.9rem;
      color: #6d4c41;
    }

    .register-link a {
      color: #a5673d;
      text-decoration: none;
      font-weight: 600;
    }

    .register-link a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .container {
        padding: 24px 16px;
      }

      .logo {
        width: 50px;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="Ikon Pengguna" class="logo">
    <h2>Login Roti Mulia</h2>

    {{-- Pesan sukses dari register --}}
    @if (session('success'))
      <div class="message success">
        {{ session('success') }}
      </div>
    @endif

    {{-- Error login --}}
    @if ($errors->any())
      <div class="message error">
        {{ $errors->first() }}
      </div>
    @endif

    <form action="{{ route('login.submit') }}" method="POST">
      @csrf
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Kata Sandi" required>
      <button type="submit">Masuk</button>
    </form>

    <div class="register-link">
      Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
    </div>
  </div>

</body>
</html>
