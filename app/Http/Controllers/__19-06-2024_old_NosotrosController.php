<?php

namespace App\Http\Controllers;

use App\Model\Usuario;
use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function presentacion()
    {
        return view('nosotros.presentacion');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function servmaterias()
    {
        return view('nosotros.servicios.materias');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function servprestaciones()
    {
        return view('nosotros.servicios.prestaciones');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function servusuarios()
    {
        return view('nosotros.servicios.usuarios');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postulantes()
    {
        return view('nosotros.postulantes.informacion');
    }


    public function postulantes_solicitud()
    {
        return view('nosotros.postulantes.solicitud');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function consejo()
    {
        return view('nosotros.consejo');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function testimonios()
    {
        return view('nosotros.testimonios');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function organigrama()
    {
        return view('nosotros.organigrama');
    }


    /**
     * @param Usuario $usuario
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function autoridades(Usuario $usuario)
    {
        return view('nosotros.autoridades', compact('usuario'));
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function resumen()
    {
        return view('nosotros.resumen');
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function resumen_consolidado()
    {
        return view('nosotros.resumen-consolidado');
    }
}
