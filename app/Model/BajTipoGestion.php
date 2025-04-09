<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BajTipoGestion extends Model
{
    protected $table = 'baj_tipogestion';

    public $timestamps = false;

    const JUDICIAL = 1;
    const EXTRAJUDICIAL = 2;


    /**
     * Busca la info según la ID entregada
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'id';
    }
}
