<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
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

Auth::routes();
Route::get('/', [PagesController::class, 'index']);
Route::get('/shop', [ProductController::class, 'index']);
Route::get('/shop/{id}', [ProductController::class, 'show']);
Route::get('/cart', [CartController::class, 'cart']);

