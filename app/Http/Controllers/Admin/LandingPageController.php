<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Setting;

class LandingPageController extends Controller
{
    public function index()
    {
        // $pengaturan = Setting::first(); // Ambil data dari tabel settings

         $pengaturan = Setting::pluck('value', 'key')->toArray();
        
        return view('welcome', compact('pengaturan')); // Kirim ke view welcome.blade.php
    }
}
