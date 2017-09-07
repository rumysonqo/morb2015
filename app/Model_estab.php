<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Model_estab extends Model
{
    //
    protected $table='eess';


    public function scopeEstab($query, $mr)
    {
        return $query->select(DB::raw('id, nombre'))->where('id_micro_red','=',$mr);
    }


}
