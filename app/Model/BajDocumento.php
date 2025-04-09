<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BajDocumento extends Model
{
    protected $table = 'baj_documento';

    protected $casts = [ 'datos_usuario_baj' => 'json' ];

    public function getRouteKeyName(): string
    {
        return 'id';
    }

    public function getName(): string
    {
        $persona = json_decode( $this->datos_usuario_baj );
        return ucfirst(strtolower($persona->nombre_baj)) . " " . ucfirst(strtolower($persona->apellido1_baj)) . " " . ( !empty( $persona->apellido2_baj ) ? ucfirst(strtolower($persona->apellido2_baj)) : "" );
    }


    public function sexo(): BelongsTo
    {
        return $this->belongsTo(Sexo::class, 'id_sexo', 'id_sexo')->select('id_sexo', 'sexo');
    }

    public function unidad(): BelongsTo
    {
        return $this->belongsTo(Unidad::class,  'id_unidad', 'id_unidad');
    }

    public function infotribunal(): BelongsTo
    {
        return $this->belongsTo(InfoTribunal::class, 'info_tribunal_id');
    }

    public function infocorte(): BelongsTo
    {
        return $this->belongsTo(InfoCorte::class, 'info_corte_id');
    }

    public function tipogestionbaj(): BelongsTo
    {
        return $this->belongsTo(BajTipoGestion::class, 'baj_tipogestion_id');
    }

    public function firmabaj(): BelongsTo
    {
        return $this->belongsTo(BajFirmaDocumento::class, 'baj_firma_documento_id');
    }

    public function anulacion(): BelongsTo
    {
        return $this->belongsTo(BajAnulacion::class, 'id', 'baj_documento_id');
    }


    public function bajusuario(): BelongsTo
    {
        return $this->belongsTo(BajUsuario::class, 'baj_usuario_id');
    }
}
