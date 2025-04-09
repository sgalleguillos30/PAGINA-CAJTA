<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FPostulantesCertUnidadExterna extends Model
{
    
    use SoftDeletes;

    protected $table = "fpostulantes_cert_unidad_externa";
    protected $dates = ['deleted_at'];
}
