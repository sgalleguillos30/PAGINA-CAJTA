<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    protected $primaryKey = 'rut_usuario';

    public $incrementing = false;


    /**
     * Defines la ID por la que busca la información de un usuario
     * @return string [string]
     */
    public function getRouteKeyName()
    {
        return 'cargo_us';
    }


    /**
     * Obtiene el nombre completo del usuario que se consulta
     * @return string
     */
    public function getUsername() {
        return "{$this->nombre_us} {$this->apellido1_us} {$this->apellido2_us}";
    }

    /**
     * @param $id_unidad
     * @return \Illuminate\Support\Collection
     */
    protected function getUsuariosUnidad($id_unidad)
    {
        return $this->where('id_unidad', $id_unidad)
            ->where('rut_usuario', '!=', '0-0')
            ->where('rut_usuario', '!=', '00-0')
            ->where('id_estado', Estado::ACTIVO)
            ->orderBy('nombre_us')
            ->get();
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    protected function getUsuarios()
    {
        return $this->where('rut_usuario', '!=', '0-0')
            ->where('rut_usuario', '!=', '00-0')
            ->where('id_estado', Estado::ACTIVO)
            ->orderBy('nombre_us')
            ->get();
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    protected function getDirGenDirReg()
    {
        return $this->where('id_estado', Estado::ACTIVO)
            ->where('cargo_us', 'LIKE', '%Directora G%')
            ->orWhere('cargo_us', 'LIKE', '%Director Reg%')
            ->orWhere('cargo_us', 'LIKE', '%Directora Reg%')
            ->with('unidad', 'unidad.tipounidad')
            ->get();
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    protected function getDirReg()
    {
        return $this->where('id_estado', Estado::ACTIVO)
            ->where('cargo_us', 'LIKE', '%Director Reg%')
            ->orWhere('cargo_us', 'LIKE', '%Directora Reg%')
            ->get();
    }


    /**
     * Relación usuario -> estado
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado', 'id_estado')->select('id_estado', 'estado');
    }

    /**
     * Relación Usuario - Sexo
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function sexo()
    {
        return $this->belongsTo(Sexo::class, 'id_sexo', 'id_sexo')->select('id_sexo', 'sexo');
    }

    /**
     * Relación Usuario - Unidad
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function unidad()
    {
        return $this->belongsTo(Unidad::class,  'id_unidad', 'id_unidad');
    }

    /**
     * Relación Usuario - Unidad Cargo
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function unidadcargo()
    {
        return $this->belongsTo(Unidad::class,  'rut_usuario', 'abojefe_unidad');
    }

    /**
     * Relación Usuario - Historia Funcionario
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function historiafunc()
    {
        return $this->belongsTo(HistoriaFunc::class,  'rut_usuario', 'rut_usuario');
    }

    /**
     * Relación Usuario - Cajoirs
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo [type] [description]
     */
    public function cajoirs()
    {
        return $this->belongsTo(Cajoirs::class,  'id_cajoirs', 'id_cajoirs');
    }
}
