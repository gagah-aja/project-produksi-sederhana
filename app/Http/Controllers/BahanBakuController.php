<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BahanBaku;

class BahanBakuController extends Controller
{
    public function index()
    {
        $bahanbaku = BahanBaku::all();
        return view('admin.bahanbaku.index', compact('bahanbaku'));
    }

    public function create()
    {
        return view('admin.bahanbaku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'stok' => 'required|numeric|min:0',
            'satuan' => 'required|string|max:50',
        ]);

        BahanBaku::create([
            'nama' => $request->nama,
            'stok' => $request->stok,
            'satuan' => ucfirst($request->satuan),
        ]);

        return redirect()->route('bahanbaku.index')->with('success', 'Bahan baku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $bahanbaku = BahanBaku::findOrFail($id);
        return view('admin.bahanbaku.edit', compact('bahanbaku'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'stok' => 'required|numeric|min:0',
            'satuan' => 'required|string|max:50',
        ]);

        $bahanbaku = BahanBaku::findOrFail($id);
        $bahanbaku->update([
            'nama' => $request->nama,
            'stok' => $request->stok,
            'satuan' => ucfirst($request->satuan),
        ]);

        return redirect()->route('bahanbaku.index')->with('success', 'Bahan baku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $bahanbaku = BahanBaku::findOrFail($id);
        $bahanbaku->delete();

        return redirect()->route('bahanbaku.index')->with('success', 'Bahan baku berhasil dihapus.');
    }
}
