@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="mb-4">
        <h1 class="h3 fw-semibold">Laporan Keuangan</h1>
        <p class="text-muted">Pantau pemasukan dan pengeluaran dengan mudah.</p>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-light-success">
                <div class="card-body text-success text-center">
                    <h5 class="card-title mb-2">Total Pemasukan</h5>
                    <p class="fs-5 fw-bold">Rp {{ number_format($totalPemasukan, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-light-danger">
                <div class="card-body text-danger text-center">
                    <h5 class="card-title mb-2">Total Pengeluaran</h5>
                    <p class="fs-5 fw-bold">Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-light-primary">
                <div class="card-body text-primary text-center">
                    <h5 class="card-title mb-2">Saldo Saat Ini</h5>
                    <p class="fs-5 fw-bold">Rp {{ number_format($saldo, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-success text-white fw-semibold">
            Tabel Pemasukan
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered mb-0">
                <thead class="table-light">
                    <tr>
                        <th width="20%">Tanggal</th>
                        <th>Deskripsi</th>
                        <th width="20%">Jumlah (Rp)</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pemasukan as $data)
                    <tr>
                        <td>{{ $data->tanggal }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td>{{ number_format($data->jumlah, 0, ',', '.') }}</td>
                        {{-- START PERBAIKAN DI SINI --}}
                        <td class="text-center d-flex justify-content-center align-items-center gap-2">
                            <a href="{{ route('finances.show', $data->id) }}" class="btn btn-sm btn-info">Detail</a>
                            <a href="{{ route('finances.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('finances.destroy', $data->id) }}" method="POST" class="d-inline m-0" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                        {{-- END PERBAIKAN DI SINI --}}
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Belum ada data pemasukan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-danger text-white fw-semibold">
            Tabel Pengeluaran
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered mb-0">
                <thead class="table-light">
                    <tr>
                        <th width="20%">Tanggal</th>
                        <th>Deskripsi</th>
                        <th width="20%">Jumlah (Rp)</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pengeluaran as $data)
                    <tr>
                        <td>{{ $data->tanggal }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td>{{ number_format($data->jumlah, 0, ',', '.') }}</td>
                        {{-- START PERBAIKAN DI SINI --}}
                        <td class="text-center d-flex justify-content-center align-items-center gap-2">
                            <a href="{{ route('finances.show', $data->id) }}" class="btn btn-sm btn-info">Detail</a>
                            <a href="{{ route('finances.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('finances.destroy', $data->id) }}" method="POST" class="d-inline m-0" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                        {{-- END PERBAIKAN DI SINI --}}
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Belum ada data pengeluaran.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-secondary text-white fw-semibold">
            Tambah Pemasukan / Pengeluaran
        </div>
        <div class="card-body">
            <form action="{{ route('finances.store') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" placeholder="Contoh: Penjualan A" required>
                    </div>
                    <div class="col-md-3">
                        <label for="jumlah" class="form-label">Jumlah (Rp)</label>
                        <input type="number" name="jumlah" class="form-control" placeholder="Contoh: 2000000" required>
                    </div>
                    <div class="col-md-3">
                        <label for="tipe" class="form-label">Tipe</label>
                        <select name="tipe" class="form-select" required>
                            <option value="pemasukan">Pemasukan</option>
                            <option value="pengeluaran">Pengeluaran</option>
                        </select>
                    </div>
                </div>
                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .bg-light-success {
        background-color: #e6f4ea !important;
    }

    .bg-light-danger {
        background-color: #fce8e6 !important;
    }

    .bg-light-primary {
        background-color: #e7f0fd !important;
    }

    .card {
        border-radius: 10px;
    }

    .table th, .table td {
        vertical-align: middle;
    }

    /* Tambahan untuk menyelaraskan tombol aksi */
    .table .btn-sm {
        padding: .25rem .5rem; /* Menyesuaikan padding agar tombol lebih kompak */
        font-size: .8rem; /* Menyesuaikan ukuran font agar tombol lebih kecil */
    }
</style>
@endsection