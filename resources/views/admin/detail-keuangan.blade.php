@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h3 class="mb-3">📄 Detail Data Keuangan</h3>

    <div class="card shadow border-0 rounded-3">
        <div class="card-body">
            <div class="mb-3">
                <label class="fw-semibold">Tanggal</label>
                <div>{{ $finance->tanggal }}</div>
            </div>
            <div class="mb-3">
                <label class="fw-semibold">Deskripsi</label>
                <div>{{ $finance->deskripsi }}</div>
            </div>
            <div class="mb-3">
                <label class="fw-semibold">Jumlah</label>
                <div>Rp {{ number_format($finance->jumlah, 0, ',', '.') }}</div>
            </div>
            <div class="mb-3">
                <label class="fw-semibold">Tipe</label>
                <div class="text-capitalize">{{ $finance->tipe }}</div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('finances.index') }}" class="btn btn-secondary">← Kembali</a>
        <a href="{{ route('finances.edit', $finance->id) }}" class="btn btn-warning text-white">✏️ Edit</a>
    </div>
</div>
@endsection
