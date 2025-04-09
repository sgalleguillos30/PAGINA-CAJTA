<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $table = 'comuna';

    protected $primaryKey = 'id_comuna';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cobertura()
    {
        return $this->hasOne(Cobertura::class, 'id_cobertura', 'id_cobertura');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region()
    {
        return $this->belongsTo(Region::class, 'id_region', 'id_region');
    }
}
