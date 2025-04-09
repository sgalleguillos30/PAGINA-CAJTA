<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UnidadClasificacion extends Model
{
    protected $table = 'unidad_clasificacion';

    protected $primaryKey = 'id_unidadclasificacion';

    const DIRGEN_DREG   = 1;
    const CSJ           = 2;
    const MOVIL         = 3;
    const ODL           = 4;
    const CAVI          = 5;
    const CMED          = 6;
    const PMA           = 7;
    const SENADIS       = 8;
    const CONVENIO      = 9;



    public function unidad()
    {
        return $this->hasMany(Unidad::class, 'id_unidadclasificacion', 'id_unidadclasificacion');
    }
}
