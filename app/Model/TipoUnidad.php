<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TipoUnidad extends Model
{
    protected $table = 'tipounidad';

    protected $primaryKey = 'id_tipounidad';

    public $timestamps = false;

    const DIRGEN = 1;
    const DIRREG = 2;
    const UOPERATIVA = 3;
    const MOVIL = 4;
    const CONVENIO = 5;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unidad()
    {
        return $this->hasOne(Unidad::class, 'id_unidad', 'id_unidad');
    }
}
