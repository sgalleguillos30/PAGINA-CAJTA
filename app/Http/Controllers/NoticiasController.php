<?php

namespace App\Http\Controllers;

use App\Model\EstadoNoticia;
use App\Model\Noticia;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $noticias = Noticia::where('id_estadonot', EstadoNoticia::PUBLICADO)
                            ->orderBy('fecha_noticia', 'desc')
                            ->latest()
                            ->paginate(6);

        return view('noticias.index', compact('noticias'));
    }


    /**
     * @param Noticia $noticia
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Noticia $noticia)
    {

        /**
         * CONTADOR DE VISITAS
         */
        if ( !session()->has('noticias') )
        {
            $listado = "{$noticia->id_noticia}";
            session()->put('noticias', $listado);

            $contador = ($noticia->visitas_noticia + 1); // Se agrega a uno el contador
            $actualizar = $noticia->fill(['visitas_noticia' => $contador])->save();
        } else {
            // obtengo los datos de la sesión
            $lista = explode("_", session()->get('noticias'));

            /**
             * Reviso que la id de la noticia se encuentre o no en el array
             * Si no esta, se agrega el contador de visitas y ademas se agrega
             * en la sesion la id, en caso contrario, se continua con la carga
             * normal de la página
             */
            $valor = in_array((int) $noticia->id_noticia, $lista) ? true : false;

            if ( $valor === false ) {
                $contador = ($noticia->visitas_noticia + 1); // Se agrega a uno el contador
                $actualizar = $noticia->fill(['visitas_noticia' => $contador])->save();

                $lista = session()->get('noticias') . "_{$noticia->id_noticia}";
                session()->forget('noticias');
                session()->put('noticias', $lista);
            }
        }
        return view('noticias.show', compact('noticia'));
    }
}
