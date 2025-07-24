<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
//  use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


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
            'telepon' => Setting::getValue('telepon', '(021) 1234 5678'),
            'email' => Setting::getValue('email', 'info@rasanusantara.id'),
            'alamat' => Setting::getValue('alamat', 'Jl. Kuliner No. 88, Jakarta'),
            'background' => Setting::getValue('background', null),
            'instagram' => Setting::getValue('instagram', ''),
            'facebook' => Setting::getValue('facebook', ''),
            'twitter' => Setting::getValue('twitter', ''),
            'google_maps' => Setting::getValue('google_maps', ''),
        ];

        return view('admin.pengaturan.index', compact('pengaturan'));
    }

    /**
     * Perbarui pengaturan web.
     */

    public function update(Request $request)
    {

        // dd($request->all());
        try {
            $request->validate([
                'nama_toko' => 'nullable|string|max:255',
                'nama_toko_font_size' => 'nullable|string|max:10',
                'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'logo_size' => 'nullable|string|max:10',
                'telepon' => 'nullable|string|max:50',
                'email' => 'nullable|email|max:255',
                'alamat' => 'nullable|string|max:500',
                'background' => 'nullable|image|mimes:jpg,jpeg,png|max:4096',
                'instagram' => 'nullable|string|max:255',
                'facebook' => 'nullable|string|max:255',
                'twitter' => 'nullable|string|max:255',
                // 'google_maps' => 'nullable|string|max:3000',
            ]);
        } catch (ValidationException $e) {
            // Menampilkan semua pesan error validasi
            dd($e->errors());

            // Atau jika hanya ingin ambil semua pesan dalam bentuk string
            // use Illuminate\Support\Arr;
            // dd(implode(', ', Arr::flatten($e->errors())));
        }

        // Simpan pengaturan teks
        Setting::setValue('nama_toko', $request->input('nama_toko'));
        Setting::setValue('nama_toko_font_size', $request->input('nama_toko_font_size'));
        Setting::setValue('logo_size', $request->input('logo_size'));
        Setting::setValue('telepon', $request->input('telepon'));
        Setting::setValue('email', $request->input('email'));
        Setting::setValue('alamat', $request->input('alamat'));
        Setting::setValue('instagram', $request->input('instagram'));
        Setting::setValue('facebook', $request->input('facebook'));
        Setting::setValue('twitter', $request->input('twitter'));

        // dd($request->input('google_maps'));
        Setting::setValue('google_maps', $request->input('google_maps'));

// dd([
//     'dari_request' => $request->input('google_maps'),
//     'tersimpan' => Setting::getValue('google_maps')
// ]);


        // Simpan logo jika diunggah
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('images', 'public');
            Setting::setValue('logo', $logoPath);
        }

        // Simpan latar belakang jika diunggah
        if ($request->hasFile('background')) {
            $backgroundPath = $request->file('background')->store('images', 'public');
            Setting::setValue('background', $backgroundPath);
        }

        return redirect()->route('pengaturan.index')->with('success', 'Pengaturan berhasil diperbarui.');
    }

}
