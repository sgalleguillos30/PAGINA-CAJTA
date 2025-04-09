<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BajFirmaDocumento extends Model
{
    use SoftDeletes;

    use SoftDeletes;

    protected $table = 'baj_firma_documento';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


    /**
     * Busca la info según la ID entregada
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'id';
    }



    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class,  'rut_usuario', 'rut_usuario');
    }
}
