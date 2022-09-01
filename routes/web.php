<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product', [HomeController::class, 'products'])->name('product');
Route::get('/add-product', [HomeController::class, 'getAddForm']);
Route::post('/add-product', [HomeController::class, 'handleAddproduct'])->name('product.add');
Route::put('/add-product', [HomeController::class, 'handlePutproduct'])->name('product.put');
