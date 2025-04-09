<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TipoContrato extends Model
{
    protected $table = 'tipocontrato';

    protected $primaryKey = 'id_tipocontrato';

    public $timestamps = false;

    const PLAZOFIJO = 1;
    const INDEFINIDO = 2;
    const HONORARIOS = 3;
    const TRABAJO = 4;

    public function concurso()
    {
        return $this->hasOne(Concurso::class, 'id_concurso', 'id_concurso');
    }
}
