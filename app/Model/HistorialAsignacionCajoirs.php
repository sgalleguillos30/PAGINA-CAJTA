<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HistorialAsignacionCajoirs extends Model
{
    protected $table = 'historial_asignacion_cajoirs';

    protected $primaryKey = 'id_histasig';

    protected $fillable = [
        'id_cajoirs',
        'rut_usuario',
        'rutasignacion_anterior',
        'rutasignacion_actual'
    ];


    /**
     * Relación HistorialAsignacionCajoirs - Cajoirs
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cajoirs() {
        return $this->hasOne(Cajoirs::class, 'id_cajoirs', 'id_cajoirs');
    }

    /**
     * Relación HistorialAsignacionCajoirs - Usuario
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'rut_usuario', 'rut_usuario');
    }


    /**
     * Relación HistorialAsignacionCajoirs - Usuario
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuarioanterior()
    {
        return $this->belongsTo(Usuario::class, 'rutasignacion_anterior', 'rut_usuario');
    }


    /**
     * Relación HistorialAsignacionCajoirs - Usuario
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuarioactual()
    {
        return $this->belongsTo(Usuario::class, 'rutasignacion_actual', 'rut_usuario');
    }
}
