<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    public function createCheckout() {
        Log::debug('POST /checkout "Creación de pedido"');
        return 'Creación del pedido';
    }
}
