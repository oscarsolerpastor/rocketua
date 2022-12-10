<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NewsletterController extends Controller
{
    public function subscribeNewsletter() {
        Log::debug('POST /newsletter "Añadir a newsletter"');
        return response()->json([
            'desc' => 'Añadir a newsletter',
        ]);
    }
    public function unsubscribeNewsletter() {
        Log::alert('DELETE /newsletter "Baja de la newsletter"');
        return response()->json([
            'desc' => 'Baja de la newsletter',
        ]);
    }
}
