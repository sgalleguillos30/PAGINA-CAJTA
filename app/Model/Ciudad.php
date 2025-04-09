<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudad';

    protected $primaryKey = 'id_ciudad';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unidad()
    {
        return $this->hasMany(Unidad::class, 'id_unidad', 'id_unidad');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region()
    {
        return $this->belongsTo(Region::class, 'id_region', 'id_region');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cajoirs()
    {
        return $this->hasOne(Cajoirs::class, 'id_cajoirs', 'id_cajoirs');
    }
}
