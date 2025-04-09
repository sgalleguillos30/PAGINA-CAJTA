<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ConsultaCPP extends Model
{
    protected $table = 'consulta_cpp';

    protected $primaryKey = 'id_cpp';

    protected $fillable = [
        'rut_cpp',
        'nombre_cpp',
        'apellido1_cpp',
        'apellido2_cpp',
        'direccion_cpp',
        'correo_cpp',
        'telefono_cpp',
        'mensaje_cpp',
    ];


    /**
     * Defines la ID por la que busca la información de una noticia
     * @return string [string]
     */
    public function getRouteKeyName() {
        return 'id_cpp';
    }


    public function getNombre()
    {
        return "{$this->nombre_cpp} {$this->apellido1_cpp} {$this->apellido2_cpp}";
    }
}
