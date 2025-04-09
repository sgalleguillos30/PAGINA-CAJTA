<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CmedEstado extends Model
{
    protected $table = 'cmed_estado';

    protected $primaryKey = 'id_cmed_estado';

    const PENDIENTE     = 1;
    const FUERA_PLAZO   = 2;
    const CONTESTADO    = 3;
    const CANCELADO     = 4;
}
