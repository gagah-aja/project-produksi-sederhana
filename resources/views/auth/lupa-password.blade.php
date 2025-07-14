<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Lupa Password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card shadow">
        <div class="card-header text-center bg-primary text-white">
          🔐 Lupa Password
        </div>
        <div class="card-body">
          @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif
          @if ($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
          @endif
          <form method="POST" action="{{ route('password.manual.reset') }}">
            @csrf
            <div class="mb-3">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Password Baru</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Ulangi Password Baru</label>
              <input type="password" name="password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-outline-primary w-100">Reset Password</button>
          </form>
          <div class="mt-3 text-center">
            <a href="{{ route('admin.login.form') }}">Kembali ke Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
