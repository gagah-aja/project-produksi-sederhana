<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index()
    {
        // Contoh tanpa data
        return view('admin.stok.index');

        // Contoh dengan data
        // $stok = Stok::all();
        // return view('admin.stok.index', compact('stok'));
    }
}
