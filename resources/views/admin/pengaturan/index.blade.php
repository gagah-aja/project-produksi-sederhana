@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Pengaturan Web</h2>

    {{-- @dd($pengaturan) --}}

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

        <div class="mb-3">
             <label for="telepon" class="form-label">Nomor Telepon</label>
             <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $pengaturan['telepon'] ?? '' }}">
        </div>

        <div class="mb-3">
             <label for="email" class="form-label">Email</label>
             <input type="email" class="form-control" id="email" name="email" value="{{ $pengaturan['email'] ?? '' }}">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ $pengaturan['alamat'] ?? '' }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Latar Belakang Saat Ini:</label><br>
            @if ($pengaturan['background'])
                <img src="{{ asset('storage/' . $pengaturan['background']) }}" style="width: 100%; max-width: 300px;" class="img-thumbnail">
            @else
                <p class="text-muted">Belum ada gambar latar</p>
            @endif
        </div>

        <div class="mb-3">
            <label for="background" class="form-label">Upload Gambar Latar Belakang</label>
            <input type="file" class="form-control" id="background" name="background" accept="image/*">
        </div>

        <hr>

        <h5>Link Sosial Media</h5>

        <div class="mb-3">
            <label for="instagram" class="form-label">Instagram</label>
            <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $pengaturan['instagram'] ?? '' }}">
        </div>

        <div class="mb-3">
            <label for="facebook" class="form-label">Facebook</label>
            <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $pengaturan['facebook'] ?? '' }}">
        </div>

        <div class="mb-3">
            <label for="twitter" class="form-label">Twitter</label>
            <input type="text" class="form-control" id="twitter" name="twitter" value="{{ $pengaturan['twitter'] ?? '' }}">
        </div>
{{-- @dd($pengaturan) --}}
        <div class="mb-3">
            <label for="google_maps" class="form-label">Embed Google Maps</label>
            <textarea class="form-control" id="google_maps" name="google_maps" rows="3" placeholder="Tempelkan iframe embed dari Google Maps">{{ $pengaturan['google_maps'] ?? 'sfs' }}</textarea>
            <small class="form-text text-muted">Contoh: &lt;iframe src="https://www.google.com/maps/embed?..." width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"&gt;&lt;/iframe&gt;</small>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
    </form>
</div>
@endsection


