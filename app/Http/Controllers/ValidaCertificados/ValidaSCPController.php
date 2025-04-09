<?php

namespace App\Http\Controllers\ValidaCertificados;

use App\Http\Controllers\Controller;
use App\Model\FPostulantesCertSolicitud;
use Illuminate\Http\Request;

class ValidaSCPController extends Controller
{
    public function index() {}

    public function validacion(FPostulantesCertSolicitud $solicitud, $uuid) {
        return view('valida-documentos.scp.index', compact('solicitud', 'uuid'));
    }
}
