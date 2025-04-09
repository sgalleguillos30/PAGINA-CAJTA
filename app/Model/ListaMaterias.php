<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ListaMaterias extends Model
{
    protected $table = 'lista_materias';

    protected $primaryKey = 'id_listamat';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materiaunidad()
    {
        return $this->hasOne(MateriaUnidad::class, 'id_listamat', 'id_listamat');
    }
}
