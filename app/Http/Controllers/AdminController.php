<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Finance;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Total keseluruhan
        $totalPemasukan = Finance::where('tipe', 'pemasukan')->sum('jumlah');
        $totalPengeluaran = Finance::where('tipe', 'pengeluaran')->sum('jumlah');
        $saldo = $totalPemasukan - $totalPengeluaran;

        return view('admin.dashboard', compact(
            'totalPemasukan',
            'totalPengeluaran',
            'saldo'
        ));
    }
}
