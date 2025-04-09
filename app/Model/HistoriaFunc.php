<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HistoriaFunc extends Model
{
    protected $table = 'historiafunc';

    protected $primaryKey = 'id_historiafunc';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario() {
        return $this->hasOne(Usuario::class, 'id_historiafunc', 'id_historiafunc');
    }
}
