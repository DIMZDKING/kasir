<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CashierController;

Route::get('/', function () {
    return view('landing');
});
Route::get('/admin-login', function () {
    return view('admin-login');
});

Route::post('/login', [AdminController::class, 'login'])->name('login');
Route::get('/admin-main', [AdminController::class, 'index'])->name('admin-main');
Route::get('/cashier-list', [CashierController::class, 'show'])->name('cashier-list');
Route::get('/add-cashier', [CashierController::class, 'create'])->name('cashier-add');
Route::post('/add-cashier', [CashierController::class, 'store'])->name('cashier-store');
