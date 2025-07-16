<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function index()
    {
        Carbon::setLocale('id');
        $data = Reservation::latest()->get();
        return view('admin.reservasi.index', compact('data'));
    }

    public function create()
    {
        return view('admin.reservasi.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'makanan' => 'required',
            'jumlah' => 'required|integer|min:1',
            'tanggal' => 'required|date',
        ]);

        Reservation::create($request->except('_token'));

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dikirim!');
    }

    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('admin.reservasi.show', compact('reservation'));
    }

    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('admin.reservasi.edit', compact('reservation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'makanan' => 'required',
            'jumlah' => 'required|integer|min:1',
            'tanggal' => 'required|date',
        ]);

        $data = Reservation::findOrFail($id);
        $data->update($request->except('_token', '_method'));

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $data = Reservation::findOrFail($id);
        $data->delete();

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dihapus!');
    }
}
