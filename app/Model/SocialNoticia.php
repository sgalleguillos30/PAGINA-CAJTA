<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialNoticia extends Model
{
    use SoftDeletes;

    protected $table = 'socialnoticia';

    protected $primaryKey = 'id_socialnoticia';

//    protected $fillable = ['id_noticia', 'id_redsocial', 'link_socialnoticia'];

    protected $dates = ['deleted_at'];


    /**
     * Defines la ID por la que busca la información de una noticia
     * @return string [string]
     */
    public function getRouteKeyName() {
        return 'id_socialnoticia';
    }




    /**
     * Relación SocialNoticia -> Noticia
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function noticia()
    {
        return $this->belongsTo(Noticia::class, 'id_noticia', 'id_noticia');
    }


    /**
     * Relación SocialNoticia -> RedSocial
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function redsocial()
    {
        return $this->belongsTo(RedSocial::class, 'id_redsocial', 'id_redsocial');
    }
}
