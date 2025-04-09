<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MateriaUnidad extends Model
{
    protected $table = 'materia_unidad';

    protected $primaryKey = 'id_matunid';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'id_unidad', 'id_unidad');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function listamaterias()
    {
        return $this->belongsTo(ListaMaterias::class, 'id_listamat', 'id_listamat');
    }
}
