<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('test', [ProductController::class, 'test']);
Route::get('product', [ProductController::class, 'index'])->name('products.index');
Route::get('product/{product_id}', [ProductController::class, 'getProductById'])->name('products.getProductById');
Route::post('/product', [ProductController::class, 'store'])->name('products.store');
Route::delete('/product/{product_id}', [ProductController::class, 'destroy'])->name('products.destroy');




