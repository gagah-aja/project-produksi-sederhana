<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Finance;

class FinanceController extends Controller
{
    // Tampilkan semua data pemasukan & pengeluaran
    public function index()
    {
        $finances = Finance::all();

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

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
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

    // Tampilkan form edit
    public function edit($id)
    {
        $finance = Finance::findOrFail($id);
        return view('admin.edit-keuangan', compact('finance'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'deskripsi' => 'required|string',
            'jumlah' => 'required|numeric|min:0',
            'tipe' => 'required|in:pemasukan,pengeluaran',
        ]);

        $finance = Finance::findOrFail($id);
        $finance->update($request->all());

        return redirect()->route('finances.index')->with('success', 'Data berhasil diperbarui.');
    }

    // Hapus data
    public function destroy($id)
    {
        $finance = Finance::findOrFail($id);
        $finance->delete();

        return redirect()->route('finances.index')->with('success', 'Data berhasil dihapus.');
    }

    // Tampilkan detail data
    public function show($id)
    {
        $finance = Finance::findOrFail($id);
        return view('admin.detail-keuangan', compact('finance'));
    }
}
