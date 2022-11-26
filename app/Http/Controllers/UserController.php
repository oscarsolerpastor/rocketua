<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginUser() {
        return 'Login';
    }
    public function createUser() {
        return 'Creación del usuario';
    }
    public function updateUser($id) {
        return 'Actualización del usuario ' . $id;
    }
    public function deleteUser($id) {
        return 'Baja de usuario ' . $id;
    }
    public function showFavorite($id) {
        return 'Listado de favoritos ' . $id;
    }
    public function showFavoriteProduct($id, $product) {
        return 'Listado de favoritos ' . $id;
    }
    public function deleteFavoriteProduct($id, $product) {
        return 'Eliminar de favoritos ' . $id;
    }
    public function showOrderList($id) {
        return 'Listado de pedidos ' . $id;
    }
    public function showUserComments($id) {
        return 'Listado de comentarios del usuario ' . $id;
    }
}
