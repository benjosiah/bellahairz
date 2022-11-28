<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductPageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('categories')->group(function () {
        Route::get('/', 'App\Http\Controllers\CategoryController@index')->name('categories.index');
        Route::get('/create', 'App\Http\Controllers\CategoryController@create')->name('categories.create');
        Route::post('/', 'App\Http\Controllers\CategoryController@store')->name('categories.store');
        Route::get('/{id}', 'App\Http\Controllers\CategoryController@show')->name('categories.show');
        Route::get('/{id}/edit', 'App\Http\Controllers\CategoryController@edit')->name('categories.edit');
        Route::put('/{id}', 'App\Http\Controllers\CategoryController@update')->name('categories.update');
        Route::delete('/{id}', 'App\Http\Controllers\CategoryController@destroy')->name('categories.destroy');
    });
    Route::prefix('products')->group(function () {
        Route::get('/', 'App\Http\Controllers\ProductController@index')->name('products.index');
        Route::get('/create', 'App\Http\Controllers\ProductController@create')->name('products.create');
        Route::post('/', 'App\Http\Controllers\ProductController@store')->name('products.store');
        Route::get('/{id}', 'App\Http\Controllers\ProductController@show')->name('products.show');
        Route::get('/{id}/edit', 'App\Http\Controllers\ProductController@edit')->name('products.edit');
        Route::put('/{id}', 'App\Http\Controllers\ProductController@update')->name('products.update');
        Route::delete('/{id}', 'App\Http\Controllers\ProductController@destroy')->name('products.destroy');
    });
    
});

Route::get('prooduct-page', [ProductPageController::class, 'products'])->name('product');
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('checkout', [ProductPageController::class, 'checkout'])->name('checkout');
