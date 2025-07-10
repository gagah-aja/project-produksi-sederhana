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
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f8f8ff;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .container {
      background: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }
    h2 {
      text-align: center;
      color: #a5673d;
      margin-bottom: 20px;
    }
    input {
      width: 100%;
      padding: 12px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    button {
      width: 100%;
      padding: 12px;
      background-color: #a5673d;
      color: white;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
    }
    .message {
      margin-bottom: 16px;
      padding: 10px;
      border-radius: 6px;
      text-align: center;
      font-size: 14px;
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
      font-size: 14px;
    }
    .register-link a {
      color: #a5673d;
      text-decoration: none;
      font-weight: bold;
    }
    .register-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Login RotiMulia</h2>

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
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Masuk</button>
    </form>

    <div class="register-link">
      Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
    </div>
  </div>

</body>
</html>
