<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProcesoConcurso extends Model
{
    use SoftDeletes;

    protected $table = 'procesoconcurso';

    protected $primaryKey = 'id_procesoconc';


    public function concurso(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Concurso::class, 'id_concurso', 'id_concurso');
    }
}
