<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
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

Route::post('cart', function() {
    return 'Creación del carrito';
    Log::info('Verbo HTTP: POST');
    Log::info('Endpoint: cart');
    Log::info('Descripción: Creación del carrito');
});

Route::get('cart/{id}', function($id) {
    return 'Recuperación del carrito ' . $id;
    Log::info('Verbo HTTP: GET');
    Log::info('Endpoint: cart/{id}');
    Log::info('Descripción: Recuperación del carrito');
});;

Route::post('cart/{id}/product', function($id) {
    return 'Añadir producto al carrito ' . $id;
    Log::info('Verbo HTTP: POST');
    Log::info('Endpoint: cart/{id}/product');
    Log::info('Descripción: Añadir producto al carrito');
});

Route::put('cart/{id}/product', function($id) {
    return 'Quitar producto del carrito ' . $id;
    Log::info('Verbo HTTP: PUT');
    Log::info('Endpoint: cart/{id}/product');
    Log::info('Descripción: Quitar producto del carrito');
});

Route::delete('cart/{id}/line/{id_line}', function($id, $id_line) {
    return 'Borrar producto del carrito ' . $id . $id_line;
    Log::info('Verbo HTTP: DELETE');
    Log::info('Endpoint: cart/{id}/line/{id_line}');
    Log::info('Descripción: Borrar producto del carrito');
});

Route::post('cart/{id}/coupon', function($id) {
    return 'Añadir cupón ' . $id;
    Log::info('Verbo HTTP: POST');
    Log::info('Endpoint: cart/{id}/coupon');
    Log::info('Descripción: Añadir cupón');
});

Route::delete('cart/{id}/coupon', function($id) {
    return 'Borrar cupón ' . $id;
    Log::info('Verbo HTTP: DELETE');
    Log::info('Endpoint: cart/{id}/coupon');
    Log::info('Descripción: Borrar cupón');
});

// CHECKOUT Routes

Route::post('checkout', function() {
    return 'Creación del pedido';
    Log::info('Verbo HTTP: POST');
    Log::info('Endpoint: checkout');
    Log::info('Descripción: Creación del pedido');
});

// USERS Routes

Route::post('user/login', function() {
    return 'Login';
    Log::info('Verbo HTTP: POST');
    Log::info('Endpoint: user/login');
    Log::info('Descripción: Login');
});

Route::post('user/register', function() {
    return 'Creación del usuario';
    Log::info('Verbo HTTP: POST');
    Log::info('Endpoint: user/register');
    Log::info('Descripción: Creación del usuario');
});

Route::put('user/{id}', function($id) {
    return 'Actualización de usuario ' . $id;
    Log::info('Verbo HTTP: PUT');
    Log::info('Endpoint: user/{id}');
    Log::info('Descripción: Actualización de usuario');
});

Route::delete('user/{id}', function($id) {
    return 'Baja de usuario ' . $id;
    Log::info('Verbo HTTP: DELETE');
    Log::info('Endpoint: user/{id}');
    Log::info('Descripción: Baja de usuario');
});

Route::get('user/{id}/favorite', function($id) {
    return 'Listado de favoritos ' . $id;
    Log::info('Verbo HTTP: GET');
    Log::info('Endpoint: user/{id}/favorite');
    Log::info('Descripción: Listado de favoritos');
});

Route::post('user/{id}/favorite/{product}', function($id, $product) {
    return 'Añadir a favoritos ' . $id . $product;
    Log::info('Verbo HTTP: POST');
    Log::info('Endpoint: user/{id}/favorite/{product}');
    Log::info('Descripción: Añadir a favoritos');
});

Route::delete('user/{id}/favorite/{product}', function($id, $product) {
    return 'Eliminar de favoritos ' . $id . $product;
    Log::info('Verbo HTTP: DELETE');
    Log::info('Endpoint: user/{id}/favorite/{product}');
    Log::info('Descripción: Eliminar de favoritos');
});

Route::get('user/{id}/orders', function($id) {
    return 'Listado de pedidos ' . $id;
    Log::info('Verbo HTTP: GET');
    Log::info('Endpoint: user/{id}/orders');
    Log::info('Descripción: Listado de pedidos');
});

Route::get('user/{id}/comments', function($id) {
    return 'Listado de comentarios del usuario ' . $id;
    Log::info('Verbo HTTP: GET');
    Log::info('Endpoint: user/{id}/comments');
    Log::info('Descripción: Listado de comentarios del usuario');
});

// NEWSLETTER Routes

Route::post('newsletter', function() {
    return 'Añadir a newsleter';
    Log::info('Verbo HTTP: POST');
    Log::info('Endpoint: newsletter');
    Log::info('Descripción: Añadir a newsleter');
});

Route::delete('newsletter', function() {
    return 'Baja de la newsletter';
    Log::info('Verbo HTTP: DELETE');
    Log::info('Endpoint: newsletter');
    Log::info('Descripción: Baja de la newsletter');
});

// CATEGORY Routes

Route::get('category/{id}', function($id) {
    return 'Recuperar categoría ' . $id;
    Log::info('Verbo HTTP: GET');
    Log::info('Endpoint: category/{id}');
    Log::info('Descripción: Recuperar categoría');
});

// MODEL Routes

Route::get('model/{id}', function($id) {
    return 'Recuperar un modelos ' . $id;
    Log::info('Verbo HTTP: GET');
    Log::info('Endpoint: model/{id}');
    Log::info('Descripción: Recuperar un modelos');
});

Route::get('model/{id}/comment', function($id) {
    return 'Lista de comentarios del modelo ' . $id;
    Log::info('Verbo HTTP: GET');
    Log::info('Endpoint: model/{id}/comment');
    Log::info('Descripción: Lista de comentarios del modelo');
});

Route::post('model/{id}/comment', function($id) {
    return 'Creación de comentarios ' . $id;
    Log::info('Verbo HTTP: POST');
    Log::info('Endpoint: model/{id}/comment');
    Log::info('Descripción: Creación de comentarios');
});

// MENU Routes

Route::get('menu', function() {
    return 'Recuperar menús';
    Log::info('Verbo HTTP: GET');
    Log::info('Endpoint: menu');
    Log::info('Descripción: Recuperar menús');
});

Route::get('menu/{id}', function($id) {
    return 'Recuperar un menu ' . $id;
    Log::info('Verbo HTTP: GET');
    Log::info('Endpoint: menu/{id}');
    Log::info('Descripción: Recuperar un menu');
});

