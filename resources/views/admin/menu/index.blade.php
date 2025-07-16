@extends('layouts.admin')

@section('content')
<div class="container">
    <h3 class="mb-4">Daftar Menu</h3>

    <a href="{{ route('menu.create') }}" class="btn btn-primary mb-3">+ Tambah Menu</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($menus as $menu)
                <tr>
                    <td>{{ $menu->nama }}</td>
                    <td>Rp{{ number_format($menu->harga, 0, ',', '.') }}</td>
                    <td>{{ $menu->deskripsi }}</td>
                </tr>
            @empty
                <tr><td colspan="3" class="text-center text-muted">Belum ada menu.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
