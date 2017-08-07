<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model_Morb;
use App\Model_Edad;
use Yajra\Datatables\Facades\Datatables;

class Ctrl_Morb extends Controller
{
        //controladores 2017
	public function morb_cap()
    {
        $morb_cap=Model_Morb::Morb_cap()->get();
        $edad=Model_Edad::pluck('descripcion','id');
        return view('view_morb_cap')->with('morb_cap',$morb_cap)->with('edad',$edad);
        //return view('view_morb_cap')->with('edad',$edad);
    }	


    public function dat_morb_cap(Request $request, $sex, $grp)
    {

    	if($request->ajax())
    	{
    		$dat_morb=Model_Morb::Dat_cap($sex,$grp)->get();
    		return response()->json($dat_morb);
    	}
    }

}
