<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function createCart() {
        return "Creación del carrito";
    }
    public function showCart($id) {
        return 'Recuperación del carrito';
    }
    public function addCart($id) {
        Log::debug('POST CART "Añadir producto al carrito"');
        return 'Añadir producto al carrito ' . $id;
    }
    public function editCart($id) {
        Log::warning('PUT CART "Quitar producto del carrito"');
        return 'Quitar producto del carrito ' . $id;
    }
    public function deleteCart($id, $id_line) {
        return 'Borrar producto del carrito ' . $id;
    }
    public function addCoupon($id) {
        return 'Añadir cupón ' . $id;
    }
    public function deleteCoupon($id) {
        return 'Borrar cupón ' . $id;
    }
}
