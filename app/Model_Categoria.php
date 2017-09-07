<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Model_Categoria extends Model
{
    //
    protected $table='categoria';

    public function scopeCategoria($query, $gr)
    {
        return $query->select(DB::raw('id, categoria'))->where('id_grupo','=',$gr);
    }
}
