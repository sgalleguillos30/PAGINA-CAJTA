<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VideoNoticia extends Model
{
    use SoftDeletes;

    protected $table = 'noticia_video';

    protected $primaryKey = 'id_videonoticia';

//    protected $fillable = ['id_noticia', 'video_noticia'];

    protected $dates = ['deleted_at'];


    /**
     * Defines la ID por la que busca la información de una noticia
     * @return string [string]
     */
    public function getRouteKeyName() {
        return 'id_videonoticia';
    }




    /**
     * Relación VideoNoticia -> Noticia
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function noticia()
    {
        return $this->belongsTo(Noticia::class, 'id_noticia', 'id_noticia');
    }
}
