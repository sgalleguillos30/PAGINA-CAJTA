<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Concurso extends Model
{
    protected $table = 'concurso';

    protected $primaryKey = 'id_concurso';

    protected $dates = [
        'finicio_post_concurso',
        'ftermino_post_concurso'
    ];

    public static function getConcursos($estado)
    {
        return Concurso::where('id_estadoconc', $estado)
                    ->with('unidad', 'tipoproceso', 'estadoconcurso')
                    ->orderBy('finicio_concurso', 'desc')
                    ->get();
    }

    /**
     * Defines la ID por la que busca la información de un concurso
     * @return string [string]
     */
    public function getRouteKeyName(): string
    {
        return 'id_concurso';
    }


    /**
     * Relación Concurso - Estado Concurso
     * @return BelongsTo
     */
    public function estadoconcurso(): BelongsTo
    {
        return $this->belongsTo(EstadoConcurso::class, 'id_estadoconc', 'id_estadoconc')->select('id_estadoconc', 'estado_concurso');
    }


    /**
     * Relación Concurso - Tipo Proceso
     * @return BelongsTo
     */
    public function tipoproceso(): BelongsTo
    {
        return $this->belongsTo(TipoProceso::class, 'id_tipoproceso', 'id_tipoproceso')->select('id_tipoproceso', 'tipo_proceso');
    }


    /**
     * Relación Concurso - Tipo Contrato
     * @return BelongsTo
     */
    public function tipocontrato(): BelongsTo
    {
        return $this->belongsTo(TipoContrato::class, 'id_tipocontrato', 'id_tipocontrato')->select('id_tipocontrato', 'tipo_contrato');
    }


    /**
     * Relación Concurso - Unidad
     * @return BelongsTo
     */
    public function unidad(): BelongsTo
    {
        return $this->belongsTo(Unidad::class, 'id_unidad', 'id_unidad');
    }


    /**
     * Relación Concurso - Cargo Vacante
     * @return HasMany
     */
        public function cargovacante(): HasMany
        {
        return $this->hasMany(CargoVacante::class, 'id_concurso', 'id_concurso')
            ->select('id_cargovacante', 'id_estado', 'cargo_vacante', 'cupo_vacante');
    }


    /**
     * Relación Concurso - Proceso Concurso
     * @return HasMany
     */
    public function procesoconcurso(): HasMany
    {
        return $this->hasMany(ProcesoConcurso::class, 'id_concurso', 'id_concurso')
            ->orderBy('creado_procesoconc', 'desc')
            ->select('id_concurso', 'nombre_procesoconc', 'adjunto_procesoconc', 'creado_procesoconc');
    }
}
