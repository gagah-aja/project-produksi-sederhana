<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Admin\FinanceController;


Route::get('/home', function () {
    return view('home');
});
Route::get('/reservasi', [ReservationController::class, 'create']);
Route::post('/reservasi', [ReservationController::class, 'store']);
Route::get('/admin/reservasi', [ReservationController::class, 'index']);

// routes/web.php
Route::get('/admin', function () {
    return view('admin'); // tanpa .blade.php
});
Route::get('/admin/keuangan', [FinanceController::class, 'index'])->name('finances.index');
Route::post('/admin/keuangan', [FinanceController::class, 'store'])->name('finances.store');



