<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FPostulantesCertEstado extends Model
{
    const ABIERTO_PENDIENTE         = 1;
    const PENDIENTE_FIRMA           = 2;
    const PENDIENTE_ENTREGA         = 3;
    const TERMINO_AUTOMATIZADO      = 4;
    const TERMINADO_ENTREGADO       = 5;
    const CIERRE_DUPLICADO          = 6;
    const SOLICITUD_TERMINADA       = 7;

    protected $table = 'fpostulantes_cert_estado';
    public $timestamps = false;
}
