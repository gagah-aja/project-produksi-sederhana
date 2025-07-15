@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4 fw-semibold">Data Stok Barang</h1>
    <a href="{{ route('stok.create') }}" class="btn btn-primary mb-3">+ Tambah Relasi</a>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <table class="table table-bordered mb-0">
                <thead class="table-primary">
                    <tr>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>{{ $item->satuan }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">Tidak ada data stok.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
