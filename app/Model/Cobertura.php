<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cobertura extends Model
{
    protected $table = 'cobertura';

    protected $primaryKey = 'id_cobertura';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region()
    {
        return $this->belongsTo(Region::class, 'id_region', 'id_region');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comuna()
    {
        return $this->belongsTo(Comuna::class, 'id_comuna', 'id_comuna');
    }
}
