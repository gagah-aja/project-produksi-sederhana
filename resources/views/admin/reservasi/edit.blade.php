@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">Edit Reservasi</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('reservasi.update', $reservation->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $reservation->nama) }}" required>
                </div>

                <div class="mb-3">
                    <label for="makanan" class="form-label">Makanan</label>
                    <input type="text" name="makanan" id="makanan" class="form-control" value="{{ old('makanan', $reservation->makanan) }}" required>
                </div>

                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ old('jumlah', $reservation->jumlah) }}" required min="1">
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal', $reservation->tanggal) }}" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('reservasi.index') }}" class="btn btn-secondary">← Kembali</a>
                    <button type="submit" class="btn btn-primary">💾 Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
