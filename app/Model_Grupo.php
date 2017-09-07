<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Model_Grupo extends Model
{
    //
    protected $table='grupo';

    public function scopeGrupo($query, $cp)
    {
        return $query->select(DB::raw('id, grupo'))->where('id_capitulo','=',$cp);
    }
}
