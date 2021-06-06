<?php

use Illuminate\Support\Facades\Route;
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

// laravel welcome page
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/signup', function () {
    return view('signup');
});

Route::get('/checkout', function () {
    return view('checkout');
});

// l-0gut
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('home');
});


Route::post("/login",[UserController::class,'login']);

Route::post("/signup",[UserController::class,'signup']);

// products page 
Route::get("/products",[ProductController::class,'index']);

Route::get("/detail/{id}",[ProductController::class,'detail']);

Route::get("/search",[ProductController::class,'search']);

Route::post("/add_to_cart",[ProductController::class,'addToCart']);

Route::get("cartList",[ProductController::class,'cartList']);

Route::get("removecart/{id}",[ProductController::class,'removeCart']);

Route::get("order",[ProductController::class,'Order']);

Route::post("checkout",[ProductController::class,'checkout']);

