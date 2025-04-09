<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CmedMateriaAtencion extends Model
{
    use SoftDeletes;

    protected $table = 'cmed_materia_atencion';

    protected $primaryKey = 'id_cmed_materia';

    const CIVIL         = 1;
    const COMUNITARIA   = 2;
    const FAMILIA       = 3;
    const LABORAL       = 4;
    const PENAL         = 5;


    /**
     * Busca la info según la ID entregada
     * @return string
     */
    public function getRouteKeyName() {
        return 'id_cmed_materia';
    }
}
