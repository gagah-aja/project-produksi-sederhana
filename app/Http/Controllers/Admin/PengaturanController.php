<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class PengaturanController extends Controller
{
    /**
     * Tampilkan halaman pengaturan web.
     */
    public function index()
    {
        $pengaturan = [
            'nama_toko' => Setting::getValue('nama_toko', 'Restoran Nusantara'),
            'nama_toko_font_size' => Setting::getValue('nama_toko_font_size', '24px'),
            'logo' => Setting::getValue('logo', null),
            'logo_size' => Setting::getValue('logo_size', '100px'),
        ];

        return view('admin.pengaturan.index', compact('pengaturan'));
    }

    /**
     * Perbarui pengaturan web.
     */
    public function update(Request $request)
    {
        $request->validate([
            'nama_toko' => 'nullable|string|max:255',
            'nama_toko_font_size' => 'nullable|string|max:10',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'logo_size' => 'nullable|string|max:10',
        ]);

        // Simpan nama toko dan ukuran font
        Setting::setValue('nama_toko', $request->input('nama_toko'));
        Setting::setValue('nama_toko_font_size', $request->input('nama_toko_font_size'));
        Setting::setValue('logo_size', $request->input('logo_size'));

        // Simpan logo jika diunggah
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('images', 'public');
            Setting::setValue('logo', $logoPath);
        }

        return redirect()->route('pengaturan.index')->with('success', 'Pengaturan berhasil diperbarui.');
    }
}
