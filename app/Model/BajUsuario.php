<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class BajUsuario extends Model
{
    use SoftDeletes;

    protected $table = 'baj_usuario';

    protected $primaryKey = 'id';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'es_extranjero_baj' => 'boolean'
    ];


    /**
     * @return string
     */
    public function getName(): string
    {
        return ucfirst(strtolower($this->nombre_baj)) . " " . ucfirst(strtolower($this->apellido1_baj)) . " " . ( !empty( $this->apellido2_baj ) ? ucfirst(strtolower($this->apellido2_baj)) : "" );
    }

    public function sexo(): BelongsTo
    {
        return $this->belongsTo(Sexo::class, 'id_sexo', 'id_sexo');
    }

    public function nacionalidad(): BelongsTo
    {
        return $this->belongsTo(Nacionalidad::class, 'id_nacionalidad', 'id_nacionalidad');
    }

    public function baj_documento(): HasMany
    {
        return $this->hasMany( BajDocumento::class );
    }
}
