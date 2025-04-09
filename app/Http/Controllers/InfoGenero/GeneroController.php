<?php

namespace App\Http\Controllers\InfoGenero;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function index()
    {
        return view('genero.index');
    }

    public function denuncia()
    {
        return view('genero.denuncia');
    }
}
