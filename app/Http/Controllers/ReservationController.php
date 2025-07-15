<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Carbon\Carbon;

class ReservationController extends Controller
{
    /**
     * Tampilkan daftar reservasi.
     */
    public function index()
    {
        Carbon::setLocale('id'); // Tanggal bahasa Indonesia
        $data = Reservation::latest()->get();
        return view('admin.reservasi.index', compact('data'));
    }

    /**
     * Tampilkan form tambah reservasi.
     */
    public function create()
    {
        return view('admin.reservasi.form');
    }

    /**
     * Simpan reservasi baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'makanan' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'tanggal' => 'required|date',
        ]);

        Reservation::create($request->except('_token'));

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dikirim!');
    }

    /**
     * Tampilkan detail satu reservasi.
     */
    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('admin.reservasi.show', compact('reservation'));
    }

    /**
     * Tampilkan form edit reservasi.
     */
    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('admin.reservasi.edit', compact('reservation'));
    }

    /**
     * Simpan perubahan edit reservasi.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'makanan' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'tanggal' => 'required|date',
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->update($request->except('_token', '_method'));

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil diperbarui!');
    }

    /**
     * Hapus reservasi.
     */
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dihapus!');
    }
}
