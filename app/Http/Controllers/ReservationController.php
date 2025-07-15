<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Carbon\Carbon;

class ReservationController extends Controller
{
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


        return redirect('/reservasi')->with('success', 'Reservasi berhasil dikirim!');
    }

    public function index()
{
    Carbon::setLocale('id');

    $data = \App\Models\Reservation::latest()->get();
    return view('admin.reservasi.index', compact('data'));
}

}