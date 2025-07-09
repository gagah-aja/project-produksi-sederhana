<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Admin Keuangan</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }
    .summary-box {
      background: #fff;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      margin-bottom: 20px;
    }
    h2 {
      margin-top: 30px;
    }
  </style>
</head>
<body>

<div class="container mt-4">
  <!-- Header -->
  <div class="text-center mb-4">
    <h1>Dashboard Keuangan Admin</h1>
    <p class="text-muted">Pantau pemasukan & pengeluaran Anda</p>
  </div>

  <!-- Ringkasan -->
  <div class="row text-center mb-4">
    <div class="col-md-4">
      <div class="summary-box text-success">
        <h4>Total Pemasukan</h4>
        <p>Rp 10.000.000</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="summary-box text-danger">
        <h4>Total Pengeluaran</h4>
        <p>Rp 3.000.000</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="summary-box text-primary">
        <h4>Saldo Saat Ini</h4>
        <p>Rp 7.000.000</p>
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
      <tr>
        <td>2025-07-01</td>
        <td>Penjualan Produk A</td>
        <td>2.000.000</td>
      </tr>
      <tr>
        <td>2025-07-03</td>
        <td>Penjualan Produk B</td>
        <td>8.000.000</td>
      </tr>
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
      <tr>
        <td>2025-07-02</td>
        <td>Biaya Bahan Baku</td>
        <td>2.000.000</td>
      </tr>
      <tr>
        <td>2025-07-05</td>
        <td>Biaya Listrik</td>
        <td>1.000.000</td>
      </tr>
    </tbody>
  </table>

  <!-- Form Tambah Data -->
  <h2>Tambah Data</h2>
  <form>
    <div class="row">
      <div class="col-md-3 mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" id="deskripsi" placeholder="Contoh: Penjualan" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="jumlah" class="form-label">Jumlah (Rp)</label>
        <input type="number" class="form-control" id="jumlah" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="tipe" class="form-label">Tipe</label>
        <select class="form-select" id="tipe" required>
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
