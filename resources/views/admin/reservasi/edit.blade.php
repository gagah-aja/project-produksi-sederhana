<form action="{{ route('reservasi.update', $reservation->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nama" value="{{ $reservation->nama }}" required>
    <input type="text" name="makanan" value="{{ $reservation->makanan }}" required>
    <input type="number" name="jumlah" value="{{ $reservation->jumlah }}" required>
    <input type="date" name="tanggal" value="{{ $reservation->tanggal }}" required>

    <button type="submit">Update</button>
</form>
