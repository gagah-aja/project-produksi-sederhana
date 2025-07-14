@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="mb-4">
        <h1 class="h3 fw-semibold">Dashboard Admin</h1>
        <p class="text-muted">Selamat datang di panel admin. Gunakan menu di samping untuk navigasi cepat.</p>
    </div>

   <div class="row g-4">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm bg-light-success">
            <div class="card-body text-success text-center">
                <h5 class="card-title">Total Pemasukan</h5>
                <p class="fs-5 fw-bold">Rp {{ number_format($totalPemasukan, 0, ',', '.') }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 shadow-sm bg-light-danger">
            <div class="card-body text-danger text-center">
                <h5 class="card-title">Total Pengeluaran</h5>
                <p class="fs-5 fw-bold">Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 shadow-sm bg-light-primary">
            <div class="card-body text-primary text-center">
                <h5 class="card-title">Saldo Saat Ini</h5>
                <p class="fs-5 fw-bold">Rp {{ number_format($saldo, 0, ',', '.') }}</p>
            </div>
        </div>
    </div>
</div>


</div>

<style>
    .bg-light-success {
        background-color: #e6f4ea !important;
    }

    .bg-light-danger {
        background-color: #fce8e6 !important;
    }

    .bg-light-primary {
        background-color: #e7f0fd !important;
    }
</style>
@endsection
