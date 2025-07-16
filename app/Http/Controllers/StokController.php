<?php

// app/Http/Controllers/StokController.php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Stok;
use Illuminate\Http\Request;


class StokController extends Controller
{
    public function index()
    {
        $data = Stok::all(); // Ambil semua data dari database stok
        return view('admin.stok.index', compact('data'));
    } 

    public function create()
    {
        return view('admin.stok.create');
    }


   public function store(Request $request)
{
    $request->validate([
        'nama_barang' => 'required|string|max:255',
        'jumlah' => 'required|numeric',
        'satuan' => 'required|string|max:50',
    ]);

    \App\Models\Stok::create([
        'nama_barang' => $request->nama_barang,
        'jumlah' => $request->jumlah,
        'satuan' => $request->satuan,
    ]);

    return redirect()->route('stok.index')->with('success', 'Data stok berhasil ditambahkan.');
}

}

