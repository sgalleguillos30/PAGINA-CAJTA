<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CargoVacante extends Model
{
    protected $table = 'cargo_vacante';

    protected $primaryKey = 'id_cargovacante';

    /**
     * Relación cargo vacante -> estado
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado', 'id_estado')->select('id_estado', 'estado');
    }


    public function concurso()
    {
        return $this->belongsTo(Concurso::class, 'id_concurso', 'id_concurso');
    }
}
