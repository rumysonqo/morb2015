<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model_Morb;
use App\Model_Edad;
use App\Model_Micro;
use App\Model_estab;
use App\Model_Capitulo;
use App\Model_Grupo;
use App\Model_Categoria;
use App\Model_Enfermedad;
//use Yajra\Datatables\Facades\Datatables;

class Ctrl_Morb extends Controller
{
        //controladores 2017
	public function morb_cap()
    {
        $morb_cap=Model_Morb::Morb_cap()->get();
        $edad=Model_Edad::pluck('descripcion','id');
        return view('view_morb_cap')->with('morb_cap',$morb_cap)->with('edad',$edad);
    }	


    public function dat_morb_cap(Request $request, $sex, $grp)
    {

    	if($request->ajax())
    	{
    		$dat_morb=Model_Morb::Dat_cap($sex,$grp)->get();
    		return response()->json($dat_morb);
    	}
    }


    public function morb_gru()
    {
        $morb_gru=Model_Morb::Morb_gru()->get();
        $edad=Model_Edad::pluck('descripcion','id');
        return view('view_morb_gru')->with('morb_gru',$morb_gru)->with('edad',$edad);
    }   


    public function dat_morb_gru(Request $request, $sex, $grp)
    {
        if($request->ajax())
        {
            $dat_morb=Model_Morb::Dat_gru($sex,$grp)->get();
            return response()->json($dat_morb);
        }
    }

    public function morb_cat()
    {
        $morb_cat=Model_Morb::Morb_cat()->get();
        $edad=Model_Edad::pluck('descripcion','id');
        return view('view_morb_cat')->with('morb_cat',$morb_cat)->with('edad',$edad);
    }   


    public function dat_morb_cat(Request $request, $sex, $grp)
    {
        if($request->ajax())
        {
            $dat_morb=Model_Morb::Dat_cat($sex,$grp)->get();
            return response()->json($dat_morb);
        }
    }

    public function morb_enf()
    {
        $morb_enf=Model_Morb::Morb_enf()->get();
        $edad=Model_Edad::pluck('descripcion','id');
        return view('view_morb_enf')->with('morb_enf',$morb_enf)->with('edad',$edad);
    }   


    public function dat_morb_enf(Request $request, $sex, $grp)
    {
        if($request->ajax())
        {
            $dat_morb=Model_Morb::Dat_enf($sex,$grp)->get();
            return response()->json($dat_morb);
        }
    }

    public function morb_cap_micro()
    {
        $morb_cap=Model_Morb::Morb_cap_micro()->get();
        $edad=Model_Edad::pluck('descripcion','id');
        $micro=Model_Micro::pluck('nombre','id');
        return view('view_morb_cap_micro')->with('morb_cap',$morb_cap)->with('edad',$edad)->with('micro',$micro);
    }

    public function dat_morb_cap_micro(Request $request, $sex, $grp, $mic)
    {
        if($request->ajax())
        {
            $dat_morb=Model_Morb::Dat_cap_micro($sex,$grp,$mic)->get();
            return response()->json($dat_morb);
        }
    }

    public function morb_gru_micro()
    {
        $morb_gru=Model_Morb::Morb_gru_micro()->get();
        $edad=Model_Edad::pluck('descripcion','id');
        $micro=Model_Micro::pluck('nombre','id');
        return view('view_morb_gru_micro')->with('morb_gru',$morb_gru)->with('edad',$edad)->with('micro',$micro);
    }

    public function dat_morb_gru_micro(Request $request, $sex, $grp, $mic)
    {
        if($request->ajax())
        {
            $dat_morb=Model_Morb::Dat_gru_micro($sex,$grp,$mic)->get();
            return response()->json($dat_morb);
        }
    }

    public function morb_cat_micro()
    {
        $morb_cat=Model_Morb::Morb_cat_micro()->get();
        $edad=Model_Edad::pluck('descripcion','id');
        $micro=Model_Micro::pluck('nombre','id');
        return view('view_morb_cat_micro')->with('morb_cat',$morb_cat)->with('edad',$edad)->with('micro',$micro);
    }

    public function dat_morb_cat_micro(Request $request, $sex, $grp, $mic)
    {
        if($request->ajax())
        {
            $dat_morb=Model_Morb::Dat_cat_micro($sex,$grp,$mic)->get();
            return response()->json($dat_morb);
        }
    }

    public function morb_enf_micro()
    {
        $morb_enf=Model_Morb::Morb_enf_micro()->get();
        $edad=Model_Edad::pluck('descripcion','id');
        $micro=Model_Micro::pluck('nombre','id');
        return view('view_morb_enf_micro')->with('morb_enf',$morb_enf)->with('edad',$edad)->with('micro',$micro);
    }

    public function dat_morb_enf_micro(Request $request, $sex, $grp, $mic)
    {
        if($request->ajax())
        {
            $dat_morb=Model_Morb::Dat_enf_micro($sex,$grp,$mic)->get();
            return response()->json($dat_morb);
        }
    }


    public function morb_cap_estab()
    {
        $morb_cap=Model_Morb::Morb_cap_estab()->get();
        $edad=Model_Edad::pluck('descripcion','id');
        $micro=Model_Micro::pluck('nombre','id');
        return view('view_morb_cap_estab')->with('morb_cap',$morb_cap)->with('edad',$edad)->with('micro',$micro);
    }

    public function datos_eess(Request $request, $mr)
    {
        if($request->ajax())
        {
            $dateess=Model_estab::Estab($mr)->get();
            return response()->json($dateess);
        }
    }

    public function dat_morb_cap_estab(Request $request, $sex, $grp, $mic, $est)
    {
        if($request->ajax())
        {
            $dat_morb=Model_Morb::Dat_cap_estab($sex,$grp,$mic, $est)->get();
            return response()->json($dat_morb);
        }
    }

    public function morb_gru_estab()
    {
        $morb_gru=Model_Morb::Morb_gru_estab()->get();
        $edad=Model_Edad::pluck('descripcion','id');
        $micro=Model_Micro::pluck('nombre','id');
        return view('view_morb_gru_estab')->with('morb_gru',$morb_gru)->with('edad',$edad)->with('micro',$micro);
    }

    public function dat_morb_gru_estab(Request $request, $sex, $grp, $mic, $est)
    {
        if($request->ajax())
        {
            $dat_morb=Model_Morb::Dat_gru_estab($sex,$grp,$mic, $est)->get();
            return response()->json($dat_morb);
        }
    }

    public function morb_cat_estab()
    {
        $morb_cat=Model_Morb::Morb_cat_estab()->get();
        $edad=Model_Edad::pluck('descripcion','id');
        $micro=Model_Micro::pluck('nombre','id');
        return view('view_morb_cat_estab')->with('morb_cat',$morb_cat)->with('edad',$edad)->with('micro',$micro);
    }

    public function dat_morb_cat_estab(Request $request, $sex, $grp, $mic, $est)
    {
        if($request->ajax())
        {
            $dat_morb=Model_Morb::Dat_cat_estab($sex,$grp,$mic, $est)->get();
            return response()->json($dat_morb);
        }
    }

    public function morb_enf_estab()
    {
        $morb_enf=Model_Morb::Morb_enf_estab()->get();
        $edad=Model_Edad::pluck('descripcion','id');
        $micro=Model_Micro::pluck('nombre','id');
        return view('view_morb_enf_estab')->with('morb_enf',$morb_enf)->with('edad',$edad)->with('micro',$micro);
    }

    public function dat_morb_enf_estab(Request $request, $sex, $grp, $mic, $est)
    {
        if($request->ajax())
        {
            $dat_morb=Model_Morb::Dat_enf_estab($sex,$grp,$mic, $est)->get();
            return response()->json($dat_morb);
        }
    }

    public function graf_cap_estab()
    {
        $edad=Model_Edad::pluck('descripcion','id');
        $micro=Model_Micro::pluck('nombre','id');
        return view('view_graf_cap_estab')->with('edad',$edad)->with('micro',$micro);
    }

    public function dat_graf_cap_estab(Request $request, $sex, $grp, $amb, $mic, $est)
    {
        if($request->ajax())
        {
            $dat_morb=Model_Morb::Dat_graf_cap_estab($sex,$grp,$amb, $mic, $est)->get();
            return response()->json($dat_morb);
        }
    }

    public function graf_gru_estab()
    {
        $edad=Model_Edad::pluck('descripcion','id');
        $micro=Model_Micro::pluck('nombre','id');
        return view('view_graf_gru_estab')->with('edad',$edad)->with('micro',$micro);
    }

    public function dat_graf_gru_estab(Request $request, $sex, $grp, $amb, $mic, $est)
    {
        if($request->ajax())
        {
            $dat_morb=Model_Morb::Dat_graf_gru_estab($sex,$grp,$amb, $mic, $est)->get();
            return response()->json($dat_morb);
        }
    }

    public function graf_cat_estab()
    {
        $edad=Model_Edad::pluck('descripcion','id');
        $micro=Model_Micro::pluck('nombre','id');
        return view('view_graf_cat_estab')->with('edad',$edad)->with('micro',$micro);
    }

    public function dat_graf_cat_estab(Request $request, $sex, $grp, $amb, $mic, $est)
    {
        if($request->ajax())
        {
            $dat_morb=Model_Morb::Dat_graf_cat_estab($sex,$grp,$amb, $mic, $est)->get();
            return response()->json($dat_morb);
        }
    }

    public function graf_enf_estab()
    {
        $edad=Model_Edad::pluck('descripcion','id');
        $micro=Model_Micro::pluck('nombre','id');
        return view('view_graf_enf_estab')->with('edad',$edad)->with('micro',$micro);
    }

    public function dat_graf_enf_estab(Request $request, $sex, $grp, $amb, $mic, $est)
    {
        if($request->ajax())
        {
            $dat_morb=Model_Morb::Dat_graf_enf_estab($sex,$grp,$amb, $mic, $est)->get();
            return response()->json($dat_morb);
        }
    }

    public function graf_anl_estab()
    {
        $edad=Model_Edad::pluck('descripcion','id');
        //$capitulo=Model_Capitulo::Capitulo($sex, $gru);
        return view('view_graf_anl_estab')->with('edad',$edad);
    }


    public function datos_capitulo(Request $request, $sex,  $edad)
    {
        if($request->ajax())
        {
            $datcap=Model_Morb::Capitulo_anl($sex, $edad)->get();
            return response()->json($datcap);
        }
    }    


    public function datos_grupo_anl(Request $request, $sex,  $edad, $cp)
    {
        if($request->ajax())
        {
            $datgru=Model_Morb::Grupo_anl($sex, $edad, $cp)->get();
            return response()->json($datgru);
        }
    }


    public function datos_categoria_anl(Request $request, $sex,  $edad, $gr)
    {
        if($request->ajax())
        {
            $datcat=Model_Morb::Categoria_anl($sex, $edad, $gr)->get();
            return response()->json($datcat);
        }
    }

    public function datos_enfermedad_anl(Request $request, $sex,  $edad, $ct)
    {
        if($request->ajax())
        {
            $datenf=Model_Morb::Enfermedad_anl($sex, $edad, $ct)->get();
            return response()->json($datenf);
        }
    }



    public function datos_grupo(Request $request, $cp)
    {
        if($request->ajax())
        {
            $datgrupo=Model_Grupo::Grupo($cp)->get();
            return response()->json($datgrupo);
        }
    }

    public function datos_categoria(Request $request, $gr)
    {
        if($request->ajax())
        {
            $datcat=Model_Categoria::Categoria($gr)->get();
            return response()->json($datcat);
        }
    }

    public function datos_enfermedad(Request $request, $ct)
    {
        if($request->ajax())
        {
            $datenf=Model_Enfermedad::Enfermedad($ct)->get();
            return response()->json($datenf);
        }
    }

    public function dat_graf_anl_estab(Request $request, $sex, $grp, $clf, $cod)
    {
        if($request->ajax())
        {
            $dat_morb=Model_Morb::Dat_graf_anl_estab($sex,$grp,$clf, $cod)->get();
            return response()->json($dat_morb);
        }
    }

}
