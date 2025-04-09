<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class BajAnulacion extends Model
{
    use SoftDeletes;

    protected $table = 'baj_anulacion';

    protected $dates = [
        'fechanulacion_baj',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $with = ['firmabaj'];


    /**
     * Busca la info según la ID entregada
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'id';
    }




    public function baj(): HasOne
    {
        return $this->hasOne(BajDocumento::class, 'baj_documento_id', 'id');
    }


    public function firmabaj(): BelongsTo
    {
        return $this->belongsTo(BajFirmaDocumento::class, 'baj_firma_documento_id');
    }
}
