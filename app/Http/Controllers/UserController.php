<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function loginUser() {
        Log::debug('POST /user/login "Login"');
        return response()->json([
            'desc' => 'Login',
        ]);
    }
    public function createUser() {
        Log::debug('POST /user/register "Creación del usuario"');
        return response()->json([
            'desc' => 'Creación del usuario',
        ]);
    }
    public function updateUser($id) {
        Log::warning('PUT /user/{id} "Actualización de usuario"');
        return 'Actualización del usuario ' . $id;
        return response()->json([
            'desc' => 'Actualización del usuario ' . $id,
        ]);
    }
    public function deleteUser($id) {
        Log::alert('DELETE /user/{id} "Baja de usuario"');
        return response()->json([
            'desc' => 'Baja de usuario ' . $id,
        ]);
    }
    public function showFavorites($id) {
        Log::info('GET /user/{id}/favorite "Listado de favoritos"');
        return response()->json([
            'desc' => 'Listado de favoritos ' . $id,
        ]);
    }
    public function addFavoriteProduct($id, $product) {
        Log::debug('POST /user/{id}/favorite/{product} "Añadir a favoritos"');
        return response()->json([
            'desc' => 'Añadir a favoritos ' . $id . ' ' . $product,
        ]);
    }
    public function deleteFavoriteProduct($id, $product) {
        Log::alert('DELETE /user/{id}/favorite/{product} "Eliminar de favoritos"');
        return response()->json([
            'desc' => 'Eliminar de favoritos ' . $id . ' ' . $product,
        ]);
    }
    public function showOrders($id) {
        Log::info('GET /user/{id}/orders "Listado de pedidos"');
        return response()->json([
            'desc' => 'Listado de pedidos ' . $id,
        ]);
    }
    public function showComments($id) {
        Log::info('GET /user/{id}/comments "Listado de comentarios del usuario"');
        return response()->json([
            'desc' => 'Listado de comentarios del usuario ' . $id,
        ]);
    }
}
