<?php

namespace App\Http\Controllers;

use App\Model\Concurso;
use App\Model\EstadoConcurso;
use Illuminate\Http\Request;

class ConcursosController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $econc = EstadoConcurso::all();
        return view('concursos.index2', compact('econc'));
    }



    /**
     * @param Concurso $concurso
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Concurso $concurso)
    {
        return view('concursos.show', compact('concurso'));
    }
}
