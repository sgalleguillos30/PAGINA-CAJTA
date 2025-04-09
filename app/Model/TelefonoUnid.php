<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TelefonoUnid extends Model
{
    protected $table = 'telefono_unid';

    protected $primaryKey = 'id_telunid';


    /**
     * @return string
     */
    public function phoneFormat(): string
    {
        if ( (bool) $this->es_fijo === true ) {
            return chunk_split($this->telefono_unid, 3, " ");
        } else {
            return "+" . substr($this->telefono_unid,0,3) . " " . substr($this->telefono_unid,3,4) . " " .
            substr($this->telefono_unid,7,4);
        }
    }


    public function unidad()
    {
        return $this->hasOne(Unidad::class, 'id_unidad', 'id_unidad');
    }
}
