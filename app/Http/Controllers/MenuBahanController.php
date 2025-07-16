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
    $request->validate([
        'menu_id' => 'required|numeric', // hilangkan "exists"
        'bahan_baku_id' => 'required|array',
        'jumlah' => 'required|array',
        'satuan' => 'required|array',
    ]);

    // Hapus relasi lama jika ada
    DB::table('menu_bahan_bakus')->where('menu_id', $request->menu_id)->delete();

    foreach ($request->bahan_baku_id as $index => $bahanId) {
        DB::table('menu_bahan_bakus')->insert([
            'menu_id' => $request->menu_id,
            'bahan_baku_id' => $bahanId,
            'jumlah' => $request->jumlah[$index],
            'satuan' => $request->satuan[$index],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    return redirect()->route('menubahan.index')->with('success', 'Relasi berhasil disimpan.');
}

}
