<?php

namespace App\Http\Controllers\Intranet;

use App\Http\Controllers\Controller;
use App\Model\Noticia;
use Illuminate\Http\Request;

class PrevisualizacionNoticiaController extends Controller
{
    public function show(Noticia $noticia)
    {
        return view('noticias.show', compact('noticia'));
    }
}
