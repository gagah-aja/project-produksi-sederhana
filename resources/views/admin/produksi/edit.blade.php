@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h4 mb-3">Edit Data Produksi</h1>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('produksi.update', $produksi->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-md-6">
                <label for="produk">Nama Produk</label>
                <input type="text" name="produk" class="form-control" value="{{ $produksi->produk }}" required>
            </div>
            <div class="col-md-3">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="{{ $produksi->tanggal }}" required>
            </div>
            <div class="col-md-3">
                <label for="jumlah">Jumlah Produk</label>
                <input type="number" name="jumlah" class="form-control" value="{{ $produksi->jumlah }}" required>
            </div>
            <div class="col-md-6">
                <label for="bahan_baku_id">Bahan Baku</label>
                <select name="bahan_baku_id" class="form-select" required>
                    @foreach($bahanbaku as $bahan)
                        <option value="{{ $bahan->id }}" {{ $bahan->id == $produksi->bahan_baku_id ? 'selected' : '' }}>
                            {{ $bahan->nama }} (Stok: {{ $bahan->stok }})
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="jumlah_bahan_digunakan">Jumlah Bahan Digunakan</label>
                <input type="number" name="jumlah_bahan_digunakan" class="form-control" value="{{ $produksi->jumlah_bahan_digunakan }}" required>
            </div>
        </div>
        <div class="mt-4 text-end">
            <a href="{{ route('produksi.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-warning text-white">Update</button>
        </div>
    </form>
</div>
@endsection
