<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryControllerWeb;
use App\Http\Controllers\ProductControllerWeb;
use App\Http\Controllers\ModelControllerWeb;

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

Route::resource('category', CategoryControllerWeb::class);
Route::resource('product', ProductControllerWeb::class);
Route::resource('model', ModelControllerWeb::class);
