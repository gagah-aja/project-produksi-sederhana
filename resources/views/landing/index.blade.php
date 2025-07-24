<!DOCTYPE html>
<html>
<head>
    <title>{{ setting('nama_toko') }}</title>
</head>
<body>

    {{-- Debug logo --}}
    {{ dd(setting('logo')) }}

    {{-- Logo --}}
@if(setting('logo'))
    <img src="{{ asset('storage/' . setting('logo')) }}?v={{ time() }}" 
         alt="Logo" 
         style="height: {{ setting('logo_size') ?? '100px' }}; border-radius: 12px;">
@else
    <img src="{{ asset('images/default-logo.png') }}" 
         alt="Default Logo" 
         style="height: 100px; border-radius: 12px;">
@endif
</body>
</html>


