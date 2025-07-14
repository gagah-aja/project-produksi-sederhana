<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 220px;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar h4 {
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
        }
        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: #ddd;
            text-decoration: none;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }
        .main-content {
            margin-left: 220px;
            padding: 30px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h4>🧑‍💼 Admin Panel</h4>
    <a href="{{ route('admin.dashboard') }}">🏠 Dashboard</a>
    <a href="{{ route('finances.index') }}">📊 Keuangan</a>
    <a href="/admin/reservasi">📋 Reservasi</a>
    <form action="{{ route('logout') }}" method="POST" class="d-grid mt-3 px-3">
        @csrf
        <button type="submit" class="btn btn-danger btn-sm">Logout</button>
    </form>
</div>

<div class="main-content">
    @yield('content')
</div>

</body>
</html>
