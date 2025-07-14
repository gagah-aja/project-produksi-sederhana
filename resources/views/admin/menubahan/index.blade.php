@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Relasi Menu & Bahan Baku</h3>
    <a href="{{ route('menubahan.create') }}" class="btn btn-primary mb-3">+ Tambah Relasi</a>

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>Menu</th>
                <th>Bahan Baku</th>
                <th>Jumlah</th>
                <th>Satuan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
                <tr>
                    <td>{{ $item->menu_nama }}</td>
                    <td>{{ $item->bahan_nama }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->satuan }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">Belum ada data relasi.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
