<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MenuBahanController;
use App\Http\Controllers\BahanBakuController;
use App\Http\Controllers\ProsesProduksiController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\Admin\FinanceController;
use App\Http\Controllers\Admin\PengaturanController;
use App\Http\Controllers\Admin\LandingPageController;

// ========================
// 🔓 ROUTE PUBLIK (tanpa login)
// ========================
Route::get('/', [LandingPageController::class, 'index']);

Route::get('/reservasi', [ReservationController::class, 'create']);
Route::post('/reservasi', [ReservationController::class, 'store']);

// ========================
// 🔐 LOGIN & LOGOUT ADMIN
// ========================
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ========================
// 🔐 ADMIN AREA (wajib login)
// ========================
Route::get('/admin', function () {
    return auth()->check()
        ? redirect()->route('admin.dashboard')
        : redirect()->route('admin.login.form');
})->name('admin.redirect');

Route::prefix('admin')->middleware('auth')->group(function () {

    // ✅ Dashboard Admin
    Route::get('/dashboard', function () {
        return redirect()->route('finances.index');
    })->name('admin.dashboard');

    // ✅ Modul Keuangan
    Route::get('/keuangan', [FinanceController::class, 'index'])->name('finances.index');
    Route::post('/keuangan', [FinanceController::class, 'store'])->name('finances.store');
    Route::get('/keuangan/{id}', [FinanceController::class, 'show'])->name('finances.show');
    Route::get('/keuangan/{id}/edit', [FinanceController::class, 'edit'])->name('finances.edit');
    Route::put('/keuangan/{id}', [FinanceController::class, 'update'])->name('finances.update');
    Route::delete('/keuangan/{id}', [FinanceController::class, 'destroy'])->name('finances.destroy');

    // ✅ Modul Pengaturan Web (Index & Update)
    Route::get('/pengaturan', [PengaturanController::class, 'index'])->name('pengaturan.index');
    Route::post('/pengaturan', [PengaturanController::class, 'update'])->name('pengaturan.update');

    // ✅ Modul Reservasi (Admin)
    Route::resource('reservasi', ReservationController::class);

    // ✅ Menu Bahan Baku
    Route::resource('menu', MenuBahanController::class);

    // ✅ Input Bahan Baku
    Route::resource('bahanbaku', BahanBakuController::class);

    // ✅ Proses Produksi
    Route::get('/produksi', [ProsesProduksiController::class, 'index'])->name('produksi.index');
    Route::get('/produksi/create', [ProsesProduksiController::class, 'create'])->name('produksi.create');
    Route::post('/produksi', [ProsesProduksiController::class, 'store'])->name('produksi.store');

    // ✅ Stok Bahan Baku
    Route::get('/stok', [StokController::class, 'index'])->name('stok.index');
    Route::get('/stok/create', [StokController::class, 'create'])->name('stok.create');
    Route::post('/stok', [StokController::class, 'store'])->name('stok.store');
});
