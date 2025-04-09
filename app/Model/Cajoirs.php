<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cajoirs extends Model
{
    protected $table = 'cajoirs';

    protected $primaryKey = 'id_cajoirs';

    protected $fillable = [
        'id_tipomensaje',           // TIPO DEL MENSAJE QUE EL USUARIO ENTREGA (CONSULTA, RECLAMO, SUGERENCIA, INFORMACION)
        'id_estadocajoirs',         // ESTADO DE LA SOLICITUD
        'id_tiporespuesta',         // TIPO DE RESPUESTA QUE SOLICITA EL USUARIO
        'id_sexo',
        'id_unidad',
        'id_ciudad',                // CIUDAD DONDE SE ENCUENTRA EL USUARIO (DE ESTE DEPENDE LA ASIGNACIÓN AL D.REG)
        'rut_usuario',              // RUT DEL USUARIO QUIEN ENTREGA LA RESPUESTA
        'rut_cajoirs',              // RUT DEL USUARIO QUIEN HACE LA CONSULTA
        'nombre_cajoirs',           // NOMBRE DEL USUARIO
        'apellido1_cajoirs',        // APELLIDOS DEL USUARIO
        'apellido2_cajoirs',
        'direccion_cajoirs',        // DIRECCIÓN DONDE VIVE EL USUARIO (EN CASO QUE REQUIERA RESPUESTA POR CORREO)
        'mail_cajoirs',             // MAIL DEL USUARIO (EN CASO QUE REQUIERA RESPUESTA POR MAIL)
        'fono_cajoirs',             // FONO DEL USUARIO
        'consulta_cajoirs',         // CONSULTA QUE REALIZA EL USUARIO QUE NECESITA SER RESPONDIDO
        'creado_cajoirs',           // FECHA QUE SE CREA EL REGISTRO
        'respuesta_cajoirs',        // RESPUESTA ENTREGADA AL USUARIO
        'fecharespuesta_cajoirs',   // FECHA QUE EL D.REGiONAL ENTREGÓ LA RESPUESTA AL USUARIO
    ];


    public function getNombre()
    {
        return "{$this->nombre_cajoirs} {$this->apellido1_cajoirs} {$this->apellido2_cajoirs}";
    }


    /**
     * Defines la ID por la que busca la información de una noticia
     * @return string [string]
     */
    public function getRouteKeyName() {
        return 'id_cajoirs';
    }

    /**
     * Relación Cajoirs - TipoMensaje
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function tipomensaje()
    {
        return $this->belongsTo(TipoMensaje::class,  'id_tipomensaje', 'id_tipomensaje');
    }


    /**
     * Relación Cajoirs - EstadoCajoirs
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function estadocajoirs()
    {
        return $this->belongsTo(EstadoCajoirs::class,  'id_estadocajoirs', 'id_estadocajoirs');
    }


    /**
     * Relación Cajoirs - TipoRespuesta
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function tiporespuesta()
    {
        return $this->belongsTo(TipoRespuesta::class,  'id_tiporespuesta', 'id_tiporespuesta');
    }


    /**
     * Relación Cajoirs - Sexo
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function sexo()
    {
        return $this->belongsTo(Sexo::class,  'id_sexo', 'id_sexo');
    }


    /**
     * Relación Cajoirs - Unidad
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function unidad()
    {
        return $this->belongsTo(Unidad::class,  'id_unidad', 'id_unidad');
    }


    /**
     * Relación Cajoirs - Ciudad
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class,  'id_ciudad', 'id_ciudad');
    }


    /**
     * Relación Cajoirs - AsigCajoirs
     * @return \Illuminate\Database\Eloquent\Relations\HasOne [type] [description]
     */
    public function asigcajoirs()
    {
        return $this->hasOne(AsigCajoirs::class,  'id_cajoirs', 'id_cajoirs');
    }


    /**
     * Relación Cajoirs - Usuario
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class,  'rut_usuario', 'rut_usuario');
    }


    /**
     *
     */
    public function historialasignacion()
    {
        return $this->hasMany(HistorialAsignacionCajoirs::class, 'id_cajoirs', 'id_cajoirs');
    }

}
