<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class FPostulantesCertSolicitante extends Model
{
    use SoftDeletes;

    protected $table = 'fpostulantes_cert_solicitante';
    protected $fillable = [
        'id_sexo',
        'rut_solicitante',
        'nombre_solicitante',
        'apellido1_solicitante',
        'apellido2_solicitante',
        'correo_solicitante',
        'fono_solicitante',
    ];

    protected $dates = ['deleted_at'];


    public function getName(): string
    {
        return "{$this->nombre_solicitante} {$this->apellido1_solicitante} {$this->apellido2_solicitante}";
    }


    public function sexo(): BelongsTo
    {
        return $this->belongsTo('App\Model\Sexo', 'id_sexo');
    }
}
