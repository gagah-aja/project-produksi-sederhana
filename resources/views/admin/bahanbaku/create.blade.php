@extends('layouts.admin')

@section('content')
<div class="container">
    <h3 class="mb-4">Tambah Bahan Baku</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bahanbaku.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Bahan Baku</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok Awal</label>
            <input type="number" name="stok" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="satuan" class="form-label">Satuan</label>
            <input type="text" name="satuan" class="form-control" placeholder="kg / gram / butir" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('bahanbaku.index') }}" class="btn btn-outline-secondary">Batal</a>
    </form>
</div>
@endsection
