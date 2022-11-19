<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

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

Route::post('cart', function () {
    Log::info('POST CART "Creación del carrito"');
    return 'Creación del carrito';
});

Route::get('cart/{id}', function($id) {
    Log::notice('GET CART "Recuperación del carrito"');
    return 'Recuperación del carrito ' . $id;
});

Route::post('cart/{id}/product', function($id) {
    Log::debug('POST CART "Añadir producto al carrito"');
    return 'Añadir producto al carrito ' . $id;
});

Route::put('cart/{id}/product', function($id) {
    Log::warning('PUT CART "Quitar producto del carrito"');
    return 'Quitar producto del carrito ' . $id;
});

Route::delete('cart/{id}/line/{id_line}', function($id, $id_line) {
    return 'Borrar producto del carrito ' . $id;
});

Route::post('cart/{id}/coupon', function($id) {
    return 'Añadir cupón ' . $id;
});

Route::delete('cart/{id}/coupon', function($id) {
    return 'Borrar cupón ' . $id;
});

// CHECKOUT Routes

Route::post('checkout', function() {
    return 'Creación del pedidio';
});

// USERS Routes

Route::post('user/login', function() {
    return 'Login';
});

Route::post('user/register', function() {
    return 'Creación del usuario';
});

Route::put('user/{id}', function($id) {
    return 'Actualización del usuario ' . $id;
});

Route::delete('user/{id}', function($id) {
    return 'Baja de usuario ' . $id;
});

Route::get('user/{id}/favorite', function($id) {
    return 'Listado de favoritos ' . $id;
});

Route::post('user/{id}/favorite/{product}', function($id, $product) {
    return 'Listado de favoritos ' . $id;
});

Route::delete('user/{id}/favorite/{product}', function($id, $product) {
    return 'Eliminar de favoritos ' . $id;
});

Route::get('user/{id}/orders', function($id) {
    return 'Listado de pedidos ' . $id;
});

Route::get('user/{id}/comments', function($id) {
    return 'Listado de comentarios del usuario ' . $id;
});

// NEWSLETTER Routes

Route::post('newsletter', function() {
    return 'Alta de la newsletter';
});

Route::delete('newsletter', function() {
    return 'Baja de la newsletter';
});

// CATEGORY Routes

Route::get('category/{id}', function($id) {
    return 'Recuperar categoría ' . $id;
});

// MODEL Routes

Route::get('model/{id}', function($id) {
    return 'Recuperar un modelos ' . $id;
});

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

