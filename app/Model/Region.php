<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'region';

    protected $primaryKey = 'id_region';

    public $timestamps = false;


    /**
     * Retorna solo el nombre de la región
     * @return string
     */
    public function getNombreRegion()
    {
        return trim(explode("de", $this->region)[1]);
    }


    /**
     * Retorna solo la primera palabra de la región
     * @return string
     */
    public function getNombreInicial()
    {
        return trim(explode(" ", $this->region)[2]);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unidad()
    {
        return $this->hasMany(Unidad::class, 'id_region', 'id_region');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cobertura()
    {
        return $this->hasOne(Cobertura::class, 'id_cobertura', 'id_cobertura');
    }


    public function ciudad()
    {
        return $this->hasMany(Ciudad::class, 'id_ciudad', 'id_ciudad');
    }
}
