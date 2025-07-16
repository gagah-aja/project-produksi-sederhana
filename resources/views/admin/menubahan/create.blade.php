@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Tambah Relasi Menu & Bahan Baku</h3>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('menubahan.store') }}" method="POST">
        @csrf

       <div class="mb-3">
    <label for="menu_id" class="form-label">ID Menu</label>
    <input type="text" name="menu_id" id="menu_id" class="form-control" required>
</div>

<hr>
<h5>Bahan Baku yang Dibutuhkan</h5>

<div id="bahan-wrapper">
    <div class="row g-2 align-items-end mb-2 bahan-item">
        <div class="col-md-4">
            <label>ID Bahan Baku</label>
            <input type="text" name="bahan_baku_id[]" class="form-control" required>
        </div>
        <div class="col-md-3">
            <label>Jumlah</label>
            <input type="number" step="any" name="jumlah[]" class="form-control" required>
        </div>
        <div class="col-md-3">
            <label>Satuan</label>
            <input type="text" name="satuan[]" class="form-control" placeholder="kg / butir / gram" required>
        </div>
        <div class="col-md-2">
            <button type="button" class="btn btn-danger btn-sm remove-btn d-none">Hapus</button>
        </div>
    </div>
</div>


        <button type="button" class="btn btn-secondary btn-sm mb-3" id="tambah-bahan">+ Tambah Bahan</button>

        <div>
            <button type="submit" class="btn btn-primary">Simpan Relasi</button>
            <a href="{{ route('menubahan.index') }}" class="btn btn-outline-secondary">Batal</a>
        </div>
    </form>
</div>

<script>
document.getElementById('tambah-bahan').addEventListener('click', function () {
    const wrapper = document.getElementById('bahan-wrapper');
    const item = wrapper.querySelector('.bahan-item');
    const clone = item.cloneNode(true);

    // Reset nilai input
    clone.querySelectorAll('input, select').forEach(el => el.value = '');
    clone.querySelector('.remove-btn').classList.remove('d-none');
    wrapper.appendChild(clone);
});

document.addEventListener('click', function (e) {
    if (e.target.classList.contains('remove-btn')) {
        e.target.closest('.bahan-item').remove();
    }
});
</script>
@endsection
