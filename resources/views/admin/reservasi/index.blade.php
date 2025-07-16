@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4 fw-semibold">Daftar Reservasi</h1>

    <div class="card border-0 shadow-sm">
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
                    @forelse ($data as $r)
                        <tr>
                            <td>{{ $r->nama }}</td>
                            <td>{{ $r->makanan }}</td>
                            <td>{{ $r->jumlah }}</td>
                            <td>{{ \Carbon\Carbon::parse($r->tanggal)->translatedFormat('d F Y') }}</td>
                            <td>{{ $r->created_at->timezone('Asia/Jakarta')->translatedFormat('l, d F Y H:i') }} WIB</td>
                            <td>
                                <div class="d-flex align-items-center gap-1 flex-wrap">
                                    <a href="{{ route('reservasi.show', $r->id) }}" class="btn btn-sm btn-info text-white">Detail</a>
                                    <a href="{{ route('reservasi.edit', $r->id) }}" class="btn btn-sm btn-warning text-white">Edit</a>
                                    <form action="{{ route('reservasi.destroy', $r->id) }}" method="POST" class="m-0" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada data reservasi.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
