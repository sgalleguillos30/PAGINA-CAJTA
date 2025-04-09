<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticia';

    protected $primaryKey = 'id_noticia';

    protected $fillable = ['portada_noticia', 'visitas_noticia'];


    /**
     * Defines la ID por la que busca la información de una noticia
     * @return string [string]
     */
    public function getRouteKeyName() {
        return 'id_noticia';
    }

    /**
     * Define si una noticia está ELIMINADA
     * @return boolean
     */
    public function isDeleted()
    {
        return $this->id_estadonot === EstadoNoticia::ELIMINADO ?: false;
    }


    /**
     * Relación Noticia - EstadoNoticia
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estadonoticia()
    {
        return $this->belongsTo(EstadoNoticia::class, 'id_estadonot', 'id_estadonot')->select('id_estadonot', 'estado_noticia');
    }



    /**
     * Relación Noticia - GaleriaNoticias
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function galerianoticia() {
        return $this->hasMany(GaleriaNoticias::class, 'id_noticia', 'id_noticia')
            ->where('id_estado', Estado::ACTIVO)
            ->orderBy('created_at', 'desc');
    }



    /**
     * Relación Noticia - HashtagFacebook
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hashtag() {
        return $this->hasMany(HashtagNoticia::class, 'id_noticia', 'id_noticia');
    }



    /**
     * Relación Noticia - SocialNoticia
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function social() {
        return $this->hasMany(SocialNoticia::class, 'id_noticia', 'id_noticia');
    }



    /**
     * Relación Noticia - VideoNoticia
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function video() {
        return $this->hasMany(VideoNoticia::class, 'id_noticia', 'id_noticia');
    }
}
