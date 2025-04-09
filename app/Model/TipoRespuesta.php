<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TipoRespuesta extends Model
{
    protected $table = 'tiporespuesta';

    protected $primaryKey = 'id_tiporespuesta';

    public $timestamps = false;

    const CORREO= 1;
    const CARTA = 2;
    const INFORMAR = 3;


    /**
     * Relación TipoRespuesta - Cajoirs
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cajoirs()
    {
        return $this->hasOne(Cajoirs::class, 'id_cajoirs', 'id_cajoirs');
    }
}
