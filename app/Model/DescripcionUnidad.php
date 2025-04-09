<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DescripcionUnidad extends Model
{
    protected $table = 'descripcion_unid';

    protected $primaryKey = 'id_descripunid';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unidad()
    {
        return $this->hasOne(Unidad::class, 'id_unidad', 'id_unidad');
    }
}
