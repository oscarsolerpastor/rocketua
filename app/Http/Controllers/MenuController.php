<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MenuController extends Controller
{
    public function showMenus() {
        Log::info('GET /menu "Recuperar menús"');
        return response()->json([
            'desc' => 'Recuperar menús',
        ]);
    }
    public function showMenu($id) {
        Log::info('GET /menu/{id} "Recuperar un menú"');
        return response()->json([
            'desc' => 'Recuperar un menú ' . $id,
        ]);
    }
}
