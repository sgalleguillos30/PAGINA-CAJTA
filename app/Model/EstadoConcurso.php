<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EstadoConcurso extends Model
{
    protected $table = 'estadoconcurso';

    protected $primaryKey = 'id_estadoconc';

    public $timestamps = false;

    const ABIERTO = 1;
    const DESIERTO = 2;
    const TERMINADO = 3;

    public function concurso()
    {
        return $this->hasMany(Concurso::class, 'id_estadoconc', 'id_estadoconc');
    }
}
