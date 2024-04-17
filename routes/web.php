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

Route::get('/product-list', [AdminController::class, 'show_product'])->name('product-list');
Route::get('/add-product', [AdminController::class, 'add_product'])->name('product-add');
Route::post('/add-product', [AdminController::class, 'store_product'])->name('product-store');
Route::get('/edit-product/{id}', [AdminController::class, 'edit_product'])->name('product-edit');
Route::post('/update-product/{id}', [AdminController::class, 'update_product'])->name('product-update');

Route::get('/cashier-main', [CashierController::class, 'index'])->name('cashier-main');
Route::get('/purchase-list', [CashierController::class, 'show_purchase'])->name('purchase-list');
Route::get('/add-purchase', [CashierController::class, 'add_purchase'])->name('purchase-add');
Route::post('/add-purchase', [CashierController::class, 'store_purchase'])->name('purchase-store');
Route::get('/edit-purchase/{id}', [CashierController::class, 'edit_purchase'])->name('purchase-edit');
Route::post('/update-purchase/{id}', [CashierController::class, 'update_product'])->name('purchase-update');

