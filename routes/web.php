<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MenuBahanController;
use App\Http\Controllers\BahanBakuController;
use App\Http\Controllers\ProsesProduksiController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\Admin\FinanceController;

// ========================
// 🔓 ROUTE PUBLIK (tanpa login)
// ========================
Route::get('/', function () {
    return view('welcome');
});

Route::get('/reservasi', [ReservationController::class, 'create']);
Route::post('/reservasi', [ReservationController::class, 'store']);

// ========================
// 🔐 LOGIN & LOGOUT ADMIN
// ========================
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ========================
// 🔐 ADMIN AREA (semua wajib login)
// ========================
Route::get('/admin', function () {
    return auth()->check()
        ? redirect()->route('admin.dashboard')
        : redirect()->route('admin.login.form');
})->name('admin.redirect');

Route::prefix('admin')->middleware('auth')->group(function () {
    // Dashboard admin redirect ke halaman utama
    Route::get('/dashboard', function () {
        return redirect()->route('finances.index');
    })->name('admin.dashboard');

    // ✅ Modul Keuangan
    Route::get('/keuangan', [FinanceController::class, 'index'])->name('finances.index');
    Route::post('/keuangan', [FinanceController::class, 'store'])->name('finances.store');
    Route::get('/keuangan/{id}', [FinanceController::class, 'show'])->name('finances.show');
    Route::get('/keuangan/{id}', [FinanceController::class, 'show'])->name('finances.show');
    Route::get('/keuangan/{id}/edit', [FinanceController::class, 'edit'])->name('finances.edit');
    Route::put('/keuangan/{id}', [FinanceController::class, 'update'])->name('finances.update');
    Route::delete('/keuangan/{id}', [FinanceController::class, 'destroy'])->name('finances.destroy');

    // ✅ Daftar Reservasi Admin
    Route::get('/reservasi', [ReservationController::class, 'index'])->name('admin.reservasi.index');

    // ✅ Menu Bahan Baku
    Route::get('/menubahan', [MenuBahanController::class, 'index'])->name('menubahan.index');
    Route::get('/menubahan/create', [MenuBahanController::class, 'create'])->name('menubahan.create');
    Route::post('/menubahan', [MenuBahanController::class, 'store'])->name('menubahan.store');
    Route::get('/menubahan/{id}/edit', [MenuBahanController::class, 'edit'])->name('menubahan.edit');
    Route::put('/menubahan/{id}', [MenuBahanController::class, 'update'])->name('menubahan.update');
    Route::delete('/menubahan/{id}', [MenuBahanController::class, 'destroy'])->name('menubahan.destroy');
    // Menu: Input Bahan Baku
    Route::get('/bahanbaku', [BahanBakuController::class, 'index'])->name('bahanbaku.index');
    // Menu Bahan: Hubungan antara Menu dan Bahan Baku
    // BENAR
Route::get('/menubahan', [MenuBahanController::class, 'index'])->name('menubahan.index');
Route::get('/menubahan/create', [MenuBahanController::class, 'create'])->name('menubahan.create');
Route::post('/menubahan', [MenuBahanController::class, 'store'])->name('menubahan.store');
Route::get('/menubahan/{id}/edit', [MenuBahanController::class, 'edit'])->name('menubahan.edit');
Route::put('/menubahan/{id}', [MenuBahanController::class, 'update'])->name('menubahan.update');
Route::delete('/menubahan/{id}', [MenuBahanController::class, 'destroy'])->name('menubahan.destroy');

    // ✅ Proses Produksi
    Route::get('/produksi', [ProsesProduksiController::class, 'index'])->name('produksi.index');
    Route::get('/produksi/create', [ProsesProduksiController::class, 'create'])->name('produksi.create');
    Route::post('/produksi', [ProsesProduksiController::class, 'store'])->name('produksi.store');

    // ✅ Stok Bahan Baku
    Route::get('/stok', [StokController::class, 'index'])->name('stok.index');
});
