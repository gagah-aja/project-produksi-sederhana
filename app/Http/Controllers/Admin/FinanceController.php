<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Finance;

class FinanceController extends Controller
{
   public function index()
{
    $finances = \App\Models\Finance::all();

    $pemasukan = $finances->where('tipe', 'pemasukan');
    $pengeluaran = $finances->where('tipe', 'pengeluaran');

    $totalPemasukan = $pemasukan->sum('jumlah');
    $totalPengeluaran = $pengeluaran->sum('jumlah');
    $saldo = $totalPemasukan - $totalPengeluaran;

    return view('admin.keuangan', [
        'pemasukan' => $pemasukan,
        'pengeluaran' => $pengeluaran,
        'totalPemasukan' => $totalPemasukan,
        'totalPengeluaran' => $totalPengeluaran,
        'saldo' => $saldo
    ]);
}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'deskripsi' => 'required|string',
            'jumlah' => 'required|numeric|min:0',
            'tipe' => 'required|in:pemasukan,pengeluaran',
        ]);

        Finance::create([
        'tanggal' => $request->tanggal,
        'deskripsi' => $request->deskripsi,
        'jumlah' => $request->jumlah,
        'tipe' => $request->tipe,
    ]);

    return redirect()->route('finances.index')->with('success', 'Data berhasil disimpan!');
}

    public function edit($id)
{
    $finance = Finance::findOrFail($id);
    return view('admin.edit-keuangan', compact('finance'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'tanggal' => 'required|date',
        'deskripsi' => 'required',
        'jumlah' => 'required|integer',
        'tipe' => 'required|in:pemasukan,pengeluaran'
    ]);

    $finance = Finance::findOrFail($id);
    $finance->update($request->all());

    return redirect()->route('finances.index')->with('success', 'Data berhasil diperbarui.');
}

public function destroy($id)
{
    $finance = Finance::findOrFail($id);
    $finance->delete();

    return redirect()->route('finances.index')->with('success', 'Data berhasil dihapus.');
}

}
