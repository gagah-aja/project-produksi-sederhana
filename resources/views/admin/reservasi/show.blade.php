@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Detail Reservasi</h4>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <th width="150">Nama</th>
                    <td>: {{ $reservation->nama }}</td>
                </tr>
                <tr>
                    <th>Makanan</th>
                    <td>: {{ $reservation->makanan }}</td>
                </tr>
                <tr>
                    <th>Jumlah</th>
                    <td>: {{ $reservation->jumlah }}</td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td>: {{ \Carbon\Carbon::parse($reservation->tanggal)->translatedFormat('d F Y') }}</td>
                </tr>
            </table>
            <a href="{{ route('reservasi.index') }}" class="btn btn-secondary mt-3">← Kembali</a>
        </div>
    </div>
</div>
@endsection
