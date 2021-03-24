<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/product/search', [ProductController::class, 'search']);
Route::post('/product/update', [ProductController::class, 'update']);
Route::get('/product/edit/{id?}', [ProductController::class, 'edit']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::post('/product/insert', [ProductController::class, 'insert']);
Route::get('/product/remove/{id}', [ProductController::class, 'remove']);
Route::get('/home',[HomeController::class,'index']);
Route::get('cart/view',[CartController::class,'viewCart']);
Route::get('cart/add/{id}',[CartController::class,'addToCart']);
Route::get('cart/delete/{id}',[CartController::class,'deleteCart']);