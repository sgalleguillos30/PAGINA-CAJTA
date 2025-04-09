<?php

namespace App\Http\Controllers\ValidaCertificados;

use App\Http\Controllers\Controller;
use App\Model\BajDocumento;
use Illuminate\Http\Request;

class ValidaBAJController extends Controller
{
    public function validacion( BajDocumento $baj, $uuid ) {
        return view('valida-documentos.baj.index', compact('baj', 'uuid'));
    }
}
