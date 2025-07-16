<?php

namespace App\Http\Controllers;

use App\Models\BahanBaku;
use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    public function index()
    {
        $data = BahanBaku::all();
        return view('admin.bahanbaku.index', compact('data'));
    }

    public function create()
    {
        return view('admin.bahanbaku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'stok' => 'required|numeric',
            'satuan' => 'required|string|max:50',
        ]);

        BahanBaku::create($request->only('nama', 'stok', 'satuan'));

        return redirect()->route('bahanbaku.index')->with('success', 'Bahan baku berhasil ditambahkan.');
    }
}
