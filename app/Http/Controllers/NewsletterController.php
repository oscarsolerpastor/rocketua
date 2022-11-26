<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subcsribe() {
        return 'Alta de la newsletter';
    }
    public function delete() {
        return 'Baja de la newsletter';
    }
}
