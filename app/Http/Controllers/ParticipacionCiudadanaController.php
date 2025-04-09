<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartCiudadana\ConsultaCPPRequest;
use App\Mail\PartCiudadana\ConsultaCPPNotification;
use App\Model\ConsultaCPP;
use Illuminate\Http\Request;

class ParticipacionCiudadanaController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('pciudadana.index');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cosoc()
    {
        return view('pciudadana.cosoc');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postulacionCosoc()
    {
        return view('pciudadana.postulacion-cosoc');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cpp()
    {
        return view('pciudadana.cuenta-publica');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function consciudadana()
    {
        return view('pciudadana.consciudadana');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function plazajusticia()
    {
        return view('pciudadana.plazajusticia');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function moviles()
    {
        return view('pciudadana.moviles');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function inforelevante()
    {
        return view('pciudadana.inforelevante');
    }


    /**
     * @param ConsultaCPPRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postConsulta(ConsultaCPPRequest $request)
    {
        $agregar = [
            'rut_cpp' => $request->txtRut,
            'nombre_cpp' => $request->txtNombre,
            'apellido1_cpp' => $request->txtApellido1,
            'apellido2_cpp' => $request->txtApellido2,
            'direccion_cpp' => $request->txtDireccion,
            'correo_cpp' => $request->txtMail,
            'telefono_cpp' => ( empty( $request->txtFono ) ? NULL : $request->txtFono ),
            'mensaje_cpp' => $request->txtMensaje,
        ];

        $insertar = ConsultaCPP::create($agregar);

        \Mail::send(new ConsultaCPPNotification($insertar));

        if ( $insertar )
        {
            session()->flash('message', ['Su mensaje se ha ingresado correctamente. Agradecemos tu participación.']);
            return redirect()->route('pciudadana.cpp');
        }
    }
}
