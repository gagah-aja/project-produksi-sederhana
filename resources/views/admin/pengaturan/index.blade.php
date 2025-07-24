@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Pengaturan Web</h2>

    <form action="{{ route('pengaturan.update') }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="nama_toko" class="form-label">Nama Restoran</label>
            <input type="text" class="form-control" id="nama_toko" name="nama_toko" value="{{ $pengaturan['nama_toko'] }}" required>
        </div>

        <div class="mb-3">
            <label for="nama_toko_font_size" class="form-label">Ukuran Font Nama Restoran (contoh: 24px)</label>
            <input type="text" class="form-control" id="nama_toko_font_size" name="nama_toko_font_size" value="{{ $pengaturan['nama_toko_font_size'] }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Logo Saat Ini:</label><br>
            @if ($pengaturan['logo'])
                <img src="{{ asset('storage/' . $pengaturan['logo']) }}" style="width: {{ $pengaturan['logo_size'] ?? '100px' }};" class="img-thumbnail">
            @else
                <p class="text-muted">Belum ada logo</p>
            @endif
        </div>

        <div class="mb-3">
            <label for="logo" class="form-label">Upload Logo Baru</label>
            <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="logo_size" class="form-label">Ukuran Logo (contoh: 100px)</label>
            <input type="text" class="form-control" id="logo_size" name="logo_size" value="{{ $pengaturan['logo_size'] }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
    </form>
</div>
@endsection
