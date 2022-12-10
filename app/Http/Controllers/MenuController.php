<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MenuController extends Controller
{
    public function showMenus() {
        Log::info('GET /menu "Recuperar menús"');
        return 'Recuperar menús';
    }
    public function showMenu() {
        Log::info('GET /menu/{id} "Recuperar un menú"');
        return 'Recuperar un menú';
    }
}
