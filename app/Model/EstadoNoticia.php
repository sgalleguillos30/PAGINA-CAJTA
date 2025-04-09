<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EstadoNoticia extends Model
{
    protected $table = 'estadonoticia';

    protected $primaryKey = 'id_estadonot';

    public $timestamps = false;

    const PUBLICADO = 1;
    const BORRADOR = 2;
    const ELIMINADO = 3;
    const OCULTO = 4;


    /**
     * Relación entre Noticia - Estado Noticia
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function noticia()
    {
        return $this->hasOne(Noticia::class, 'id_noticia', 'id_noticia');
    }
}
