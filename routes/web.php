<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Product;
use App\Models\ReplacementOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReplacementOrderController;

Route::get('/', [HomeController::class, 'welcome']);
Route::get('/hello', [HelloController::class, 'greet']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/orders', [ReplacementOrderController::class, 'index'])->name('orders.index');
Route::get('/order', [ReplacementOrderController::class, 'create'])->name('orders.create');
Route::post('/order', [ReplacementOrderController::class, 'store'])->name('orders.store');
Route::get('/order/{id}/edit', [ReplacementOrderController::class, 'edit'])->name('orders.edit');
Route::post('/order/{id}/update', [ReplacementOrderController::class, 'update'])->name('orders.update');
// Route::post('/order/{id}/delete', [ReplacementOrderController::class, 'destroy'])->name('orders.destroy');
Route::delete('/order/{id}', [ReplacementOrderController::class, 'destroy'])->name('orders.destroy');