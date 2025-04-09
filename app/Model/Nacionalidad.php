<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nacionalidad extends Model
{
    use SoftDeletes;

    protected $table = 'nacionalidad';

    protected $primaryKey = 'id_nacionalidad';

    protected $dates = ['deleted_at'];
}
