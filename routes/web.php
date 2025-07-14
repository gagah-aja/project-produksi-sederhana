<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Admin\FinanceController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ✅ Halaman Publik
Route::get('/', function () {
    return view('welcome');
});

// ✅ Reservasi Publik
Route::get('/reservasi', [ReservationController::class, 'create']);
Route::post('/reservasi', [ReservationController::class, 'store']);

// ✅ Admin: Dashboard (butuh login)
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');

// ✅ Admin: Daftar Reservasi
Route::get('/admin/reservasi', [ReservationController::class, 'index'])->middleware('auth');

// ✅ Admin: Modul Keuangan (CRUD)
Route::prefix('admin/keuangan')->middleware('auth')->group(function () {
    Route::get('/', [FinanceController::class, 'index'])->name('finances.index');
    Route::post('/', [FinanceController::class, 'store'])->name('finances.store');
    Route::get('/{id}', [FinanceController::class, 'show'])->name('finances.show');
    Route::get('/{id}/edit', [FinanceController::class, 'edit'])->name('finances.edit');
    Route::put('/{id}', [FinanceController::class, 'update'])->name('finances.update');
    Route::delete('/{id}', [FinanceController::class, 'destroy'])->name('finances.destroy');
});

// ✅ Auth: Login & Register Admin
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::get('/admin/register', [AuthController::class, 'showRegisterForm'])->name('admin.register.form');
Route::post('/admin/register', [AuthController::class, 'register'])->name('admin.register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ✅ Reset Password Manual (tanpa kirim email)
Route::get('/admin/lupa-password', [AuthController::class, 'showManualResetForm'])->name('password.manual.form');
Route::post('/admin/lupa-password', [AuthController::class, 'manualReset'])->name('password.manual.reset');
