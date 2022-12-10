<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::group(['prefix' => 'cart'], function() {
    Route::post('', [CartController::class, 'createCart']);
    Route::get('{id}', [CartController::class, 'showCart']);
    Route::post('{id}/product', [CartController::class, 'addCart']);
    Route::put('{id}/product', [CartController::class, 'editCart']);
    Route::delete('{id}/line/{id_line}', [CartController::class, 'deleteCart']);
    Route::post('{id}/coupon', [CartController::class, 'addCoupon']);
    Route::delete('{id}/coupon', [CartController::class, 'deleteCoupon']);
});

// CATEGORY Routes

Route::get('category/{id}', [CategoryController::class, 'showCategory']);

// CHECKOUT Routes

Route::post('checkout', [CheckoutController::class, 'createCheckout']);

// MENU Routes

Route::get('menu', [MenuController::class, 'showMenus']);
Route::get('menu/{id}', [MenuController::class, 'showMenu']);

// MODEL Routes

Route::get('model/{id}', [ModelController::class, 'showModel']);
Route::get('model/{id}/comment', [ModelController::class, 'showModelComments']);
Route::post('model/{id}/comment', [ModelController::class, 'createModelComment']);

// NEWSLETTER Routes

Route::post('newsletter', [NewsletterController::class, 'subscribeNewsletter']);
Route::delete('newsletter', [NewsletterController::class, 'unsubscribeNewsletter']);

// USERS Routes

Route::group(['prefix' => 'user'], function() {
    Route::post('login', [UserController::class, 'loginUser']);
    Route::post('register', [UserController::class, 'createUser']);
    Route::put('{id}', [UserController::class, 'updateUser']);
    Route::delete('{id}', [UserController::class, 'deleteUser']);
    Route::get('{id}/favorite', [UserController::class, 'showFavorites']);
    Route::post('{id}/favorite/{product}', [UserController::class, 'addFavoriteProduct']);
    Route::delete('{id}/favorite/{product}', [UserController::class, 'deleteFavoriteProduct']);
    Route::get('{id}/orders', [UserController::class, 'showOrders']);
    Route::get('{id}/comments', [UserController::class, 'showComments']);
});
