<?php

namespace App\Http\Controllers;

use App\Model\Region;
use App\Model\Unidad;
use App\Model\UnidadClasificacion;
use Illuminate\Http\Request;

class UnidadController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $listaregion = \App\Model\Region::orderBy('numero_reg')->get();
        $unidadConvenio = \App\Model\Unidad::getUnidadConvenio();

        return view('unidad.index', compact('listaregion', 'unidadConvenio'));
    }


    /**
     * @param Unidad $unidad
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Unidad $unidad)
    {
        return view('unidad.show', compact('unidad'));
    }


    public function lista()
    {
        $clasificacion = UnidadClasificacion::orderBy('id_unidadclasificacion')->get();


        $listado = Unidad::where('id_unidadclasificacion', '!=', NULL)
                        ->join('region', 'unidad.id_region', '=', 'region.id_region')
                        ->join('ciudad', 'unidad.id_ciudad', '=', 'ciudad.id_ciudad')
                        ->orderBy('unidad.id_tipounidad', 'ASC')
                        ->orderBy('unidad.id_unidadclasificacion', 'ASC')
                        ->orderBy('region.numero_reg', 'ASC')
                        ->orderBy('ciudad.ciudad', 'ASC')
                        ->orderBy('unidad.nombre_unidad', 'ASC')
                        ->with('telefonounid', 'clasificacion', 'ciudad', 'region')
                        ->get();

        return view('unidad.listado', compact(['listado', 'clasificacion']));
    }
}
