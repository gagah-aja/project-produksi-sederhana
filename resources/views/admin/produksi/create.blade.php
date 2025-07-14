@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="mb-4">
        <h1 class="h3 fw-semibold">Proses Produksi Baru</h1>
        <p class="text-muted">Pilih menu yang ingin diproduksi dan jumlah produksinya.</p>
    </div>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('produksi.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="menu_id" class="form-label">Pilih Menu</label>
                    <select name="menu_id" class="form-select" required>
                        <option value="" disabled selected>-- Pilih Menu --</option>
                        @foreach($menuList as $menu)
                            <option value="{{ $menu->id }}">{{ $menu->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="jumlah_produksi" class="form-label">Jumlah Produksi</label>
                    <input type="number" name="jumlah_produksi" class="form-control" min="1" required>
                </div>

                <div class="text-end">
                    <a href="{{ route('produksi.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Proses</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
