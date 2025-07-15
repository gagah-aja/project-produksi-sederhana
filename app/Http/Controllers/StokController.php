<?php

// app/Http/Controllers/StokController.php
namespace App\Http\Controllers;

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
}
