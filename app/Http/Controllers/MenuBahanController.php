<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\BahanBaku;

class MenuBahanController extends Controller
{
    public function index()
    {
        $data = DB::table('menu_bahan_bakus')
            ->join('menus', 'menu_bahan_bakus.menu_id', '=', 'menus.id')
            ->join('bahan_bakus', 'menu_bahan_bakus.bahan_baku_id', '=', 'bahan_bakus.id')
            ->select(
                'menu_bahan_bakus.*',
                'menus.nama as menu_nama',
                'bahan_bakus.nama as bahan_nama'
            )
            ->get();

        return view('admin.menubahan.index', compact('data'));
    }

   public function create()
{
    $menus = Menu::all(); // Ambil semua menu dari DB
    $bahanBaku = BahanBaku::all(); // Ambil semua bahan baku
    return view('admin.menubahan.create', compact('menus', 'bahanBaku'));
}


    public function store(Request $request)
{
    // Validasi
    $request->validate([
        'menu_id' => 'required|exists:menus,id',
        'bahan_baku_id' => 'required|array',
        'bahan_baku_id.*' => 'exists:bahan_bakus,id',
        'jumlah' => 'required|array',
        'jumlah.*' => 'numeric|min:0',
        'satuan' => 'required|array',
        'satuan.*' => 'string'
    ]);

    // Simpan relasi satu per satu
    foreach ($request->bahan_baku_id as $index => $bahanId) {
        \App\Models\MenuBahan::create([
            'menu_id' => $request->menu_id,
            'bahan_baku_id' => $bahanId,
            'jumlah' => $request->jumlah[$index],
            'satuan' => $request->satuan[$index],
        ]);
    }

    return redirect()->route('menubahan.index')->with('success', 'Relasi berhasil disimpan!');
}

}
