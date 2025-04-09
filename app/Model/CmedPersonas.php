<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CmedPersonas extends Model
{
    use SoftDeletes;

    protected $table = 'cmed_personas';

    protected $primaryKey = 'id_cmed_persona';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id_cmed_tipoparte',
        'id_cmed_solicitud',
        'id_comuna',
        'id_sexo',
        'id_nacionalidad',
        'id_estadocivil',
        'rut_persona',
        'nombre_persona',
        'apellido1_persona',
        'apellido2_persona',
        'direccion_persona',
        'fnacimiento_persona',
        'correo_persona',
        'telefono1_persona',
        'telefono2_persona',
    ];


    /**
     * Busca la info según la ID entregada
     * @return string
     */
    public function getRouteKeyName() {
        return 'id_cmed_persona';
    }


    /**
     * @return string
     */
    public function getNombre()
    {
        return "{$this->nombre_persona} {$this->apellido1_persona} {$this->apellido2_persona}";
    }

    /**
     * Relación CmedPeronas - TipoMensaje
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function tipoparte()
    {
        return $this->belongsTo(CmedTipoParte::class,  'id_cmed_tipoparte', 'id_cmed_tipoparte');
    }

    /**
     * Relación CmedPeronas - Solicitud
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function solicitud()
    {
        return $this->belongsTo(CmedSolicitud::class,  'id_cmed_solicitud', 'id_cmed_solicitud');
    }

    /**
     * Relación CmedPeronas - Comuna
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function comuna()
    {
        return $this->belongsTo(Comuna::class,  'id_comuna', 'id_comuna');
    }

    /**
     * Relación CmedPeronas - Comuna
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function sexo()
    {
        return $this->belongsTo(Sexo::class,  'id_sexo', 'id_sexo');
    }

    /**
     * Relación CmedPeronas - Nacionalidad
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function nacionalidad()
    {
        return $this->belongsTo(Nacionalidad::class,  'id_nacionalidad', 'id_nacionalidad');
    }

    /**
     * Relación CmedPeronas - EstadoCivil
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function estadocivil()
    {
        return $this->belongsTo(EstadoCivil::class,  'id_estadocivil', 'id_estadocivil');
    }
}
