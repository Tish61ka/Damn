<?php

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\Order;

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
Route::get('/item/{id}', function ($id) {
    $product = Product::find($id);
    return view('item', compact('product'));
});
Route::get('/catalog', function () {
    $products = Product::all();
    return view('catalog', compact('products'));
});

Route::post('/create', [UserController::class, 'register'])->name("create");
Route::post('/auth', [UserController::class, 'login'])->name("auth");
Route::get('/logout', [UserController::class, 'logout']);

Route::group(
    ['middleware' => 'User'],
    function () {
        Route::get('/cart', function () {
            $cart = Cart::all()->where('id_user', Auth::guard('sanctum')->id());
            return view('cart', compact('cart'));
        });
        Route::get('/profile', function () {
            $orders = Order::all()->where('id_user', Auth::user()->id);
            return view('profile', compact('orders'));
        });
        Route::get('/add/cart/{id}', [CartController::class, 'add']);
        Route::get('/minus/cart/{id}', [CartController::class, 'minus']);
        Route::get('/delete/cart/{id}', [CartController::class, 'delete']);
        Route::get('/create/order', [OrderController::class, 'create']);
    }
);

Route::group(
    ['middleware' => 'Admin'],
    function () {
        Route::get('/admin', function () {
            $products = Product::all();
            return view('admin', compact('products'));
        });
        Route::get('/edit/{id}', function ($id) {
            $product = Product::find($id);
            $products = Product::all();
            return view('edit', compact('product', 'products'));
        });
        Route::post('/create/product', [ProductController::class, 'create'])->name('created');
        Route::post('/update/product', [ProductController::class, 'update'])->name('update');
        Route::get('/delete/product/{id}', [ProductController::class, 'delete']);
        Route::post('/create/category', [CategoryController::class, 'create_category'])->name('category_create');
    }
);
