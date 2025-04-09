<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HashtagNoticia extends Model
{
    use SoftDeletes;

    protected $table = 'noticia_fbhashtag';

    protected $primaryKey = 'id_hashnoticia';

//    protected $fillable = ['id_noticia', 'titulo_hashtag', 'titulo_busqueda_hashtag'];

    protected $dates = ['deleted_at'];


    /**
     * Defines la ID por la que busca la información
     * @return string [string]
     */
    public function getRouteKeyName() {
        return 'id_hashnoticia';
    }



    /**
     * Relación HashtagNoticia -> Noticia
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function noticia()
    {
        return $this->belongsTo(Noticia::class, 'id_noticia', 'id_noticia');
    }
}
