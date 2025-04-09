<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AsigCajoirs extends Model
{
    protected $table = 'asigcajoirs';

    protected $primaryKey = 'id_asigcajoirs';

    protected $fillable = [
        'id_cajoirs',
        'rut_usuario',              // RUT DEL DIRECTOR REGIONAL ASIGNADO
        'fecha_asigcajoirs',        // FECHA QUE FUE CREADA LA ASIGNACIÓN
    ];



    /**
     * Relación AsigCajoirs - Cajoirs
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function cajoirs()
    {
        return $this->belongsTo(Cajoirs::class,  'id_cajoirs', 'id_cajoirs');
    }


    /**
     * Relación AsigCajoirs - Usuario
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class,  'rut_usuario', 'rut_usuario');
    }
}
