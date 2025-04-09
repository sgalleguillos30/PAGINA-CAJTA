<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    protected $table = 'sexo';

    protected $primaryKey = 'id_sexo';

    const MASCULINO = 1;
    const FEMENINO = 2;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario() {
        return $this->hasOne(Usuario::class, 'id_sexo', 'id_sexo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cajoirs() {
        return $this->hasOne(Cajoirs::class, 'id_cajoirs', 'id_cajoirs');
    }
}
