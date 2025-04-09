<?php

namespace App\Http\Controllers;

use App\Model\EstadoNoticia;
use App\Model\Noticia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }


    public function buscar(Request $request)
    {
        $noticias = Noticia::where('id_estadonot', EstadoNoticia::PUBLICADO)
                            ->where('titulo_noticia', 'LIKE', '%' . $request->input('query') .'%')
                            ->orWhere('contenido_noticia', 'LIKE', '%' . $request->input('query') .'%')
                            ->orderBy('fecha_noticia', 'desc')
                            ->latest()
                            ->paginate(10)
                            ->setPath('');

        $pagination = $noticias->appends([ 'query' => $request->input('query') ]);


        return view('buscar')->withNoticias($noticias)->withQuery($request->input('query'));
    }
}
