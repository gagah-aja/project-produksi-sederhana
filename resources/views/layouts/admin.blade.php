<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
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
            padding: 12px 30px;
            color: #ddd;
            text-decoration: none;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }
        .sidebar .collapse a {
            font-size: 0.9rem;
            padding-left: 40px;
            color: #ccc;
        }
        .sidebar .collapse a:hover {
            color: #fff;
        }
        .dropdown-toggle {
            color: #ccc;
            text-decoration: none;
            padding: 12px 30px;
            display: block;
        }
        .dropdown-toggle:hover {
            color: #fff;
            background-color: #495057;
        }
        .main-content {
            margin-left: 220px;
            padding: 30px;
        }
    </style>
</head>
<body>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="sidebar">
    <h4>🧑‍💼 Admin Panel</h4>

    <a href="{{ route('finances.index') }}">📊 Keuangan</a>
    <a href="{{ route('reservasi.index') }}">📋 Reservasi</a>

    <!-- Collapse Menu -->
    <a class="dropdown-toggle" data-bs-toggle="collapse" href="#menuCollapse" role="button" aria-expanded="false" aria-controls="menuCollapse">
        🍞 Menu
    </a>
    <div class="collapse ps-2" id="menuCollapse">
        <a href="{{ route('menubahan.index') }}" class="d-block text-decoration-none text-light">📥 Input Bahan Baku</a>
        <a href="{{ route('produksi.index') }}" class="d-block text-decoration-none text-light">⚙️ Proses Produksi</a>
        <a href="{{ route('stok.index') }}" class="d-block text-decoration-none text-light">📦 Stok Bahan Baku</a>
    </div>

    <!-- Logout Button -->
    <form action="{{ route('logout') }}" method="POST" class="d-grid mt-3 px-3">
        @csrf
        <button type="submit" class="btn btn-danger btn-sm">Logout</button>
    </form>
</div>

<!-- Main Content -->
<div class="main-content">
    @yield('content')
</div>

</body>
</html>
