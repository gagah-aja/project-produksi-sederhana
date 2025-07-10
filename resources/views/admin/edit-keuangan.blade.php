@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="mb-4">
        <h1 class="h3 fw-semibold">Edit Data Keuangan</h1>
        <p class="text-muted">Perbarui informasi pemasukan atau pengeluaran dengan akurat.</p>
    </div>

    <div class="card border-0 shadow-sm rounded">
        <div class="card-header bg-warning text-white fw-semibold">
            Form Edit Keuangan
        </div>
        <div class="card-body">
            <form action="{{ route('finances.update', $finance->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <div class="col-md-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="{{ $finance->tanggal }}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="{{ $finance->deskripsi }}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="jumlah" class="form-label">Jumlah (Rp)</label>
                        <input type="number" name="jumlah" class="form-control" value="{{ $finance->jumlah }}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="tipe" class="form-label">Tipe</label>
                        <select name="tipe" class="form-select" required>
                            <option value="pemasukan" {{ $finance->tipe == 'pemasukan' ? 'selected' : '' }}>Pemasukan</option>
                            <option value="pengeluaran" {{ $finance->tipe == 'pengeluaran' ? 'selected' : '' }}>Pengeluaran</option>
                        </select>
                    </div>
                </div>

                <div class="mt-4 text-end">
                    <a href="{{ route('finances.index') }}" class="btn btn-outline-secondary me-2">Batal</a>
                    <button type="submit" class="btn btn-warning text-white">Perbarui Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 10px;
    }

    .form-label {
        font-weight: 500;
    }

    .form-control,
    .form-select {
        border-radius: 8px;
    }
</style>
@endsection
