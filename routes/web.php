<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contactUs', function () {
    return view('contactUs');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/team', function () {
    return view('team');
});


Auth::routes();

Route::resource('product','App\Http\Controllers\ProductsController');

Route::get('/products', function () {
    return view('product/products');
})->name('product.products');

 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/productDetails', function () {
    return view('product/productDetails');
});

Route::get('/addproduct', function () {
    return view('product/addproduct');
});