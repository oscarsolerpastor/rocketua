<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function showCategory($id) {
        Log::info('GET /category/{id} "Recuperar categoría"');
        return 'Recuperar categoría ' . $id;
    }
}
