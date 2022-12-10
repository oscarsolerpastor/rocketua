<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function loginUser() {
        Log::debug('POST /user/login "Login"');
        return 'Login';
    }
    public function createUser() {
        Log::debug('POST /user/register "Creación del usuario"');
        return 'Creación del usuario';
    }
    public function updateUser($id) {
        Log::warning('PUT /user/{id} "Actualización de usuario"');
        return 'Actualización del usuario ' . $id;
    }
    public function deleteUser($id) {
        Log::alert('DELETE /user/{id} "Baja de usuario"');
        return 'Baja de usuario ' . $id;
    }
    public function showFavorites($id) {
        Log::info('GET /user/{id}/favorite "Listado de favoritos"');
        return 'Listado de favoritos ' . $id;
    }
    public function addFavoriteProduct($id, $product) {
        Log::debug('POST /user/{id}/favorite/{product} "Añadir a favoritos"');
        return 'Añadir a favoritos ' . $id . " " . $product;
    }
    public function deleteFavoriteProduct($id, $product) {
        Log::alert('DELETE /user/{id}/favorite/{product} "Eliminar de favoritos"');
        return 'Eliminar de favoritos ' . $id . " " . $product;
    }
    public function showOrders($id) {
        Log::info('GET /user/{id}/orders "Listado de pedidos"');
        return 'Listado de pedidos ' . $id;
    }
    public function showComments($id) {
        Log::info('GET /user/{id}/comments "Listado de comentarios del usuario"');
        return 'Listado de comentarios del usuario ' . $id;
    }
}
