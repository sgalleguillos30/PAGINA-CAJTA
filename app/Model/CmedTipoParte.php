<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CmedTipoParte extends Model
{
    protected $table = 'cmed_tipo_parte';

    protected $primaryKey = 'id_cmed_tipoparte';

    const SOLICITANTE = 1;
    const SOLICITADO  = 2;
}
