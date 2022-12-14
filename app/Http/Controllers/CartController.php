<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function createCart()
    {
        Log::debug('POST /cart "Creación del carrito"');
        return response()->json([
            'desc' => 'Creación del carrito',
        ]);
    }
    public function showCart($id) {
        Log::info('GET /cart/{id} "Recuperación del carrito"');
        return response()->json([
            'desc' => 'Creación del carrito ' . $id,
        ]);
    }
    public function addCart($id) {
        Log::debug('POST /cart/{id}/product "Añadir producto al carrito"');
        return response()->json([
            'desc' => 'Añadir producto al carrito ' . $id,
        ]);
    }
    public function editCart($id) {
        Log::warning('PUT /cart/{id}/product "Quitar producto del carrito"');
        return response()->json([
            'desc' => 'Quitar producto del carrito ' . $id,
        ]);
    }
    public function deleteCart($id, $id_line) {
        Log::alert('DELETE /cart/{id}/line/{id_line} "Borrar producto del carrito"');
        return response()->json([
            'desc' => 'Borrar producto ' . $id . ' del carrito ' . $id_line,
        ]);
    }
    public function addCoupon($id) {
        Log::debug('POST /cart/{id}/coupon "Añadir cupón"');
        return response()->json([
            'desc' => 'Añadir cupón ' . $id,
        ]);
    }
    public function deleteCoupon($id) {
        Log::alert('DELETE /cart/{id}/coupon "Borrar cupón"');
        return response()->json([
            'desc' => 'Borrar cupón ' . $id,
        ]);
    }
}
