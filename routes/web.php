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

    $products = \App\Models\Product::all();

    return view('front_office.index', compact('products'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('accountTypes', App\Http\Controllers\AccountTypeController::class);

Route::resource('advantages', App\Http\Controllers\AdvantageController::class);


Route::resource('articles', App\Http\Controllers\ArticleController::class);


Route::resource('categories', App\Http\Controllers\CategoryController::class);


Route::resource('needs', App\Http\Controllers\NeedController::class);


Route::resource('products', App\Http\Controllers\ProductController::class);


Route::resource('productSpecifications', App\Http\Controllers\ProductSpecificationController::class);


Route::resource('productUsers', App\Http\Controllers\ProductUserController::class);


Route::resource('users', App\Http\Controllers\UserController::class);


Route::resource('settings', App\Http\Controllers\SettingController::class);
