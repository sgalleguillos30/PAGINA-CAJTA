<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DependenciaUnidad extends Model
{
    protected $table = 'dependencia_unid';

    protected $primaryKey = 'id_depunid';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'dependencia_unid', 'id_unidad');
    }



}
