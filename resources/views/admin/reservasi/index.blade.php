@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4 fw-semibold">Daftar Reservasi</h1>

    <div class="card border-0 shadow-sm ">
        <div class="card-body p-0">
            <table class="table table-bordered mb-0">
                <thead class="table-primary">
                    <tr>
                        <th>Nama</th>
                        <th>Makanan</th>
                        <th>Jumlah</th>
                        <th>Tanggal</th>
                        <th>Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $r)
                        <tr>
                            <td>{{ $r->nama }}</td>
                            <td>{{ $r->makanan }}</td>
                            <td>{{ $r->jumlah }}</td>
                            <td>{{ $r->tanggal }}</td>
                            <td>{{ $r->created_at->timezone('Asia/Jakarta')->translatedFormat('l, d F Y H:i') }} WIB</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
