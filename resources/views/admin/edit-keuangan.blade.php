@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="mb-4">
        <h1 class="h3 fw-semibold text-warning">✏️ Edit Data Keuangan</h1>
        <p class="text-muted">Perbarui informasi pemasukan atau pengeluaran dengan akurat.</p>
    </div>

    <div class="card border-0 shadow rounded-4">
        <div class="card-header bg-warning text-white fw-semibold rounded-top">
            📝 Form Edit Keuangan
        </div>
        <div class="card-body">
            <form action="{{ route('finances.update', $finance->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-4">
                    <div class="col-md-3">
                        <label for="tanggal" class="form-label">📅 Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="{{ $finance->tanggal }}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="deskripsi" class="form-label">💬 Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="{{ $finance->deskripsi }}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="jumlah" class="form-label">💰 Jumlah (Rp)</label>
                        <input type="number" name="jumlah" class="form-control" value="{{ $finance->jumlah }}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="tipe" class="form-label">📂 Tipe</label>
                        <select name="tipe" class="form-select" required>
                            <option value="pemasukan" {{ $finance->tipe == 'pemasukan' ? 'selected' : '' }}>Pemasukan</option>
                            <option value="pengeluaran" {{ $finance->tipe == 'pengeluaran' ? 'selected' : '' }}>Pengeluaran</option>
                        </select>
                    </div>
                </div>

                <div class="mt-5 d-flex justify-content-end gap-2">
                    <a href="{{ route('finances.index') }}" class="btn btn-outline-secondary rounded-pill px-4">← Batal</a>
                    <button type="submit" class="btn btn-warning text-white rounded-pill px-4">💾 Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .form-label {
        font-weight: 600;
        color: #5d4037;
    }

    .form-control,
    .form-select {
        border-radius: 10px;
        padding: 10px 12px;
        font-size: 0.95rem;
    }

    button.btn-warning:hover {
        background-color: #f0ad4e;
        color: #fff;
    }

    a.btn-outline-secondary:hover {
        background-color: #e9ecef;
        color: #000;
    }
</style>
@endsection
