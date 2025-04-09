<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TipoMensaje extends Model
{
    protected $table = 'tipomensaje';

    protected $primaryKey = 'id_tipomensaje';

    public $timestamps = false;

    const CONSULTA = 1;
    const FELICITACIONES = 2;
    const RECLAMO = 3;
    const SUGERENCIA = 4;




    /**
     * Relación TipoMensaje - Cajoirs
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cajoirs()
    {
        return $this->hasOne(Cajoirs::class, 'id_cajoirs', 'id_cajoirs');
    }
}
