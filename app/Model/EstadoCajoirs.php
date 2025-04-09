<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EstadoCajoirs extends Model
{
    protected $table = 'estadocajoirs';

    protected $primaryKey = 'id_estadocajoirs';

    public $timestamps = false;

    const ABIERTO = 1;
    const TERMINADO = 2;


    /**
     * Relación TipoMensaje - Cajoirs
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cajoirs()
    {
        return $this->hasOne(Cajoirs::class, 'id_cajoirs', 'id_cajoirs');
    }
}
