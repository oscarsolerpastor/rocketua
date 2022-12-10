<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ModelController extends Controller
{
    function showModel($id) {
        Log::info('GET /model/{id} "Recuperar un modelos"');
        return 'Recuperar un modelos ' . $id;
    }
    function showModelComments($id) {
        Log::info('GET /model/{id}/comment "Listado de comentarios del modelo"');
        return 'Listado de comentarios del modelo ' . $id;
    }
    function createModelComment($id) {
        Log::debug('POST /model/{id}/comment "Creación de comentarios"');
        return 'Creación de comentarios ' . $id;
    }
}
