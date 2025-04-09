<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FPostulantesCertFolio extends Model
{
    protected $table = 'fpostulantes_cert_folio';
    protected $fillable = ['nro_folio', 'anho_folio'];
}
