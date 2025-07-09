<!-- resources/views/admin/keuangan.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Keuangan Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
  <div class="text-center mb-4">
    <h1>Dashboard Keuangan Admin</h1>
    <p class="text-muted">Pantau pemasukan & pengeluaran Anda</p>
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
  </div>

  <!-- Ringkasan -->
  <div class="row text-center mb-4">
    <div class="col-md-4">
      <div class="p-3 bg-success text-white rounded shadow">
        <h5>Total Pemasukan</h5>
        <h4>Rp {{ number_format($totalPemasukan, 0, ',', '.') }}</h4>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-danger text-white rounded shadow">
        <h5>Total Pengeluaran</h5>
        <h4>Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}</h4>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-primary text-white rounded shadow">
        <h5>Saldo Saat Ini</h5>
        <h4>Rp {{ number_format($saldo, 0, ',', '.') }}</h4>
      </div>
    </div>
  </div>

  <!-- Tabel Pemasukan -->
  <h2>Pemasukan</h2>
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr>
        <th>Tanggal</th>
        <th>Deskripsi</th>
        <th>Jumlah (Rp)</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pemasukan as $row)
        <tr>
          <td>{{ $row->tanggal }}</td>
          <td>{{ $row->deskripsi }}</td>
          <td>{{ number_format($row->jumlah, 0, ',', '.') }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <!-- Tabel Pengeluaran -->
  <h2>Pengeluaran</h2>
  <table class="table table-bordered table-striped">
    <thead class="table-danger">
      <tr>
        <th>Tanggal</th>
        <th>Deskripsi</th>
        <th>Jumlah (Rp)</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pengeluaran as $row)
        <tr>
          <td>{{ $row->tanggal }}</td>
          <td>{{ $row->deskripsi }}</td>
          <td>{{ number_format($row->jumlah, 0, ',', '.') }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <!-- Form Tambah Data -->
  <h2>Tambah Data</h2>
  <form method="POST" action="{{ route('finances.store') }}">
    @csrf
    <div class="row">
      <div class="col-md-3 mb-3">
        <label for="tanggal">Tanggal</label>
        <input type="date" class="form-control" name="tanggal" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="jumlah">Jumlah (Rp)</label>
        <input type="number" class="form-control" name="jumlah" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="tipe">Tipe</label>
        <select name="tipe" class="form-select" required>
          <option value="pemasukan">Pemasukan</option>
          <option value="pengeluaran">Pengeluaran</option>
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Tambah Data</button>
  </form>

  <footer class="text-center mt-5 text-muted">
    &copy; 2025 Aplikasi Keuangan UMKM
  </footer>
</div>
</body>
</html>
