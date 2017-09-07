<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Model_Enfermedad extends Model
{
    //
    protected $table='enfermedad';

    public function scopeEnfermedad($query, $ct)
    {
        return $query->select(DB::raw('id, enfermedad'))->where('id_categoria','=',$ct);
    }
}
