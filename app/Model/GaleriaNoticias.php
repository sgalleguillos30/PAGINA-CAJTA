<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GaleriaNoticias extends Model
{
    protected $table = 'galerianoticias';

    protected $primaryKey = 'id_galerianot';

    protected $fillable = ['id_noticia', 'id_estado', 'imagen_galerianot'];


    /**
     * Defines la ID por la que busca la información de una noticia
     * @return string [string]
     */
    public function getRouteKeyName() {
        return 'id_galerianot';
    }




    /**
     * Relación GaleriaNoticias -> Estado
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function noticia()
    {
        return $this->belongsTo(Noticia::class, 'id_noticia', 'id_noticia');
    }


    /**
     * Relación GaleriaNoticias -> Estado
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado', 'id_estado')->select('id_estado', 'estado');
    }
}
