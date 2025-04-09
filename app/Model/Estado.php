<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';

    protected $primaryKey = 'id_estado';

    public $timestamps = false;

    const ACTIVO = 1;
    const INACTIVO = 2;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne(Usuario::class, 'id_estado', 'id_estado');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unidad()
    {
        return $this->hasOne(Unidad::class, 'id_estado', 'id_estado');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cargovacante()
    {
        return $this->hasOne(CargoVacante::class, 'id_estado', 'id_estado');
    }
}
