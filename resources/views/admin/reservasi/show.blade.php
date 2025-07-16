<p>Nama: {{ $reservation->nama }}</p>
<p>Makanan: {{ $reservation->makanan }}</p>
<p>Jumlah: {{ $reservation->jumlah }}</p>
<p>Tanggal: {{ \Carbon\Carbon::parse($reservation->tanggal)->translatedFormat('d F Y') }}</p>
