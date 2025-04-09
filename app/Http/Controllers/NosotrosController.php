<?php

namespace App\Http\Controllers;

use App\Http\Requests\Nosotros\Postulantes\SCPRequest;
use App\Mail\Nosotros\SCP\SendDGSolicitudNotification;
use App\Mail\Nosotros\SCP\SendSCPSolicitudNotification;
use App\Model\FPostulantesCertEstado;
use App\Model\FPostulantesCertFolio;
use App\Model\FPostulantesCertSolicitante;
use App\Model\FPostulantesCertSolicitud;
use App\Model\Usuario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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


    public function postulantes_post_solicitud(SCPRequest $request)
    {
        /** Creación de folio */
        $folio = $this->getOrCreateFolio();

        $datos_solicitante = [
            'id_sexo'               => $request->sexo,
            'rut_solicitante'       => $request->txtRut,
            'nombre_solicitante'    => $request->txtNombre,
            'apellido1_solicitante' => $request->txtApellido1,
            'apellido2_solicitante' => !empty($request->txtApellido2) ? $request->txtApellido2 : null,
            'correo_solicitante'    => $request->txtMail,
            'fono_solicitante'      => !empty($request->txtFono) ? $request->txtFono : null,
        ];

        $datos_solicitud = [
            'fpostulantes_cert_estado_id'           => FPostulantesCertEstado::ABIERTO_PENDIENTE,
            'fpostulantes_cert_unidad_externa_id'   => !empty($request->unidad_externa) ? (int) $request->unidad_externa : null,
            'id_unidad'                             => !empty($request->unidad) ? (int) $request->unidad : null,
            'folio_documento'                       => "{$folio->nro_folio}-{$folio->anho_folio}",
            'datos_solicitante'                     => json_encode($datos_solicitante),
            'fecha_estimada_solicitud'              => $request->txtFechaEstimada,
            'creado_por_postulante'                 => true,
        ];


        $data_solicitante = $this->getSolicitanteData( $request->txtRut );

        /*
         * VALIDAMOS SI TENEMOS DATOS ANTIGUOS DEL SOLICITANTE, Y DE EXISTIR SE ACTUALIZA
         * EN CASO CONTRARIO, SE CREA UN NUEVO REGISTRO.
         * */
        if ( empty( $data_solicitante ) ) {
            $info = FPostulantesCertSolicitante::create($datos_solicitante);
            $id_solicitud = $info->id;
        } else {
            $data_solicitante->update( $datos_solicitante );
            $id_solicitud = $data_solicitante->id;
        }

        if ( $id_solicitud ) {
            $dato = ['fpostulantes_cert_solicitante_id' => $id_solicitud];
            $datos_solicitud = array_merge($datos_solicitud, $dato);
        }


        $insert = FPostulantesCertSolicitud::create($datos_solicitud);
        $update_folio = $folio->fill(['nro_folio' => ($folio->nro_folio + 1)])->save();


        if ( $insert and $update_folio ) {

            \Mail::send( new SendSCPSolicitudNotification( $insert, $datos_solicitante) );
            \Mail::send( new SendDGSolicitudNotification( $insert, $datos_solicitante) );


            session()->flash('message', ['Su solicitud se ha enviado correctamente. Una copia de su solicitud fue enviado al correo que ha proporcionado.']);
            return redirect()->route('nosotros.postulantes.solicitud');
        }


        return response()->noContent();
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



    private function getOrCreateFolio() {
        $folio = FPostulantesCertFolio::where('anho_folio', Carbon::now()->year )->first();

        return empty( $folio ) ? $this->createFolio() : $folio;
    }

    private function createFolio() {
        $nuevoFolio = [
            'nro_folio' => 1,
            'anho_folio' => Carbon::now()->year,
        ];

        return FPostulantesCertFolio::create($nuevoFolio);
    }

    protected function getSolicitanteData( $rut_solicitante ) {
        return FPostulantesCertSolicitante::where('rut_solicitante', $rut_solicitante )->first();
    }
}
