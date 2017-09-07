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

    public function scopeMorb_gru($query)
    {
        return $query->select(DB::raw('grupo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, (sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100) as porcentaje'))->groupBy('grupo')->orderBy('total');
    }

    public function scopeMorb_cat($query)
    {
        return $query->select(DB::raw('categoria, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, (sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100) as porcentaje'))->groupBy('categoria')->orderBy('total');
    }

    public function scopeMorb_enf($query)
    {
        return $query->select(DB::raw('enfermedad, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, (sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100) as porcentaje'))->groupBy('enfermedad')->orderBy('total');
    }

    public function scopeMorb_cap_micro($query)
    {
        return $query->select(DB::raw('capitulo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, (sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100) as porcentaje'))->groupBy('capitulo')->orderBy('total');
    }


    public function scopeMorb_gru_micro($query)
    {
        return $query->select(DB::raw('grupo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, (sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100) as porcentaje'))->groupBy('grupo')->orderBy('total');
    }


    public function scopeMorb_cat_micro($query)
    {
        return $query->select(DB::raw('categoria, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, (sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100) as porcentaje'))->groupBy('categoria')->orderBy('total');
    }

    public function scopeMorb_enf_micro($query)
    {
        return $query->select(DB::raw('enfermedad, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, (sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100) as porcentaje'))->groupBy('enfermedad')->orderBy('total');
    }

    public function scopeMorb_cap_estab($query)
    {
        return $query->select(DB::raw('capitulo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, (sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100) as porcentaje'))->groupBy('capitulo')->orderBy('total');
    }


    public function scopeMorb_gru_estab($query)
    {
        return $query->select(DB::raw('grupo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, (sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100) as porcentaje'))->groupBy('grupo')->orderBy('total');
    }

    public function scopeMorb_cat_estab($query)
    {
        return $query->select(DB::raw('categoria, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, (sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100) as porcentaje'))->groupBy('categoria')->orderBy('total');
    }

    public function scopeMorb_enf_estab($query)
    {
        return $query->select(DB::raw('enfermedad, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, (sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100) as porcentaje'))->groupBy('enfermedad')->orderBy('total');
    }


    public function scopeCapitulo_anl($query, $sex, $edad)
    {
        if($sex != 'A')
        {
            switch($edad)
            {
                case 1:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('0_28d','>',0)->orderBy('id_capitulo');
                    break;
                case 2:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('1_11m','>',0)->orderBy('id_capitulo');
                    break;
                case 3:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('1a','>',0)->orderBy('id_capitulo');
                    break;
                case 4:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('2_4a','>',0)->orderBy('id_capitulo');
                    break;
                case 5:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('5_9a','>',0)->orderBy('id_capitulo');
                    break;
                case 6:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('10_11a','>',0)->orderBy('id_capitulo');
                    break;
                case 7:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('12_14a','>',0)->orderBy('id_capitulo');
                    break;
                case 8:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('15_17a','>',0)->orderBy('id_capitulo');
                    break;
                case 9:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('18_24a','>',0)->orderBy('id_capitulo');
                    break;
                case 10:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('25_29a','>',0)->orderBy('id_capitulo');
                    break;
                case 11:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('30_34a','>',0)->orderBy('id_capitulo');
                    break;
                case 12:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('35_39a','>',0)->orderBy('id_capitulo');
                    break;
                case 13:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('40_44a','>',0)->orderBy('id_capitulo');
                    break;
                case 14:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('45_49a','>',0)->orderBy('id_capitulo');
                    break;
                case 15:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('50_54a','>',0)->orderBy('id_capitulo');
                    break;
                case 16:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('55_59a','>',0)->orderBy('id_capitulo');
                    break;
                case 17:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->where('60_mas','>',0)->orderBy('id_capitulo');
                    break;
                case 18:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('sexo','=',$sex)->orderBy('id_capitulo');
                    break;

            }
        }


        if($sex == 'A')
        {
            switch($edad)
            {
                case 1:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('0_28d','>',0)->orderBy('id_capitulo');
                    break;
                case 2:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('1_11m','>',0)->orderBy('id_capitulo');
                    break;
                case 3:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('1a','>',0)->orderBy('id_capitulo');
                    break;
                case 4:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('2_4a','>',0)->orderBy('id_capitulo');
                    break;
                case 5:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('5_9a','>',0)->orderBy('id_capitulo');
                    break;
                case 6:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('10_11a','>',0)->orderBy('id_capitulo');
                    break;
                case 7:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('12_14a','>',0)->orderBy('id_capitulo');
                    break;
                case 8:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('15_17a','>',0)->orderBy('id_capitulo');
                    break;
                case 9:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('18_24a','>',0)->orderBy('id_capitulo');
                    break;
                case 10:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('25_29a','>',0)->orderBy('id_capitulo');
                    break;
                case 11:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('30_34a','>',0)->orderBy('id_capitulo');
                    break;
                case 12:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('35_39a','>',0)->orderBy('id_capitulo');
                    break;
                case 13:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('40_44a','>',0)->orderBy('id_capitulo');
                    break;
                case 14:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('45_49a','>',0)->orderBy('id_capitulo');
                    break;
                case 15:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('50_54a','>',0)->orderBy('id_capitulo');
                    break;
                case 16:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('55_59a','>',0)->orderBy('id_capitulo');
                    break;
                case 17:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->where('60_mas','>',0)->orderBy('id_capitulo');
                    break;
                case 18:
                    return $query->select(DB::raw('distinct(id_capitulo), capitulo'))->orderBy('id_capitulo');
                    break;

            }
        }



    }



public function scopeGrupo_anl($query, $sex, $edad, $cap)
    {
        if($sex != 'A')
        {
            switch($edad)
            {
                case 1:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('0_28d','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 2:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('1_11m','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 3:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('1a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 4:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('2_4a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 5:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('5_9a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 6:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('10_11a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 7:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('12_14a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 8:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('15_17a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 9:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('18_24a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 10:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('25_29a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 11:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('30_34a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 12:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('35_39a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 13:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('40_44a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 14:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('45_49a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 15:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('50_54a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 16:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('55_59a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 17:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('60_mas','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 18:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('sexo','=',$sex)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;

            }
        }


        if($sex == 'A')
        {
            switch($edad)
            {
                case 1:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('0_28d','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 2:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('1_11m','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 3:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('1a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 4:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('2_4a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 5:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('5_9a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 6:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('10_11a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 7:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('12_14a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 8:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('15_17a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 9:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('18_24a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 10:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('25_29a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 11:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('30_34a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 12:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('35_39a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 13:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('40_44a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 14:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('45_49a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 15:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('50_54a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 16:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('55_59a','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 17:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->where('60_mas','>',0)->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;
                case 18:
                    return $query->select(DB::raw('distinct(id_grupo), grupo'))->orderBy('id_grupo')->where('id_capitulo','=',$cap)->orderBy('id_grupo');
                    break;

            }
        }

    }



public function scopeCategoria_anl($query, $sex, $edad, $gru)
    {
        if($sex != 'A')
        {
            switch($edad)
            {
                case 1:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('0_28d','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 2:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('1_11m','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 3:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('1a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 4:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('2_4a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 5:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('5_9a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 6:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('10_11a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 7:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('12_14a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 8:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('15_17a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 9:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('18_24a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 10:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('25_29a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 11:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('30_34a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 12:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('35_39a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 13:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('40_44a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 14:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('45_49a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 15:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('50_54a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 16:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('55_59a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 17:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('60_mas','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 18:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('sexo','=',$sex)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;

            }
        }


        if($sex == 'A')
        {
            switch($edad)
            {
                case 1:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('0_28d','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 2:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('1_11m','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 3:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('1a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 4:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('2_4a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 5:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('5_9a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 6:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('10_11a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 7:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('12_14a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 8:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('15_17a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 9:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('18_24a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 10:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('25_29a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 11:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('30_34a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 12:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('35_39a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 13:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('40_44a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 14:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('45_49a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 15:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('50_54a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 16:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('55_59a','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 17:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('60_mas','>',0)->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;
                case 18:
                    return $query->select(DB::raw('distinct(id_categoria), categoria'))->where('id_grupo','=',$gru)->orderBy('id_categoria');
                    break;

            }
        }

    }



public function scopeEnfermedad_anl($query, $sex, $edad, $ct)
    {
        if($sex != 'A')
        {
            switch($edad)
            {
                case 1:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('0_28d','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 2:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('1_11m','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 3:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('1a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 4:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('2_4a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 5:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('5_9a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 6:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('10_11a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 7:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('12_14a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 8:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('15_17a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 9:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('18_24a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 10:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('25_29a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 11:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('30_34a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 12:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('35_39a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 13:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('40_44a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 14:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('45_49a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 15:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('50_54a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 16:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('55_59a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 17:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('60_mas','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 18:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('sexo','=',$sex)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;

            }
        }


        if($sex == 'A')
        {
            switch($edad)
            {
                case 1:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('0_28d','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 2:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('1_11m','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 3:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('1a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 4:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('2_4a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 5:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('5_9a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 6:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('10_11a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 7:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('12_14a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 8:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('15_17a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 9:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('18_24a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 10:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('25_29a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 11:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('30_34a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 12:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('35_39a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 13:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('40_44a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 14:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('45_49a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 15:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('50_54a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 16:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('55_59a','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 17:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('60_mas','>',0)->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;
                case 18:
                    return $query->select(DB::raw('distinct(id_enfermedad), enfermedad'))->where('id_categoria','=',$ct)->orderBy('id_enfermedad');
                    break;

            }
        }

    }



    public function scopeDat_cap($query, $sex, $grp)
    {
        if($sex==1)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 2:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 3:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 4:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 5:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 6:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 7:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 8:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 9:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 10:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 11:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 12:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 13:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 14:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 15:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 16:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 17:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
                case 18:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="M")*100),1) as porcentaje'))->where('sexo','=','M')->groupBy('capitulo');
                    break;
            }
        }


        if($sex==2)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;

                case 2:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
                case 3:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
                case 4:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
                case 5:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
                case 6:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
                case 7:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
                case 8:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
                case 9:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
                case 10:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
                case 11:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
                case 12:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
                case 13:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
                case 14:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
                case 15:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
                case 16:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
                case 17:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
                case 18:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="F")*100),1) as porcentaje'))->where('sexo','=','F')->groupBy('capitulo');
                    break;
            }
        }

        if($sex==3)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;

                case 2:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1_11m),0) as total, round((sum(1_11M)/(select sum(1_11m) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;
                case 3:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;
                case 4:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;
                case 5:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;
                case 6:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;
                case 7:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;
                case 8:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;
                case 9:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;
                case 10:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;
                case 11:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;
                case 12:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;
                case 13:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;
                case 14:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;
                case 15:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;
                case 16:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;
                case 17:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo');
                    break;
                case 18:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),1) as porcentaje'))->groupBy('capitulo');
                    break;
            }
        }
    }


public function scopeDat_gru($query, $sex, $grp)
    {
        if($sex==1)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('0_28d','>',0)->groupBy('grupo');
                    break;
                case 2:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('1_11m','>',0)->groupBy('grupo');
                    break;
                case 3:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('1a','>',0)->groupBy('grupo');
                    break;
                case 4:
                    return $query->select(DB::raw('grupo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('2_4a','>',0)->groupBy('grupo');
                    break;
                case 5:
                    return $query->select(DB::raw('grupo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('5_9a','>',0)->groupBy('grupo');
                    break;
                case 6:
                    return $query->select(DB::raw('grupo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('10_11a','>',0)->groupBy('grupo');
                    break;
                case 7:
                    return $query->select(DB::raw('grupo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('12_14a','>',0)->groupBy('grupo');
                    break;
                case 8:
                    return $query->select(DB::raw('grupo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('15_17a','>',0)->groupBy('grupo');
                    break;
                case 9:
                    return $query->select(DB::raw('grupo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('18_24a','>',0)->groupBy('grupo');
                    break;
                case 10:
                    return $query->select(DB::raw('grupo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('25_29a','>',0)->groupBy('grupo');
                    break;
                case 11:
                    return $query->select(DB::raw('grupo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('30_34a','>',0)->groupBy('grupo');
                    break;
                case 12:
                    return $query->select(DB::raw('grupo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('35_39a','>',0)->groupBy('grupo');
                    break;
                case 13:
                    return $query->select(DB::raw('grupo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('40_44a','>',0)->groupBy('grupo');
                    break;
                case 14:
                    return $query->select(DB::raw('grupo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('45_49a','>',0)->groupBy('grupo');
                    break;
                case 15:
                    return $query->select(DB::raw('grupo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('50_54a','>',0)->groupBy('grupo');
                    break;
                case 16:
                    return $query->select(DB::raw('grupo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('55_59a','>',0)->groupBy('grupo');
                    break;
                case 17:
                    return $query->select(DB::raw('grupo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('60_mas','>',0)->groupBy('grupo');
                    break;
                case 18:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="M")*100),1) as porcentaje'))->where('sexo','=','M')->groupBy('grupo');
                    break;
            }
        }


        if($sex==2)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('0_28d','>',0)->groupBy('grupo');
                    break;

                case 2:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1_11M),0) as total, round((sum(1_11M)/(select sum(1_11M) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('1_11m','>',0)->groupBy('grupo');
                    break;
                case 3:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('1a','>',0)->groupBy('grupo');
                    break;
                case 4:
                    return $query->select(DB::raw('grupo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('2_4a','>',0)->groupBy('grupo');
                    break;
                case 5:
                    return $query->select(DB::raw('grupo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('5_9a','>',0)->groupBy('grupo');
                    break;
                case 6:
                    return $query->select(DB::raw('grupo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('10_11a','>',0)->groupBy('grupo');
                    break;
                case 7:
                    return $query->select(DB::raw('grupo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('12_14a','>',0)->groupBy('grupo');
                    break;
                case 8:
                    return $query->select(DB::raw('grupo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('15_17a','>',0)->groupBy('grupo');
                    break;
                case 9:
                    return $query->select(DB::raw('grupo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('18_24a','>',0)->groupBy('grupo');
                    break;
                case 10:
                    return $query->select(DB::raw('grupo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('25_29a','>',0)->groupBy('grupo');
                    break;
                case 11:
                    return $query->select(DB::raw('grupo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('30_34a','>',0)->groupBy('grupo');
                    break;
                case 12:
                    return $query->select(DB::raw('grupo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('35_39a','>',0)->groupBy('grupo');
                    break;
                case 13:
                    return $query->select(DB::raw('grupo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('40_44a','>',0)->groupBy('grupo');
                    break;
                case 14:
                    return $query->select(DB::raw('grupo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('45_49a','>',0)->groupBy('grupo');
                    break;
                case 15:
                    return $query->select(DB::raw('grupo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('50_54a','>',0)->groupBy('grupo');
                    break;
                case 16:
                    return $query->select(DB::raw('grupo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('55_59a','>',0)->groupBy('grupo');
                    break;
                case 17:
                    return $query->select(DB::raw('grupo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('60_mas','>',0)->groupBy('grupo');
                    break;
                case 18:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="F")*100),1) as porcentaje'))->where('sexo','=','F')->groupBy('grupo');
                    break;
            }
        }

        if($sex==3)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015)*100),2) as porcentaje'))->where('0_28d','>',0)->groupBy('grupo');
                    break;

                case 2:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1_11M),0) as total, round((sum(1_11M)/(select sum(1_11M) from morbilidad_2015)*100),2) as porcentaje'))->where('1_11a','>',0)->groupBy('grupo');
                    break;
                case 3:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015)*100),2) as porcentaje'))->where('1a','>',0)->groupBy('grupo');
                    break;
                case 4:
                    return $query->select(DB::raw('grupo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015)*100),2) as porcentaje'))->where('2_4a','>',0)->groupBy('grupo');
                    break;
                case 5:
                    return $query->select(DB::raw('grupo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015)*100),2) as porcentaje'))->where('5_9a','>',0)->groupBy('grupo');
                    break;
                case 6:
                    return $query->select(DB::raw('grupo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015)*100),2) as porcentaje'))->where('10_11a','>',0)->groupBy('grupo');
                    break;
                case 7:
                    return $query->select(DB::raw('grupo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015)*100),2) as porcentaje'))->where('12_14a','>',0)->groupBy('grupo');
                    break;
                case 8:
                    return $query->select(DB::raw('grupo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015)*100),2) as porcentaje'))->where('15_17a','>',0)->groupBy('grupo');
                    break;
                case 9:
                    return $query->select(DB::raw('grupo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015)*100),2) as porcentaje'))->where('18_24a','>',0)->groupBy('grupo');
                    break;
                case 10:
                    return $query->select(DB::raw('grupo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015)*100),2) as porcentaje'))->where('25_29a','>',0)->groupBy('grupo');
                    break;
                case 11:
                    return $query->select(DB::raw('grupo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015)*100),2) as porcentaje'))->where('30_34a','>',0)->groupBy('grupo');
                    break;
                case 12:
                    return $query->select(DB::raw('grupo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015)*100),2) as porcentaje'))->where('35_39a','>',0)->groupBy('grupo');
                    break;
                case 13:
                    return $query->select(DB::raw('grupo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015)*100),2) as porcentaje'))->where('40_44a','>',0)->groupBy('grupo');
                    break;
                case 14:
                    return $query->select(DB::raw('grupo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015)*100),2) as porcentaje'))->where('45_49a','>',0)->groupBy('grupo');
                    break;
                case 15:
                    return $query->select(DB::raw('grupo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015)*100),2) as porcentaje'))->where('50_54a','>',0)->groupBy('grupo');
                    break;
                case 16:
                    return $query->select(DB::raw('grupo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015)*100),2) as porcentaje'))->where('55_59a','>',0)->groupBy('grupo');
                    break;
                case 17:
                    return $query->select(DB::raw('grupo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015)*100),2) as porcentaje'))->where('60_mas','>',0)->groupBy('grupo');
                    break;
                case 18:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('grupo');
                    break;
            }
        }
    }


public function scopeDat_cat($query, $sex, $grp)
    {
        if($sex==1)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('0_28d','>',0)->groupBy('categoria');
                    break;
                case 2:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('1_11m','>',0)->groupBy('categoria');
                    break;
                case 3:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('1a','>',0)->groupBy('categoria');
                    break;
                case 4:
                    return $query->select(DB::raw('categoria, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('2_4a','>',0)->groupBy('categoria');
                    break;
                case 5:
                    return $query->select(DB::raw('categoria, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('5_9a','>',0)->groupBy('categoria');
                    break;
                case 6:
                    return $query->select(DB::raw('categoria, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('10_11a','>',0)->groupBy('categoria');
                    break;
                case 7:
                    return $query->select(DB::raw('categoria, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('12_14a','>',0)->groupBy('categoria');
                    break;
                case 8:
                    return $query->select(DB::raw('categoria, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('15_17a','>',0)->groupBy('categoria');
                    break;
                case 9:
                    return $query->select(DB::raw('categoria, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('18_24a','>',0)->groupBy('categoria');
                    break;
                case 10:
                    return $query->select(DB::raw('categoria, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('25_29a','>',0)->groupBy('categoria');
                    break;
                case 11:
                    return $query->select(DB::raw('categoria, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('30_34a','>',0)->groupBy('categoria');
                    break;
                case 12:
                    return $query->select(DB::raw('categoria, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('35_39a','>',0)->groupBy('categoria');
                    break;
                case 13:
                    return $query->select(DB::raw('categoria, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('40_44a','>',0)->groupBy('categoria');
                    break;
                case 14:
                    return $query->select(DB::raw('categoria, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('45_49a','>',0)->groupBy('categoria');
                    break;
                case 15:
                    return $query->select(DB::raw('categoria, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('50_54a','>',0)->groupBy('categoria');
                    break;
                case 16:
                    return $query->select(DB::raw('categoria, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('55_59a','>',0)->groupBy('categoria');
                    break;
                case 17:
                    return $query->select(DB::raw('categoria, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('60_mas','>',0)->groupBy('categoria');
                    break;
                case 18:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="M")*100),1) as porcentaje'))->where('sexo','=','M')->groupBy('categoria');
                    break;
            }
        }


        if($sex==2)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('0_28d','>',0)->groupBy('categoria');
                    break;

                case 2:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1_11M),0) as total, round((sum(1_11M)/(select sum(1_11M) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('1_11m','>',0)->groupBy('categoria');
                    break;
                case 3:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('1a','>',0)->groupBy('categoria');
                    break;
                case 4:
                    return $query->select(DB::raw('categoria, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('2_4a','>',0)->groupBy('categoria');
                    break;
                case 5:
                    return $query->select(DB::raw('categoria, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('5_9a','>',0)->groupBy('categoria');
                    break;
                case 6:
                    return $query->select(DB::raw('categoria, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('10_11a','>',0)->groupBy('categoria');
                    break;
                case 7:
                    return $query->select(DB::raw('categoria, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('12_14a','>',0)->groupBy('categoria');
                    break;
                case 8:
                    return $query->select(DB::raw('categoria, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('15_17a','>',0)->groupBy('categoria');
                    break;
                case 9:
                    return $query->select(DB::raw('categoria, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('18_24a','>',0)->groupBy('categoria');
                    break;
                case 10:
                    return $query->select(DB::raw('categoria, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('25_29a','>',0)->groupBy('categoria');
                    break;
                case 11:
                    return $query->select(DB::raw('categoria, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('30_34a','>',0)->groupBy('categoria');
                    break;
                case 12:
                    return $query->select(DB::raw('categoria, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('35_39a','>',0)->groupBy('categoria');
                    break;
                case 13:
                    return $query->select(DB::raw('categoria, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('40_44a','>',0)->groupBy('categoria');
                    break;
                case 14:
                    return $query->select(DB::raw('categoria, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('45_49a','>',0)->groupBy('categoria');
                    break;
                case 15:
                    return $query->select(DB::raw('categoria, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('50_54a','>',0)->groupBy('categoria');
                    break;
                case 16:
                    return $query->select(DB::raw('categoria, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('55_59a','>',0)->groupBy('categoria');
                    break;
                case 17:
                    return $query->select(DB::raw('categoria, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('60_mas','>',0)->groupBy('categoria');
                    break;
                case 18:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="F")*100),1) as porcentaje'))->where('sexo','=','F')->groupBy('categoria');
                    break;
            }
        }

        if($sex==3)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015)*100),2) as porcentaje'))->where('0_28d','>',0)->groupBy('categoria');
                    break;

                case 2:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1_11M),0) as total, round((sum(1_11M)/(select sum(1_11M) from morbilidad_2015)*100),2) as porcentaje'))->where('1_11a','>',0)->groupBy('categoria');
                    break;
                case 3:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015)*100),2) as porcentaje'))->where('1a','>',0)->groupBy('categoria');
                    break;
                case 4:
                    return $query->select(DB::raw('categoria, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015)*100),2) as porcentaje'))->where('2_4a','>',0)->groupBy('categoria');
                    break;
                case 5:
                    return $query->select(DB::raw('categoria, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015)*100),2) as porcentaje'))->where('5_9a','>',0)->groupBy('categoria');
                    break;
                case 6:
                    return $query->select(DB::raw('categoria, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015)*100),2) as porcentaje'))->where('10_11a','>',0)->groupBy('categoria');
                    break;
                case 7:
                    return $query->select(DB::raw('categoria, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015)*100),2) as porcentaje'))->where('12_14a','>',0)->groupBy('categoria');
                    break;
                case 8:
                    return $query->select(DB::raw('categoria, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015)*100),2) as porcentaje'))->where('15_17a','>',0)->groupBy('categoria');
                    break;
                case 9:
                    return $query->select(DB::raw('categoria, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015)*100),2) as porcentaje'))->where('18_24a','>',0)->groupBy('categoria');
                    break;
                case 10:
                    return $query->select(DB::raw('categoria, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015)*100),2) as porcentaje'))->where('25_29a','>',0)->groupBy('categoria');
                    break;
                case 11:
                    return $query->select(DB::raw('categoria, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015)*100),2) as porcentaje'))->where('30_34a','>',0)->groupBy('categoria');
                    break;
                case 12:
                    return $query->select(DB::raw('categoria, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015)*100),2) as porcentaje'))->where('35_39a','>',0)->groupBy('categoria');
                    break;
                case 13:
                    return $query->select(DB::raw('categoria, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015)*100),2) as porcentaje'))->where('40_44a','>',0)->groupBy('categoria');
                    break;
                case 14:
                    return $query->select(DB::raw('categoria, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015)*100),2) as porcentaje'))->where('45_49a','>',0)->groupBy('categoria');
                    break;
                case 15:
                    return $query->select(DB::raw('categoria, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015)*100),2) as porcentaje'))->where('50_54a','>',0)->groupBy('categoria');
                    break;
                case 16:
                    return $query->select(DB::raw('categoria, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015)*100),2) as porcentaje'))->where('55_59a','>',0)->groupBy('categoria');
                    break;
                case 17:
                    return $query->select(DB::raw('categoria, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015)*100),2) as porcentaje'))->where('60_mas','>',0)->groupBy('categoria');
                    break;
                case 18:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('categoria');
                    break;
            }
        }
    }


public function scopeDat_enf($query, $sex, $grp)
    {
        if($sex==1)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('0_28d','>',0)->groupBy('enfermedad');
                    break;
                case 2:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('1_11m','>',0)->groupBy('enfermedad');
                    break;
                case 3:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('1a','>',0)->groupBy('enfermedad');
                    break;
                case 4:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('2_4a','>',0)->groupBy('enfermedad');
                    break;
                case 5:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('5_9a','>',0)->groupBy('enfermedad');
                    break;
                case 6:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('10_11a','>',0)->groupBy('enfermedad');
                    break;
                case 7:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('12_14a','>',0)->groupBy('enfermedad');
                    break;
                case 8:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('15_17a','>',0)->groupBy('enfermedad');
                    break;
                case 9:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('18_24a','>',0)->groupBy('enfermedad');
                    break;
                case 10:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('25_29a','>',0)->groupBy('enfermedad');
                    break;
                case 11:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('30_34a','>',0)->groupBy('enfermedad');
                    break;
                case 12:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('35_39a','>',0)->groupBy('enfermedad');
                    break;
                case 13:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('40_44a','>',0)->groupBy('enfermedad');
                    break;
                case 14:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('45_49a','>',0)->groupBy('enfermedad');
                    break;
                case 15:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('50_54a','>',0)->groupBy('enfermedad');
                    break;
                case 16:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('55_59a','>',0)->groupBy('enfermedad');
                    break;
                case 17:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="M")*100),2) as porcentaje'))->where('sexo','=','M')->where('60_mas','>',0)->groupBy('enfermedad');
                    break;
                case 18:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="M")*100),1) as porcentaje'))->where('sexo','=','M')->groupBy('enfermedad');
                    break;
            }
        }


        if($sex==2)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('0_28d','>',0)->groupBy('enfermedad');
                    break;

                case 2:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1_11M),0) as total, round((sum(1_11M)/(select sum(1_11M) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('1_11m','>',0)->groupBy('enfermedad');
                    break;
                case 3:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('1a','>',0)->groupBy('enfermedad');
                    break;
                case 4:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('2_4a','>',0)->groupBy('enfermedad');
                    break;
                case 5:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('5_9a','>',0)->groupBy('enfermedad');
                    break;
                case 6:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('10_11a','>',0)->groupBy('enfermedad');
                    break;
                case 7:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('12_14a','>',0)->groupBy('enfermedad');
                    break;
                case 8:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('15_17a','>',0)->groupBy('enfermedad');
                    break;
                case 9:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('18_24a','>',0)->groupBy('enfermedad');
                    break;
                case 10:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('25_29a','>',0)->groupBy('enfermedad');
                    break;
                case 11:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('30_34a','>',0)->groupBy('enfermedad');
                    break;
                case 12:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('35_39a','>',0)->groupBy('enfermedad');
                    break;
                case 13:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('40_44a','>',0)->groupBy('enfermedad');
                    break;
                case 14:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('45_49a','>',0)->groupBy('enfermedad');
                    break;
                case 15:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('50_54a','>',0)->groupBy('enfermedad');
                    break;
                case 16:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('55_59a','>',0)->groupBy('enfermedad');
                    break;
                case 17:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="F")*100),2) as porcentaje'))->where('sexo','=','F')->where('60_mas','>',0)->groupBy('enfermedad');
                    break;
                case 18:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="F")*100),1) as porcentaje'))->where('sexo','=','F')->groupBy('enfermedad');
                    break;
            }
        }

        if($sex==3)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015)*100),2) as porcentaje'))->where('0_28d','>',0)->groupBy('enfermedad');
                    break;

                case 2:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1_11M),0) as total, round((sum(1_11M)/(select sum(1_11M) from morbilidad_2015)*100),2) as porcentaje'))->where('1_11a','>',0)->groupBy('enfermedad');
                    break;
                case 3:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015)*100),2) as porcentaje'))->where('1a','>',0)->groupBy('enfermedad');
                    break;
                case 4:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015)*100),2) as porcentaje'))->where('2_4a','>',0)->groupBy('enfermedad');
                    break;
                case 5:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015)*100),2) as porcentaje'))->where('5_9a','>',0)->groupBy('enfermedad');
                    break;
                case 6:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015)*100),2) as porcentaje'))->where('10_11a','>',0)->groupBy('enfermedad');
                    break;
                case 7:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015)*100),2) as porcentaje'))->where('12_14a','>',0)->groupBy('enfermedad');
                    break;
                case 8:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015)*100),2) as porcentaje'))->where('15_17a','>',0)->groupBy('enfermedad');
                    break;
                case 9:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015)*100),2) as porcentaje'))->where('18_24a','>',0)->groupBy('enfermedad');
                    break;
                case 10:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015)*100),2) as porcentaje'))->where('25_29a','>',0)->groupBy('enfermedad');
                    break;
                case 11:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015)*100),2) as porcentaje'))->where('30_34a','>',0)->groupBy('enfermedad');
                    break;
                case 12:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015)*100),2) as porcentaje'))->where('35_39a','>',0)->groupBy('enfermedad');
                    break;
                case 13:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015)*100),2) as porcentaje'))->where('40_44a','>',0)->groupBy('enfermedad');
                    break;
                case 14:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015)*100),2) as porcentaje'))->where('45_49a','>',0)->groupBy('enfermedad');
                    break;
                case 15:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015)*100),2) as porcentaje'))->where('50_54a','>',0)->groupBy('enfermedad');
                    break;
                case 16:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015)*100),2) as porcentaje'))->where('55_59a','>',0)->groupBy('enfermedad');
                    break;
                case 17:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015)*100),2) as porcentaje'))->where('60_mas','>',0)->groupBy('enfermedad');
                    break;
                case 18:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('enfermedad');
                    break;
            }
        }
    }



public function scopeDat_cap_micro($query, $sex, $grp, $mic)
    {
        if($sex==1)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('0_28d','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 2:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('1_11m','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 3:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('1a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 4:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('2_4a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 5:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('5_9a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 6:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('10_11a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 7:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('12_14a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 8:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('15_17a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 9:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('18_24a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 10:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('25_29a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 11:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('30_34a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 12:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('35_39a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 13:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('40_44a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 14:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('45_49a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 15:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('50_54a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 16:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('55_59a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 17:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('60_mas','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 18:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),1) as porcentaje'))->where('sexo','=','M')->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
            }
        }


        if($sex==2)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('0_28d','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;

                case 2:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1_11M),0) as total, round((sum(1_11M)/(select sum(1_11M) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('1_11m','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 3:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('1a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 4:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('2_4a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 5:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('5_9a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 6:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('10_11a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 7:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('12_14a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 8:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('15_17a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 9:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('18_24a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 10:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('25_29a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 11:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('30_34a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 12:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('35_39a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 13:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('40_44a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 14:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('45_49a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 15:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('50_54a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 16:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('55_59a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 17:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('60_mas','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 18:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),1) as porcentaje'))->where('sexo','=','F')->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
            }
        }

        if($sex==3)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;

                case 2:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 3:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 4:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 5:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 6:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 7:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 8:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 9:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 10:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 11:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 12:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 13:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 14:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 15:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 16:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 17:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
                case 18:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->groupBy('capitulo');
                    break;
            }
        }
    }



public function scopeDat_gru_micro($query, $sex, $grp, $mic)
    {
        if($sex==1)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('0_28d','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 2:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('1_11m','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 3:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('1a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 4:
                    return $query->select(DB::raw('grupo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('2_4a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 5:
                    return $query->select(DB::raw('grupo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('5_9a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 6:
                    return $query->select(DB::raw('grupo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('10_11a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 7:
                    return $query->select(DB::raw('grupo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('12_14a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 8:
                    return $query->select(DB::raw('grupo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('15_17a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 9:
                    return $query->select(DB::raw('grupo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('18_24a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 10:
                    return $query->select(DB::raw('grupo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('25_29a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 11:
                    return $query->select(DB::raw('grupo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('30_34a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 12:
                    return $query->select(DB::raw('grupo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('35_39a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 13:
                    return $query->select(DB::raw('grupo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('40_44a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 14:
                    return $query->select(DB::raw('grupo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('45_49a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 15:
                    return $query->select(DB::raw('grupo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('50_54a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 16:
                    return $query->select(DB::raw('grupo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('55_59a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 17:
                    return $query->select(DB::raw('grupo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('60_mas','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 18:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),1) as porcentaje'))->where('sexo','=','M')->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
            }
        }


        if($sex==2)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('0_28d','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;

                case 2:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1_11M),0) as total, round((sum(1_11M)/(select sum(1_11M) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('1_11m','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 3:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('1a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 4:
                    return $query->select(DB::raw('grupo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('2_4a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 5:
                    return $query->select(DB::raw('grupo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('5_9a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 6:
                    return $query->select(DB::raw('grupo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('10_11a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 7:
                    return $query->select(DB::raw('grupo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('12_14a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 8:
                    return $query->select(DB::raw('grupo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('15_17a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 9:
                    return $query->select(DB::raw('grupo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('18_24a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 10:
                    return $query->select(DB::raw('grupo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('25_29a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 11:
                    return $query->select(DB::raw('grupo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('30_34a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 12:
                    return $query->select(DB::raw('grupo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('35_39a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 13:
                    return $query->select(DB::raw('grupo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('40_44a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 14:
                    return $query->select(DB::raw('grupo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('45_49a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 15:
                    return $query->select(DB::raw('grupo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('50_54a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 16:
                    return $query->select(DB::raw('grupo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('55_59a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 17:
                    return $query->select(DB::raw('grupo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('60_mas','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 18:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),1) as porcentaje'))->where('sexo','=','F')->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
            }
        }

        if($sex==3)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;

                case 2:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 3:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 4:
                    return $query->select(DB::raw('grupo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 5:
                    return $query->select(DB::raw('grupo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 6:
                    return $query->select(DB::raw('grupo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 7:
                    return $query->select(DB::raw('grupo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 8:
                    return $query->select(DB::raw('grupo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 9:
                    return $query->select(DB::raw('grupo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 10:
                    return $query->select(DB::raw('grupo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 11:
                    return $query->select(DB::raw('grupo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 12:
                    return $query->select(DB::raw('grupo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 13:
                    return $query->select(DB::raw('grupo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 14:
                    return $query->select(DB::raw('grupo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 15:
                    return $query->select(DB::raw('grupo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 16:
                    return $query->select(DB::raw('grupo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 17:
                    return $query->select(DB::raw('grupo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
                case 18:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->groupBy('grupo');
                    break;
            }
        }
    }



    public function scopeDat_cat_micro($query, $sex, $grp, $mic)
    {
        if($sex==1)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('0_28d','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 2:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('1_11m','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 3:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('1a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 4:
                    return $query->select(DB::raw('categoria, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('2_4a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 5:
                    return $query->select(DB::raw('categoria, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('5_9a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 6:
                    return $query->select(DB::raw('categoria, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('10_11a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 7:
                    return $query->select(DB::raw('categoria, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('12_14a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 8:
                    return $query->select(DB::raw('categoria, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('15_17a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 9:
                    return $query->select(DB::raw('categoria, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('18_24a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 10:
                    return $query->select(DB::raw('categoria, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('25_29a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 11:
                    return $query->select(DB::raw('categoria, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('30_34a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 12:
                    return $query->select(DB::raw('categoria, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('35_39a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 13:
                    return $query->select(DB::raw('categoria, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('40_44a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 14:
                    return $query->select(DB::raw('categoria, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('45_49a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 15:
                    return $query->select(DB::raw('categoria, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('50_54a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 16:
                    return $query->select(DB::raw('categoria, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('55_59a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 17:
                    return $query->select(DB::raw('categoria, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('60_mas','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 18:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),1) as porcentaje'))->where('sexo','=','M')->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
            }
        }


        if($sex==2)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('0_28d','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;

                case 2:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1_11M),0) as total, round((sum(1_11M)/(select sum(1_11M) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('1_11m','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 3:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('1a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 4:
                    return $query->select(DB::raw('categoria, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('2_4a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 5:
                    return $query->select(DB::raw('categoria, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('5_9a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 6:
                    return $query->select(DB::raw('categoria, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('10_11a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 7:
                    return $query->select(DB::raw('categoria, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('12_14a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 8:
                    return $query->select(DB::raw('categoria, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('15_17a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 9:
                    return $query->select(DB::raw('categoria, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('18_24a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 10:
                    return $query->select(DB::raw('categoria, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('25_29a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 11:
                    return $query->select(DB::raw('categoria, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('30_34a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 12:
                    return $query->select(DB::raw('categoria, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('35_39a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 13:
                    return $query->select(DB::raw('categoria, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('40_44a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 14:
                    return $query->select(DB::raw('categoria, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('45_49a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 15:
                    return $query->select(DB::raw('categoria, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('50_54a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 16:
                    return $query->select(DB::raw('categoria, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('55_59a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 17:
                    return $query->select(DB::raw('categoria, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('60_mas','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 18:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),1) as porcentaje'))->where('sexo','=','F')->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
            }
        }

        if($sex==3)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;

                case 2:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 3:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 4:
                    return $query->select(DB::raw('categoria, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 5:
                    return $query->select(DB::raw('categoria, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 6:
                    return $query->select(DB::raw('categoria, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 7:
                    return $query->select(DB::raw('categoria, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 8:
                    return $query->select(DB::raw('categoria, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 9:
                    return $query->select(DB::raw('categoria, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 10:
                    return $query->select(DB::raw('categoria, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 11:
                    return $query->select(DB::raw('categoria, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 12:
                    return $query->select(DB::raw('categoria, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 13:
                    return $query->select(DB::raw('categoria, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 14:
                    return $query->select(DB::raw('categoria, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 15:
                    return $query->select(DB::raw('categoria, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 16:
                    return $query->select(DB::raw('categoria, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 17:
                    return $query->select(DB::raw('categoria, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
                case 18:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->groupBy('categoria');
                    break;
            }
        }
    }



    public function scopeDat_enf_micro($query, $sex, $grp, $mic)
    {
        if($sex==1)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('0_28d','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 2:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('1_11m','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 3:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('1a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 4:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('2_4a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 5:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('5_9a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 6:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('10_11a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 7:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('12_14a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 8:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('15_17a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 9:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('18_24a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 10:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('25_29a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 11:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('30_34a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 12:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('35_39a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 13:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('40_44a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 14:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('45_49a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 15:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('50_54a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 16:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('55_59a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 17:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','M')->where('60_mas','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 18:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.')*100),1) as porcentaje'))->where('sexo','=','M')->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
            }
        }


        if($sex==2)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('0_28d','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;

                case 2:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1_11M),0) as total, round((sum(1_11M)/(select sum(1_11M) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('1_11m','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 3:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('1a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 4:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('2_4a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 5:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('5_9a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 6:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('10_11a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 7:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('12_14a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 8:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('15_17a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 9:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('18_24a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 10:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('25_29a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 11:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('30_34a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 12:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('35_39a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 13:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('40_44a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 14:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('45_49a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 15:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('50_54a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 16:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('55_59a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 17:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),2) as porcentaje'))->where('sexo','=','F')->where('60_mas','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 18:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.')*100),1) as porcentaje'))->where('sexo','=','F')->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
            }
        }

        if($sex==3)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;

                case 2:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 3:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 4:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 5:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 6:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 7:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 8:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 9:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 10:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 11:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 12:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 13:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 14:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 15:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 16:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 17:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
                case 18:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->groupBy('enfermedad');
                    break;
            }
        }
    }


public function scopeDat_cap_estab($query, $sex, $grp, $mic, $est)
    {
        if($sex==1)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 2:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 3:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 4:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 5:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 6:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 7:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 8:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 9:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 10:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 11:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 12:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 13:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 14:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 15:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 16:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 17:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 18:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),1) as porcentaje'))->where('sexo','=','M')->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
            }
        }


        if($sex==2)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;

                case 2:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1_11M),0) as total, round((sum(1_11M)/(select sum(1_11M) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 3:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 4:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 5:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 6:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 7:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 8:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 9:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 10:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 11:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 12:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 13:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 14:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 15:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 16:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 17:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 18:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),1) as porcentaje'))->where('sexo','=','F')->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
            }
        }

        if($sex==3)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;

                case 2:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 3:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 4:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 5:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 6:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 7:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 8:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 9:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 10:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 11:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 12:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 13:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 14:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 15:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 16:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 17:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
                case 18:
                    return $query->select(DB::raw('capitulo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo');
                    break;
            }
        }
    }


public function scopeDat_gru_estab($query, $sex, $grp, $mic, $est)
    {
        if($sex==1)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 2:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 3:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 4:
                    return $query->select(DB::raw('grupo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 5:
                    return $query->select(DB::raw('grupo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 6:
                    return $query->select(DB::raw('grupo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 7:
                    return $query->select(DB::raw('grupo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 8:
                    return $query->select(DB::raw('grupo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 9:
                    return $query->select(DB::raw('grupo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 10:
                    return $query->select(DB::raw('grupo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 11:
                    return $query->select(DB::raw('grupo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 12:
                    return $query->select(DB::raw('grupo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 13:
                    return $query->select(DB::raw('grupo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 14:
                    return $query->select(DB::raw('grupo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 15:
                    return $query->select(DB::raw('grupo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 16:
                    return $query->select(DB::raw('grupo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 17:
                    return $query->select(DB::raw('grupo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 18:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),1) as porcentaje'))->where('sexo','=','M')->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
            }
        }


        if($sex==2)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;

                case 2:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1_11M),0) as total, round((sum(1_11M)/(select sum(1_11M) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 3:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 4:
                    return $query->select(DB::raw('grupo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 5:
                    return $query->select(DB::raw('grupo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 6:
                    return $query->select(DB::raw('grupo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 7:
                    return $query->select(DB::raw('grupo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 8:
                    return $query->select(DB::raw('grupo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 9:
                    return $query->select(DB::raw('grupo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 10:
                    return $query->select(DB::raw('grupo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 11:
                    return $query->select(DB::raw('grupo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 12:
                    return $query->select(DB::raw('grupo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 13:
                    return $query->select(DB::raw('grupo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 14:
                    return $query->select(DB::raw('grupo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 15:
                    return $query->select(DB::raw('grupo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 16:
                    return $query->select(DB::raw('grupo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 17:
                    return $query->select(DB::raw('grupo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 18:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),1) as porcentaje'))->where('sexo','=','F')->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
            }
        }

        if($sex==3)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;

                case 2:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 3:
                    return $query->select(DB::raw('grupo, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 4:
                    return $query->select(DB::raw('grupo, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 5:
                    return $query->select(DB::raw('grupo, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 6:
                    return $query->select(DB::raw('grupo, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 7:
                    return $query->select(DB::raw('grupo, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 8:
                    return $query->select(DB::raw('grupo, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 9:
                    return $query->select(DB::raw('grupo, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 10:
                    return $query->select(DB::raw('grupo, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 11:
                    return $query->select(DB::raw('grupo, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 12:
                    return $query->select(DB::raw('grupo, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 13:
                    return $query->select(DB::raw('grupo, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 14:
                    return $query->select(DB::raw('grupo, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 15:
                    return $query->select(DB::raw('grupo, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 16:
                    return $query->select(DB::raw('grupo, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 17:
                    return $query->select(DB::raw('grupo, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
                case 18:
                    return $query->select(DB::raw('grupo, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo');
                    break;
            }
        }
    }



public function scopeDat_cat_estab($query, $sex, $grp, $mic, $est)
    {
        if($sex==1)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 2:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 3:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 4:
                    return $query->select(DB::raw('categoria, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 5:
                    return $query->select(DB::raw('categoria, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 6:
                    return $query->select(DB::raw('categoria, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 7:
                    return $query->select(DB::raw('categoria, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 8:
                    return $query->select(DB::raw('categoria, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 9:
                    return $query->select(DB::raw('categoria, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 10:
                    return $query->select(DB::raw('categoria, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 11:
                    return $query->select(DB::raw('categoria, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 12:
                    return $query->select(DB::raw('categoria, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 13:
                    return $query->select(DB::raw('categoria, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 14:
                    return $query->select(DB::raw('categoria, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 15:
                    return $query->select(DB::raw('categoria, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 16:
                    return $query->select(DB::raw('categoria, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 17:
                    return $query->select(DB::raw('categoria, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 18:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),1) as porcentaje'))->where('sexo','=','M')->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
            }
        }


        if($sex==2)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;

                case 2:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1_11M),0) as total, round((sum(1_11M)/(select sum(1_11M) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 3:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 4:
                    return $query->select(DB::raw('categoria, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 5:
                    return $query->select(DB::raw('categoria, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 6:
                    return $query->select(DB::raw('categoria, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 7:
                    return $query->select(DB::raw('categoria, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 8:
                    return $query->select(DB::raw('categoria, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 9:
                    return $query->select(DB::raw('categoria, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 10:
                    return $query->select(DB::raw('categoria, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 11:
                    return $query->select(DB::raw('categoria, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 12:
                    return $query->select(DB::raw('categoria, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 13:
                    return $query->select(DB::raw('categoria, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 14:
                    return $query->select(DB::raw('categoria, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 15:
                    return $query->select(DB::raw('categoria, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 16:
                    return $query->select(DB::raw('categoria, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 17:
                    return $query->select(DB::raw('categoria, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 18:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),1) as porcentaje'))->where('sexo','=','F')->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
            }
        }

        if($sex==3)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;

                case 2:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 3:
                    return $query->select(DB::raw('categoria, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 4:
                    return $query->select(DB::raw('categoria, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 5:
                    return $query->select(DB::raw('categoria, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 6:
                    return $query->select(DB::raw('categoria, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 7:
                    return $query->select(DB::raw('categoria, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 8:
                    return $query->select(DB::raw('categoria, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 9:
                    return $query->select(DB::raw('categoria, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 10:
                    return $query->select(DB::raw('categoria, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 11:
                    return $query->select(DB::raw('categoria, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 12:
                    return $query->select(DB::raw('categoria, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 13:
                    return $query->select(DB::raw('categoria, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 14:
                    return $query->select(DB::raw('categoria, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 15:
                    return $query->select(DB::raw('categoria, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 16:
                    return $query->select(DB::raw('categoria, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 17:
                    return $query->select(DB::raw('categoria, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
                case 18:
                    return $query->select(DB::raw('categoria, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria');
                    break;
            }
        }
    }


public function scopeDat_enf_estab($query, $sex, $grp, $mic, $est)
    {
        if($sex==1)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 2:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 3:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 4:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 5:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 6:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 7:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 8:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 9:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 10:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 11:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 12:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 13:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 14:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 15:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 16:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 17:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','M')->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 18:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="M" and id_micro_red='.$mic.' and id_eess='.$est.')*100),1) as porcentaje'))->where('sexo','=','M')->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
            }
        }


        if($sex==2)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;

                case 2:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1_11M),0) as total, round((sum(1_11M)/(select sum(1_11M) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 3:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 4:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 5:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 6:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 7:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 8:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 9:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 10:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 11:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 12:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 13:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 14:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 15:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 16:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 17:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('sexo','=','F')->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 18:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo="F" and id_micro_red='.$mic.' and id_eess='.$est.')*100),1) as porcentaje'))->where('sexo','=','F')->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
            }
        }

        if($sex==3)
        {
            switch($grp)
            {
                case 1:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d),0) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;

                case 2:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1_11m),0) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 3:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(1a),0) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 4:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(2_4a),0) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 5:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(5_9a),0) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 6:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(10_11a),0) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 7:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(12_14a),0) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 8:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(15_17a),0) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 9:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(18_24a),0) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 10:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(25_29a),0) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 11:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(30_34a),0) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 12:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(35_39a),0) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 13:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(40_44a),0) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 14:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(45_49a),0) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 15:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(50_54a),0) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 16:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(55_59a),0) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 17:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(60_mas),0) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
                case 18:
                    return $query->select(DB::raw('enfermedad, FORMAT(sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas),0) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad');
                    break;
            }
        }
    }



public function scopeDat_graf_cap_estab($query, $sex, $grp, $amb, $mic, $est)
    {
        if($sex!='A')
        {
            switch($grp)
            {
                case 1:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('0_28d','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }

                case 2:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('1_11m','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 3:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('1a','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 4:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('2_4a','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 5:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('5_9a','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 6:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('10_11a','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 7:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('12_14a','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 8:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('15_17a','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 9:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('18_24a','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 10:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('25_29a','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 11:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('30_34a','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 12:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('35_39a','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 13:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('40_44a','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 14:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('45_49a','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 15:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('50_54a','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 16:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('55_59a','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 17:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('60_mas','>',0)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 18:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('capitulo')->orderBy('total','desc');
                            break;
                    }
            }
        }



        if($sex=='A')
        {
            switch($grp)
            {
                case 1:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015)*100),2) as porcentaje'))->where('0_28d','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }

                case 2:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015)*100),2) as porcentaje'))->where('1_11m','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 3:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015)*100),2) as porcentaje'))->where('1a','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 4:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015)*100),2) as porcentaje'))->where('2_4a','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 5:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015)*100),2) as porcentaje'))->where('5_9a','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 6:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015)*100),2) as porcentaje'))->where('10_11a','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 7:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015)*100),2) as porcentaje'))->where('12_14a','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 8:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015)*100),2) as porcentaje'))->where('15_17a','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 9:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015)*100),2) as porcentaje'))->where('18_24a','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 10:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015)*100),2) as porcentaje'))->where('25_29a','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 11:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015)*100),2) as porcentaje'))->where('30_34a','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 12:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015)*100),2) as porcentaje'))->where('35_39a','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 13:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015)*100),2) as porcentaje'))->where('40_44a','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 14:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015)*100),2) as porcentaje'))->where('45_49a','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 15:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015)*100),2) as porcentaje'))->where('50_54a','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 16:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015)*100),2) as porcentaje'))->where('55_59a','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 17:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015)*100),2) as porcentaje'))->where('60_mas','>',0)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                    }
                case 18:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('capitulo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('capitulo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->groupBy('capitulo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('capitulo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('capitulo')->orderBy('total','desc');
                            break;
                    }
            }
        }
    }




public function scopeDat_graf_gru_estab($query, $sex, $grp, $amb, $mic, $est)
    {
        if($sex!='A')
        {
            switch($grp)
            {
                case 1:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('0_28d','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }

                case 2:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('1_11m','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 3:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('1a','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 4:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('2_4a','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 5:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('5_9a','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 6:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('10_11a','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 7:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('12_14a','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 8:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('15_17a','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 9:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('18_24a','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 10:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('25_29a','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 11:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('30_34a','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 12:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('35_39a','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 13:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('40_44a','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 14:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('45_49a','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 15:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('50_54a','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 16:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('55_59a','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 17:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('60_mas','>',0)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 18:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('grupo')->orderBy('total','desc');
                            break;
                    }
            }
        }



        if($sex=='A')
        {
            switch($grp)
            {
                case 1:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015)*100),2) as porcentaje'))->where('0_28d','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }

                case 2:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015)*100),2) as porcentaje'))->where('1_11m','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 3:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015)*100),2) as porcentaje'))->where('1a','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 4:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015)*100),2) as porcentaje'))->where('2_4a','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 5:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015)*100),2) as porcentaje'))->where('5_9a','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 6:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015)*100),2) as porcentaje'))->where('10_11a','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 7:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015)*100),2) as porcentaje'))->where('12_14a','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 8:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015)*100),2) as porcentaje'))->where('15_17a','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 9:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015)*100),2) as porcentaje'))->where('18_24a','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 10:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015)*100),2) as porcentaje'))->where('25_29a','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 11:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015)*100),2) as porcentaje'))->where('30_34a','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 12:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015)*100),2) as porcentaje'))->where('35_39a','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 13:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015)*100),2) as porcentaje'))->where('40_44a','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 14:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015)*100),2) as porcentaje'))->where('45_49a','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 15:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015)*100),2) as porcentaje'))->where('50_54a','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 16:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015)*100),2) as porcentaje'))->where('55_59a','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 17:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015)*100),2) as porcentaje'))->where('60_mas','>',0)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;

                    }
                case 18:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('grupo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('grupo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->groupBy('grupo')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('grupo, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('grupo')->orderBy('total','desc');
                            break;
                    }
            }
        }
    }



public function scopeDat_graf_cat_estab($query, $sex, $grp, $amb, $mic, $est)
    {
        if($sex!='A')
        {
            switch($grp)
            {
                case 1:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('0_28d','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }

                case 2:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('1_11m','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 3:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('1a','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 4:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('2_4a','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 5:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('5_9a','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 6:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('10_11a','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 7:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('12_14a','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 8:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('15_17a','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 9:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('18_24a','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 10:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('25_29a','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 11:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('30_34a','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 12:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('35_39a','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 13:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('40_44a','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 14:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('45_49a','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 15:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('50_54a','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 16:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('55_59a','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 17:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('60_mas','>',0)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 18:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('categoria')->orderBy('total','desc');
                            break;
                    }
            }
        }



        if($sex=='A')
        {
            switch($grp)
            {
                case 1:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015)*100),2) as porcentaje'))->where('0_28d','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }

                case 2:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015)*100),2) as porcentaje'))->where('1_11m','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 3:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015)*100),2) as porcentaje'))->where('1a','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 4:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015)*100),2) as porcentaje'))->where('2_4a','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 5:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015)*100),2) as porcentaje'))->where('5_9a','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 6:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015)*100),2) as porcentaje'))->where('10_11a','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 7:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015)*100),2) as porcentaje'))->where('12_14a','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 8:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015)*100),2) as porcentaje'))->where('15_17a','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 9:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015)*100),2) as porcentaje'))->where('18_24a','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 10:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015)*100),2) as porcentaje'))->where('25_29a','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 11:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015)*100),2) as porcentaje'))->where('30_34a','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 12:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015)*100),2) as porcentaje'))->where('35_39a','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 13:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015)*100),2) as porcentaje'))->where('40_44a','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 14:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015)*100),2) as porcentaje'))->where('45_49a','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 15:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015)*100),2) as porcentaje'))->where('50_54a','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 16:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015)*100),2) as porcentaje'))->where('55_59a','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 17:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015)*100),2) as porcentaje'))->where('60_mas','>',0)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;

                    }
                case 18:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('categoria, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('categoria, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->groupBy('categoria')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('categoria, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('categoria')->orderBy('total','desc');
                            break;
                    }
            }
        }
    }



public function scopeDat_graf_enf_estab($query, $sex, $grp, $amb, $mic, $est)
    {
        if($sex!='A')
        {
            switch($grp)
            {
                case 1:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('0_28d','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }

                case 2:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('1_11m','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 3:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('1a','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 4:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('2_4a','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 5:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('5_9a','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 6:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('10_11a','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 7:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('12_14a','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 8:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('15_17a','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 9:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('18_24a','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 10:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('25_29a','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 11:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('30_34a','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 12:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('35_39a','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 13:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('40_44a','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 14:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('45_49a','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 15:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('50_54a','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 16:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('55_59a','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 17:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('60_mas','>',0)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'" )*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 18:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where sexo = "'.$sex.'")*100),2) as porcentaje'))->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.' and sexo = "'.$sex.'")*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->where('sexo','=',$sex)->groupBy('enfermedad')->orderBy('total','desc');
                            break;
                    }
            }
        }



        if($sex=='A')
        {
            switch($grp)
            {
                case 1:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015)*100),2) as porcentaje'))->where('0_28d','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }

                case 2:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015)*100),2) as porcentaje'))->where('1_11m','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 3:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015)*100),2) as porcentaje'))->where('1a','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('1a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 4:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015)*100),2) as porcentaje'))->where('2_4a','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 5:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015)*100),2) as porcentaje'))->where('5_9a','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 6:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015)*100),2) as porcentaje'))->where('10_11a','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 7:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015)*100),2) as porcentaje'))->where('12_14a','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 8:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015)*100),2) as porcentaje'))->where('15_17a','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 9:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015)*100),2) as porcentaje'))->where('18_24a','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 10:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015)*100),2) as porcentaje'))->where('25_29a','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 11:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015)*100),2) as porcentaje'))->where('30_34a','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 12:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015)*100),2) as porcentaje'))->where('35_39a','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 13:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015)*100),2) as porcentaje'))->where('40_44a','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 14:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015)*100),2) as porcentaje'))->where('45_49a','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 15:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015)*100),2) as porcentaje'))->where('50_54a','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 16:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015)*100),2) as porcentaje'))->where('55_59a','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 17:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015)*100),2) as porcentaje'))->where('60_mas','>',0)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' )*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                    }
                case 18:
                    switch($amb)
                    {
                        case 'R':
                            return $query->select(DB::raw('enfermedad, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),2) as porcentaje'))->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'M':
                            return $query->select(DB::raw('enfermedad, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.')*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->groupBy('enfermedad')->orderBy('total','desc');
                            break;

                        case 'E':
                            return $query->select(DB::raw('enfermedad, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015 where id_micro_red='.$mic.' and id_eess='.$est.')*100),2) as porcentaje'))->where('id_micro_red','=',$mic)->where('id_eess','=',$est)->groupBy('enfermedad')->orderBy('total','desc');
                            break;
                    }
            }
        }
    }



public function scopeDat_graf_anl_estab($query, $sex, $grp, $clf, $cod)
    {
        if($sex!='A')
        {
            switch($grp)
            {
                case 1:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                    }

                case 2:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }

                case 3:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('1a','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('1a','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('1a','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('1a','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 4:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 5:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 6:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 7:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 8:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 9:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 10:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 11:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 12:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 13:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 14:
                    case 'C':
                            return $query->select(DB::raw('microred, eess, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                case 15:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 16:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 17:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo = "'.$sex.'" and id_capitulo='.$cod.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('sexo','=',$sex)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo = "'.$sex.'" and id_grupo='.$cod.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('sexo','=',$sex)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo = "'.$sex.'" and id_categoria='.$cod.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('sexo','=',$sex)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where sexo = "'.$sex.'" and id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('sexo','=',$sex)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }

                case 18:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),2) as porcentaje'))->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),2) as porcentaje'))->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),2) as porcentaje'))->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),2) as porcentaje'))->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
            }
        }



        if($sex=='A')
        {
            switch($grp)
            {
                case 1:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(0_28d) as total, round((sum(0_28d)/(select sum(0_28d) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('0_28d','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                    }

                case 2:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(1_11m) as total, round((sum(1_11m)/(select sum(1_11m) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('1_11m','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }

                case 3:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('1a','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('1a','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('1a','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(1a) as total, round((sum(1a)/(select sum(1a) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('1a','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 4:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(2_4a) as total, round((sum(2_4a)/(select sum(2_4a) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('2_4a','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 5:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(5_9a) as total, round((sum(5_9a)/(select sum(5_9a) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('5_9a','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 6:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(10_11a) as total, round((sum(10_11a)/(select sum(10_11a) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('10_11a','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 7:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(12_14a) as total, round((sum(12_14a)/(select sum(12_14a) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('12_14a','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 8:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(15_17a) as total, round((sum(15_17a)/(select sum(15_17a) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('15_17a','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 9:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(18_24a) as total, round((sum(18_24a)/(select sum(18_24a) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('18_24a','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 10:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(25_29a) as total, round((sum(25_29a)/(select sum(25_29a) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('25_29a','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 11:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(30_34a) as total, round((sum(30_34a)/(select sum(30_34a) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('30_34a','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 12:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(35_39a) as total, round((sum(35_39a)/(select sum(35_39a) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('35_39a','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 13:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(40_44a) as total, round((sum(40_44a)/(select sum(40_44a) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('40_44a','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 14:
                    switch($clf)
                    {
                    case 'C':
                            return $query->select(DB::raw('microred, eess, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(45_49a) as total, round((sum(45_49a)/(select sum(45_49a) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('45_49a','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 15:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(50_54a) as total, round((sum(50_54a)/(select sum(50_54a) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('50_54a','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 16:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(55_59a) as total, round((sum(55_59a)/(select sum(55_59a) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('55_59a','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 17:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_capitulo='.$cod.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_grupo='.$cod.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_categoria='.$cod.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(60_mas) as total, round((sum(60_mas)/(select sum(60_mas) from morbilidad_2015 where id_enfermedad='.$cod.')*100),2) as porcentaje'))->where('60_mas','>',0)->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
                case 18:
                    switch($clf)
                    {
                        case 'C':
                            return $query->select(DB::raw('microred, eess, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),2) as porcentaje'))->where('id_capitulo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'G':
                            return $query->select(DB::raw('microred, eess, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),2) as porcentaje'))->where('id_grupo','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;

                        case 'T':
                            return $query->select(DB::raw('microred, eess, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),2) as porcentaje'))->where('id_categoria','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                        case 'E':
                            return $query->select(DB::raw('microred, eess, sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) as total, round((sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas)/(select sum(0_28d+1_11m+1a+2_4a+5_9a+10_11a+12_14a+15_17a+18_24a+25_29a+30_34a+35_39a+40_44a+45_49a+50_54a+55_59a+60_mas) from morbilidad_2015)*100),2) as porcentaje'))->where('id_enfermedad','=',$cod)->groupBy('microred')->groupBy('eess')->orderBy('microred','asc')->orderBy('total','desc');
                            break;
                    }
            }
        }



    }




}