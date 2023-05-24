<?php

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
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
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/admin', function () {
    return view('admin');
});

Route::get('/catalog', function () {
    $products = Product::all();
    return view('catalog', compact('products'));
});
Route::get('/admin', function () {
    $products = Product::all();
    return view('admin', compact('products'));
});

Route::get('/cart', function () {
    $cart = Cart::all()->where('id_user', Auth::guard('sanctum')->id());
    return view('cart', compact('cart'));
});

Route::get('/add/cart/{id}', [CartController::class, 'add']);
Route::get('/minus/cart/{id}', [CartController::class, 'minus']);
Route::get('/delete/cart/{id}', [CartController::class, 'delete']);
Route::post('/cart/all', [CartController::class, 'show']);

Route::post('/create/product', [ProductController::class, 'create'])->name('created');
Route::post('/create', [UserController::class, 'register'])->name("create");
Route::post('/auth', [UserController::class, 'login'])->name("auth");
Route::get('/logout', [UserController::class, 'logout']);
