<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelController extends Controller
{
    function view($id) {
        return 'Recuperar un modelos ' . $id;
    }
}
