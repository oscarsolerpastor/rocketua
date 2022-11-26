<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// CART Routes

Route::post('cart', [CartController::class, 'createCart']);

Route::get('cart/{id}', [CartController::class, 'showCart']);

Route::post('cart/{id}/product', [CartController::class, 'addCart']);

Route::put('cart/{id}/product', [CartController::class, 'editCart']);

Route::delete('cart/{id}/line/{id_line}', [CartController::class, 'deleteCart']);

Route::post('cart/{id}/coupon', [CartController::class, 'addCoupon']);

Route::delete('cart/{id}/coupon', [CartController::class, 'deleteCoupon']);

// CHECKOUT Routes

Route::post('checkout', [CheckoutController::class, 'create']);

// USERS Routes

Route::post('user/login', [UserController::class, 'loginUser']);

Route::post('user/register', [UserController::class, 'createUser']);

Route::put('user/{id}', [UserController::class, 'updateUser']);

Route::delete('user/{id}', [UserController::class, 'deleteUser']);

Route::get('user/{id}/favorite', [UserController::class, 'showFavorite']);

Route::post('user/{id}/favorite/{product}', [UserController::class, 'showFavoriteProduct']);

Route::delete('user/{id}/favorite/{product}', [UserController::class, 'deleteFavoriteProduct']);

Route::get('user/{id}/orders', [UserController::class, 'showOrderList']);

Route::get('user/{id}/comments', [UserController::class, 'showUserComments']);

// NEWSLETTER Routes

Route::post('newsletter', [NewsletterController::class, 'subscribe']);

Route::delete('newsletter', [NewsletterController::class, 'delete']);

// CATEGORY Routes

Route::get('category/{id}', [NewsletterController::class, 'view']);

// MODEL Routes

Route::get('model/{id}', [ModelController::class, 'view']);

Route::get('model/{id}/comment', function($id) {
    return 'Lista de comentarios del modelo ' . $id;
});

Route::post('model/{id}/comment', function($id) {
    return 'Creación de comentarios ' . $id;
});

// MENU Routes

Route::get('menu', function() {
    return 'Recuperar menús';
});

Route::get('menu/{id}', function($id) {
    return 'Recuperar un menu ' . $id;
});

