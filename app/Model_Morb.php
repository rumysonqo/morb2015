<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Model_Morb extends Model
{
    //
    protected $table='morbilidad_2015';

    public function scopeMorb_cap($query)
    {
		return $query->select(DB::raw('capitulo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, (sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100) as porcentaje'))->groupBy('capitulo')->orderBy('total');
    }

    public function scopeDat_cap($query, $sex, $grp)
    {
    	if($sex==1)
    	{
    		switch($grp)
    		{
    			case 1:
					return $query->select(DB::raw('capitulo, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo')->orderBy('total','desc');
					break;
			}
            switch($grp)
            {
                case 2:
                    return $query->select(DB::raw('capitulo, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo')->orderBy('total','desc');
                    break;
            }
            switch($grp)
            {
                case 3:
                    return $query->select(DB::raw('capitulo, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo')->orderBy('total','desc');
                    break;
            }
		}

		if($sex==3)
    	{
    		switch($grp)
    		{
    			case 18:
					return $query->select(DB::raw('capitulo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),1) as porcentaje'))->groupBy('capitulo')->orderBy('porcentaje','desc');
					break;
			}
		}





    }

}
