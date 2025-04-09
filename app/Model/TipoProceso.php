<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TipoProceso extends Model
{
    protected $table = 'tipoproceso';

    protected $primaryKey = 'id_tipoproceso';

    public $timestamps = false;

    const PUBLICO = 1;
    const INTERNO = 2;

    public function concurso()
    {
        return $this->hasOne(Concurso::class, 'id_concurso', 'id_concurso');
    }
}
