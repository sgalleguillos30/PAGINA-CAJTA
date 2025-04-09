<?php

namespace App\Http\Controllers\Mediacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mediacion\SolicitaCmedRequest;
use App\Http\Requests\Mediacion\SolicitudCmedRequest;
use App\Mail\Mediacion\SendMediacionNotification;
use App\Mail\Mediacion\SendUserCmedNotification;
use App\Model\CmedEstado;
use App\Model\CmedPersonas;
use App\Model\CmedSolicitud;
use App\Model\CmedTipoParte;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CmedController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('mediacion.index');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function solicitud()
    {
        return view('mediacion.solicitud');
    }


    public function registro(SolicitudCmedRequest $request)
    {

        $solicitud = CmedSolicitud::create([
            'id_cmed_estado'        => CmedEstado::PENDIENTE,
            'cmed_msg_solicitud'    => NULL,
            'id_cmed_materia'       => $request->materia_p3
        ]);

        $solicitante = $this->prepareData($request, CmedTipoParte::SOLICITANTE, $solicitud);
        $solicitado = $this->prepareData($request, CmedTipoParte::SOLICITADO, $solicitud);

        $solicitante = CmedPersonas::create($solicitante);
        $solicitado = CmedPersonas::create($solicitado);

        if ( $solicitud and $solicitante and $solicitado ) {

            $correoSolicitante = \Mail::send(new SendMediacionNotification($solicitud, $solicitante, $solicitado));
            $correoSolicitado = \Mail::send(new SendUserCmedNotification($solicitud, $solicitante, $solicitado));

//            dd($correoSolicitante, $correoSolicitado);

            session()->flash('message', ['Su solicitud ha sido derivada a nuestro Centro de Mediación. Una copia de su mensaje fue enviado al correo que ha proporcionado.']);
            return redirect()->route('mediacion.solicitud');
        }


        session()->flash('message', ['Se produjo un error ingresando su solicitud.']);
        return redirect()->route('mediacion.solicitud');
    }


    /**
     * @param $request      = Extraido del formulario
     * @param $tipo         = Solicitante/Solicitado
     * @param $id           = ID Solicitud
     *
     * @return array
     */
    protected function prepareData($request, $tipo, $id)
    {
        return [
            'id_cmed_tipoparte'     => (int) $tipo,
            'id_cmed_solicitud'     => $id->id_cmed_solicitud,
            'id_comuna'             => ( empty( $request->{'comuna_p'.$tipo} ) ? NULL : $request->{'comuna_p'.$tipo} ),
            'id_sexo'               => ( empty( $request->{'sexo_p'.$tipo} ) ? NULL : $request->{'sexo_p'.$tipo} ),
            'id_nacionalidad'       => ( empty( $request->{'nacionalidad_p'.$tipo} ) ? NULL : $request->{'nacionalidad_p'.$tipo} ),
            'id_estadocivil'        => ( empty( $request->{'ecivil_p'.$tipo} ) ? NULL : $request->{'ecivil_p'.$tipo} ),
            'rut_persona'           => ( empty( $request->{'txtRut_p'.$tipo} ) ? NULL : $request->{'txtRut_p'.$tipo} ),
            'nombre_persona'        => $request->{'txtNombre_p'.$tipo},
            'apellido1_persona'     => $request->{'txtApellido1_p'.$tipo},
            'apellido2_persona'     => $request->{'txtApellido2_p'.$tipo},
            'fnacimiento_persona'   => ( empty( $request->{'txtFnac_p'.$tipo} ) ? NULL : Carbon::parse($request->{'txtFnac_p'.$tipo})->format('Y-m-d') ),
            'correo_persona'        => ( empty( $request->{'txtMail_p'.$tipo} ) ? NULL : $request->{'txtMail_p'.$tipo} ),
            'direccion_persona'     => ( empty( $request->{'txtDireccion_p'.$tipo} ) ? NULL : $request->{'txtDireccion_p'.$tipo} ),
            'telefono1_persona'     => $request->{'txtFono1_p'.$tipo},
            'telefono2_persona'     =>  ( empty( $request->{'txtFono2_p'.$tipo} ) ? NULL : $request->{'txtFono2_p'.$tipo} ),
        ];
    }
}
