<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CmedSolicitud extends Model
{
    use SoftDeletes;

    protected $table = 'cmed_solicitud';

    protected $primaryKey = 'id_cmed_solicitud';

    protected $dates = ['deleted_at', 'cmed_fecha_contacto'];

    protected $fillable = [
        'id_cmed_estado',
        'id_cmed_materia',
        'rut_usuario',
        'cmed_msg_solicitud',
        'cmed_fecha_contacto',
        'cmed_msg_contacto',
    ];


    /**
     * Busca la info según la ID entregada
     * @return string
     */
    public function getRouteKeyName() {
        return 'id_cmed_solicitud';
    }




    /**
     * Relación CmedSolicitud - TipoUsuario
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class,  'rut_usuario', 'rut_usuario');
    }


    /**
     * Relación CmedSolicitud - Estado
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function estado()
    {
        return $this->belongsTo(CmedEstado::class,  'id_cmed_estado', 'id_cmed_estado');
    }


    /**
     * Relación CmedSolicitud - Personas
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personas()
    {
        return $this->hasMany(CmedPersonas::class,  'id_cmed_persona', 'id_cmed_persona');
    }


    /**
     * Relación CmedSolicitud - MateriaAtencion
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materia()
    {
        return $this->hasOne(CmedMateriaAtencion::class, 'id_cmed_materia', 'id_cmed_materia');
    }


}
