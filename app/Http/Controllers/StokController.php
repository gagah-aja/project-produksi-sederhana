<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index()
    {
        $data = DB::table('stoks')->get(); // atau model Stok::all() jika pakai model

        return view('admin.stok.index', compact('data'));
    }


    // Contoh dengan data
    // $stok = Stok::all();
    // return view('admin.stok.index', compact('stok'));
}

