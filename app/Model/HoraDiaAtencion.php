<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HoraDiaAtencion extends Model
{
    protected $table = 'horadia_atencion';

    protected $primaryKey = 'id_hdatencion';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unidad()
    {
        return $this->hasOne(Unidad::class, 'id_unidad', 'id_unidad');
    }
}
