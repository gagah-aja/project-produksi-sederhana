<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Finance;

class FinanceController extends Controller
{
    public function index()
    {
        $finances = Finance::orderBy('tanggal', 'desc')->get();
        $pemasukan = $finances->where('tipe', 'pemasukan');
        $pengeluaran = $finances->where('tipe', 'pengeluaran');

        $totalPemasukan = $pemasukan->sum('jumlah');
        $totalPengeluaran = $pengeluaran->sum('jumlah');
        $saldo = $totalPemasukan - $totalPengeluaran;

        return view('admin.keuangan', compact(
            'finances', 'pemasukan', 'pengeluaran', 'totalPemasukan', 'totalPengeluaran', 'saldo'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'deskripsi' => 'required|string',
            'jumlah' => 'required|numeric',
            'tipe' => 'required|in:pemasukan,pengeluaran',
        ]);

        Finance::create($validated);
        return redirect()->route('finances.index')->with('success', 'Data berhasil ditambahkan.');
    }
}
