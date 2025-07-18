@php
    $namaToko = \App\Models\Setting::getValue('nama_toko', 'Nama Restoran');
    $logoPath = \App\Models\Setting::getValue('logo');
    $logoSize = \App\Models\Setting::getValue('logo_size', '50px');
    $fontSize = \App\Models\Setting::getValue('nama_toko_font_size', '24px');
@endphp

<nav class="bg-[#b69484] p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center space-x-3">
            @if ($logoPath)
                <img src="{{ asset('storage/' . $logoPath) }}" alt="Logo" style="height: {{ $logoSize }};" class="rounded">
            @endif
            <span style="font-size: {{ $fontSize }};" class="text-white font-bold">
                {{ $namaToko }}
            </span>
        </div>
        <div class="space-x-4">
            <a href="{{ url('/menu') }}" class="text-white hover:text-gray-200">
                <i class="fas fa-utensils"></i> Menu
            </a>
            <a href="{{ url('/reservasi') }}" class="text-white hover:text-gray-200">
                <i class="fas fa-calendar-check"></i> Reservasi
            </a>
        </div>
    </div>
</nav>
