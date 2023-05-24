<?php

use App\Http\Controllers\UserController;
use App\Models\Product;
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
Route::get('/login', function () {
    return view('logIn');
});
Route::get('/registration', function () {
    return view('registr');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/catalog', function () {
    $products = Product::all();
    return view('catalog', compact('products'));
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/admin', function () {
    return view('admin');
});

Route::post('/create', [UserController::class, 'register'])->name("create");
Route::post('/auth', [UserController::class, 'login'])->name("auth");
Route::get('/logout', [UserController::class, 'logout']);
