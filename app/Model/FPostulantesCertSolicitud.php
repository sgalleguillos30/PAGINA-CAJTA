<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class FPostulantesCertSolicitud extends Model
{
    use SoftDeletes;

    protected $table = "fpostulantes_cert_solicitud";
    protected $fillable = [
        'fpostulantes_cert_estado_id',
        'fpostulantes_cert_solicitante_id',
        'fpostulantes_cert_unidad_externa_id',
        'id_unidad',
        'uuid_validacion_emision',
        'folio_documento',
        'datos_solicitante',
        'fecha_estimada_solicitud',
        'notifica_postulante',
        'creado_por_postulante',
    ];

    protected $casts = [
        'creado_por_postulante'             => 'boolean',
        'datos_solicitante'                 => 'json',
        'fecha_estimada_solicitud'          => 'date:Y-m-d',
        'created_at'                        => 'datetime:Y-m-d H:i:s',
        'deleted_at'                        => 'datetime:Y-m-d H:i:s',
    ];

    protected $dates = [
        'fecha_estimada_solicitud',
        'fecha_emision_documento',
        'fecha_cierre_solicitud',
        'fecha_inicio_practica',
        'fecha_termino_practica',
        'deleted_at'
    ];



    /**
     * @property string $calificacion_grado
     */
    public function getCalificacionGradoAttribute(): string
    {
        if ($this->calificacion_practica <= 3.9) {
            return "MALA";
        } else if ($this->calificacion_practica > 3.9 and $this->calificacion_practica <= 4.9) {
            return "REGULAR";
        } else if ($this->calificacion_practica > 5 and $this->calificacion_practica <= 5.9) {
            return "BUENA";
        } else if ($this->calificacion_practica > 6 and $this->calificacion_practica <= 6.9) {
            return "MUY BUENA";
        } else {
            return "SOBRESALIENTE";
        }
    }


    public function estado(): BelongsTo
    {
        return $this->belongsTo(FPostulantesCertEstado::class, 'fpostulantes_cert_estado_id', 'id');
    }

    public function unidad(): BelongsTo
    {
        return $this->belongsTo(Unidad::class, 'id_unidad', 'id_unidad');
    }

    public function unidad_externa(): BelongsTo
    {
        return $this->belongsTo(FPostulantesCertUnidadExterna::class, 'fpostulantes_cert_unidad_externa_id', 'id');
    }

    public function solicitante(): BelongsTo
    {
        return $this->belongsTo(FPostulantesCertSolicitante::class, 'fpostulantes_cert_solicitante_id', 'id');
    }
}
