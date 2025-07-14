<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card shadow">
        <div class="card-header text-center">Login Admin</div>
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
              <label>Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
          <p class="mt-3 text-center">Belum punya akun? <a href="{{ route('admin.register.form') }}">Daftar</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
