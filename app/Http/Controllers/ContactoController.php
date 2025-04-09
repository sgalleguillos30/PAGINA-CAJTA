<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactoRequest;
use App\Mail\CAJOIRS\SendDRegNotification;
use App\Mail\CAJOIRS\UserSendNotification;
use App\Model\AsigCajoirs;
use App\Model\Cajoirs;
use App\Model\EstadoCajoirs;
use App\Model\TipoUnidad;
use App\Model\Unidad;
use App\Model\Ciudad;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('contacto.index');
    }


    /**
     * @param ContactoRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contacto(ContactoRequest $request)
    {
        $agregar = [
            'id_tipomensaje' => $request->tipo_mensaje,
            'id_estadocajoirs' => EstadoCajoirs::ABIERTO,
            'id_tiporespuesta' => $request->tipo_respuesta,
            'id_sexo' => $request->sexo,
            'id_unidad' => ( empty( $request->unidad ) ? NULL : $request->unidad ),
            'id_ciudad' => $request->ciudad,
            'rut_usuario' => '0-0',
            'rut_cajoirs' => $request->txtRut,
            'nombre_cajoirs' => $request->txtNombre,
            'apellido1_cajoirs' => $request->txtApellido1,
            'apellido2_cajoirs' => $request->txtApellido2,
            'direccion_cajoirs' => $request->txtDireccion,
            'mail_cajoirs' => $request->txtMail,
            'fono_cajoirs' => ( empty( $request->txtFono ) ? NULL : $request->txtFono ),
            'consulta_cajoirs' => $request->txtMensaje,
            'creado_cajoirs' => Carbon::now('America/Santiago'),
            'respuesta_cajoirs' => NULL,
            'fecharespuesta_cajoirs' => NULL,
        ];
        $cajoirs = Cajoirs::create($agregar);

        
        $region = Ciudad::where('id_ciudad', $request->ciudad)->first()->id_region; // de la ciudad se obtiene la región

        $dirreg = Unidad::where('id_region', $region)->where('id_tipounidad', TipoUnidad::DIRREG)->firstOrFail()->abojefe_unidad; 

        $asigcajoirs = [
            'id_cajoirs' => $cajoirs->id_cajoirs,
            'rut_usuario' => $dirreg,
            'fecha_asigcajoirs' => Carbon::now('America/Santiago'),
        ];
        $asignacion = AsigCajoirs::create($asigcajoirs);

        /**
         * Envío de correo al usuario
         */
        \Mail::send(new UserSendNotification($cajoirs));

        /**
         * Envío de correo a la Dirección Regional
         */
        \Mail::send(new SendDRegNotification($cajoirs));

        if ( $cajoirs and $asignacion )
        {
            session()->flash('message', ['Su mensaje ha sido ingresado correctamente. Una copia de su mensaje fue enviado al correo que ha proporcionado.']);
            return redirect()->route('contacto.ficha', ['cajoirs' => $cajoirs->id_cajoirs]);
        }
    }


    /**
     * @param Cajoirs $cajoirs
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ficha(Cajoirs $cajoirs)
    {
        return view('contacto.ficha-contacto', compact('cajoirs'));
    }
}
