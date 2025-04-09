<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = 'unidad';

    protected $primaryKey = 'id_unidad';


    /**
     * Defines la ID por la que busca la información de una unidad
     * @return string [string]
     */
    public function getRouteKeyName() {
        return 'id_unidad';
    }

    /**
     * Extrae todas las unidades que son de la CAJTA.
     * @param $region
     * @return \Illuminate\Support\Collection
     */
    protected function getUnidadesxRegion($region)
    {
        return $this->where('id_region', $region)
            ->where('id_estado', Estado::ACTIVO)
            ->where( function( $query ) {
                return $query->whereBetween('id_tipounidad', [1,4]);
            })
            ->orderBy('id_tipounidad', 'asc')
            ->orderBy('nombre_unidad', 'asc')
            ->get();
    }

    /**
     * Entrega todas las unidades operativas CAJTA
     * @param $region
     * @return Unidad[]|\Illuminate\Database\Eloquent\Collection
     */
    protected function getUnidadesOperativasxRegion($region)
    {
        return $this->where('id_region', $region)
            ->where('id_estado', Estado::ACTIVO)
            ->where( function( $query ) {
                return $query->whereBetween('id_tipounidad', [3,4]);
            })
            ->orderBy('id_tipounidad', 'asc')
            ->orderBy('nombre_unidad', 'asc')
            ->get();
    }



    protected function getUnidadConvenio()
    {
        return $this->with('ciudad')
            ->where('id_tipounidad', TipoUnidad::CONVENIO)
            ->where('id_estado', Estado::ACTIVO)
            ->orderBy('id_ciudad', 'desc')
            ->get();
    }


    protected function getDirgenDirreg()
    {
        return $this->with('usuario')
                    ->whereBetween('id_tipounidad', [TipoUnidad::DIRGEN, TipoUnidad::DIRREG])
                    ->get();
    }



    /**
     * Relación Unidad - Usuario
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuario()
    {
        return $this->hasMany(Usuario::class, 'id_unidad', 'id_unidad');
    }


    /**
     * Relación Unidad - Usuario Cargo
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuariocargo()
    {
        return $this->hasOne(Usuario::class, 'rut_usuario', 'abojefe_unidad');
    }


    /**
     * Relación Unidad -> estado
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado', 'id_estado')->select('id_estado', 'estado');
    }


    /**
     * Relación Unidad -> region
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function region()
    {
        return $this->belongsTo(Region::class, 'id_region', 'id_region')->select('id_region', 'region');
    }


    /**
     * Relación Unidad -> ciudad
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad', 'id_ciudad')->select('id_ciudad', 'id_region', 'ciudad');
    }


    /**
     * Relación Unidad -> descripcion unidad
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function descripcion_unid()
    {
        return $this->belongsTo(DescripcionUnidad::class, 'id_descripunid', 'id_descripunid')->select('id_descripunid', 'tipo_descripunid', 'descripcion_unid');
    }


    /**
     * Relación Unidad -> dependencia unidad
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function dependencia_unid()
    {
        return $this->belongsTo(DependenciaUnidad::class, 'id_unidad', 'id_unidad')
            ->where('id_estado', Estado::ACTIVO);
    }


    /**
     * Relación Unidad -> tipo unidad
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function tipounidad()
    {
        return $this->belongsTo(TipoUnidad::class, 'id_tipounidad', 'id_tipounidad');
    }


    /**
     * Relación Unidad - HoraDiaAtencion
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function diasatencion()
    {
        return $this->hasMany(HoraDiaAtencion::class, 'id_unidad', 'id_unidad')
                    ->where('id_estado', Estado::ACTIVO);
    }


    /**
     * Relación Unidad - MateriaUnidad
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materiaunidad()
    {
        return $this->hasMany(MateriaUnidad::class, 'id_unidad', 'id_unidad')
            ->where('id_estado', Estado::ACTIVO);
    }


    /**
     * Relación Unidad -> cobertura
     * @return \Illuminate\Database\Eloquent\Relations\HasMany [type] [description]
     */
    public function cobertura()
    {
        return $this->hasMany(Cobertura::class, 'id_unidad', 'id_unidad')
            ->where('id_estado', Estado::ACTIVO);
    }


    /**
     * Relación Unidad -> Telefono Unidad
     * @return \Illuminate\Database\Eloquent\Relations\HasMany [type] [description]
     */
    public function telefonounid()
    {
        return $this->hasMany(TelefonoUnid::class, 'id_unidad', 'id_unidad')
                    ->where('id_estado', Estado::ACTIVO);
    }


    /**
     * Relación Unidad -> Cajoirs
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function cajoirs()
    {
        return $this->belongsTo(Cajoirs::class, 'id_cajoirs', 'id_cajoirs');
    }


    /**
     * Relación Unidad -> Clasificacion
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function clasificacion()
    {
        return $this->belongsTo(UnidadClasificacion::class, 'id_unidadclasificacion', 'id_unidadclasificacion')
            ->select('unidad_clasificacion');
    }
}
