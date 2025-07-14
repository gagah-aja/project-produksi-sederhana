<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Admin\FinanceController;
use App\Http\Controllers\AdminController;

// ✅ Halaman publik
Route::get('/', function () {
    return view('welcome'); // halaman umum tetap bisa diakses
});

// ✅ Reservasi publik
Route::get('/reservasi', [ReservationController::class, 'create']);
Route::post('/reservasi', [ReservationController::class, 'store']);

// ✅ Admin - reservasi list
Route::get('/admin/reservasi', [ReservationController::class, 'index'])->middleware('auth');

// ✅ Admin dashboard (gunakan layout admin.blade.php atau admin/dashboard.blade.php)
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// ✅ Admin - keuangan
Route::get('/admin/keuangan', [FinanceController::class, 'index'])->name('finances.index');
Route::post('/admin/keuangan', [FinanceController::class, 'store'])->name('finances.store');

Route::get('/admin/keuangan/{id}', [FinanceController::class, 'show'])->name('finances.show');
Route::get('/admin/keuangan/{id}/edit', [FinanceController::class, 'edit'])->name('finances.edit');
Route::put('/admin/keuangan/{id}', [FinanceController::class, 'update'])->name('finances.update');
Route::delete('/admin/keuangan/{id}', [FinanceController::class, 'destroy'])->name('finances.destroy');



// ✅ (Opsional) Login admin
// AUTH - Login & Register Admin
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::get('/admin/register', [AuthController::class, 'showRegisterForm'])->name('admin.register.form');
Route::post('/admin/register', [AuthController::class, 'register'])->name('admin.register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
