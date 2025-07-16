@extends('layouts.admin')

@section('content')
<div class="container">
    <h3 class="mb-4">Stok Bahan Baku</h3>

    <a href="{{ route('bahanbaku.create') }}" class="btn btn-success mb-3">+ Tambah Bahan Baku</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Bahan</th>
                <th>Stok</th>
                <th>Satuan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bahanbaku as $bahan)
                <tr>
                    <td>{{ $bahan->nama }}</td>
                    <td>{{ $bahan->stok }}</td>
                    <td>{{ $bahan->satuan }}</td>
                </tr>
            @empty
                <tr><td colspan="3" class="text-center text-muted">Belum ada bahan baku.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
