<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\BahanBaku;
use App\Models\ProsesProduksi;
use App\Models\DetailProduksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProsesProduksiController extends Controller
{
    /**
     * Menampilkan daftar proses produksi.
     */
    public function index()
    {
        $produksi = ProsesProduksi::with('menu')->latest()->get();
        return view('admin.produksi.index', compact('produksi'));
    }

    /**
     * Menampilkan form input produksi.
     */
    public function create()
    {
        $menuList = Menu::with('bahanBaku')->get();
        return view('admin.produksi.create', compact('menuList'));
    }

    /**
     * Menyimpan data produksi & mengurangi stok bahan baku.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'jumlah_produksi' => 'required|numeric|min:0.1',
        ]);

        DB::beginTransaction();
        try {
            $menu = Menu::with('bahanBaku')->findOrFail($request->menu_id);

            // Cek apakah stok mencukupi
            foreach ($menu->bahanBaku as $bahan) {
                $total = $bahan->pivot->jumlah * $request->jumlah_produksi;
                if ($bahan->stok < $total) {
                    return back()->with('error', "Stok {$bahan->nama} tidak cukup. Sisa: {$bahan->stok}");
                }
            }

            // Kurangi stok bahan baku
            foreach ($menu->bahanBaku as $bahan) {
                $total = $bahan->pivot->jumlah * $request->jumlah_produksi;
                $bahan->decrement('stok', $total);
            }

            // Simpan proses produksi
            $produksi = ProsesProduksi::create([
                'menu_id' => $menu->id,
                'jumlah_produksi' => $request->jumlah_produksi,
                'tanggal' => now(),
            ]);

            // Simpan detail bahan baku yang digunakan
            foreach ($menu->bahanBaku as $bahan) {
                DetailProduksi::create([
                    'proses_produksi_id' => $produksi->id,
                    'bahan_baku_id' => $bahan->id,
                    'jumlah_digunakan' => $bahan->pivot->jumlah * $request->jumlah_produksi,
                ]);
            }

            DB::commit();
            return redirect()->route('produksi.index')->with('success', 'Produksi berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Gagal menyimpan produksi: ' . $e->getMessage());
            return back()->with('error', 'Terjadi kesalahan saat produksi: ' . $e->getMessage())->withInput();
        }
    }
}
