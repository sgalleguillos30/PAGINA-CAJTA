<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RedSocial extends Model
{
    protected $table = 'redsocial';

    protected $primaryKey = 'id_redsocial';

    /**
     * Defines la ID por la que busca la información de un concurso
     * @return string [string]
     */
    public function getRouteKeyName()
    {
        return 'id_redsocial';
    }


    /**
     * Relación SocialNoticia -> RedSocial
     * @return \Illuminate\Database\Eloquent\Relations\HasOne [type] [description]
     */
    public function socialnoticia()
    {
        return $this->hasOne(SocialNoticia::class, 'id_redsocial', 'id_redsocial');
    }
}
