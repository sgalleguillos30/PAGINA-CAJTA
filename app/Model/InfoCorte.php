<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class InfoCorte extends Model
{
    use SoftDeletes;

    protected $table = 'info_corte';

    protected $dates = ['deleted_at'];


    /**
     * Busca la info según la ID entregada
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'id';
    }


    /**
     * Relación InfoCorte - Region
     * @return BelongsTo [type] [description]
     */
    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class,  'id_region', 'id_region');
    }
}
