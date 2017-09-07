<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('morb_cap','Ctrl_Morb@morb_cap');
Route::get('act_morb_cap/{sex}/{grp}','Ctrl_Morb@dat_morb_cap');

Route::get('morb_gru','Ctrl_Morb@morb_gru');
Route::get('act_morb_gru/{sex}/{grp}','Ctrl_Morb@dat_morb_gru');

Route::get('morb_cat','Ctrl_Morb@morb_cat');
Route::get('act_morb_cat/{sex}/{grp}','Ctrl_Morb@dat_morb_cat');

Route::get('morb_enf','Ctrl_Morb@morb_enf');
Route::get('act_morb_enf/{sex}/{grp}','Ctrl_Morb@dat_morb_enf');

Route::get('morb_cap_micro','Ctrl_Morb@morb_cap_micro');
Route::get('act_morb_cap_micro/{sex}/{grp}/{mic}','Ctrl_Morb@dat_morb_cap_micro');

Route::get('morb_gru_micro','Ctrl_Morb@morb_gru_micro');
Route::get('act_morb_gru_micro/{sex}/{grp}/{mic}','Ctrl_Morb@dat_morb_gru_micro');

Route::get('morb_cat_micro','Ctrl_Morb@morb_cat_micro');
Route::get('act_morb_cat_micro/{sex}/{grp}/{mic}','Ctrl_Morb@dat_morb_cat_micro');

Route::get('morb_enf_micro','Ctrl_Morb@morb_enf_micro');
Route::get('act_morb_enf_micro/{sex}/{grp}/{mic}','Ctrl_Morb@dat_morb_enf_micro');

Route::get('morb_cap_estab','Ctrl_Morb@morb_cap_estab');
Route::get('dat_eess/{mr}','Ctrl_Morb@datos_eess');
Route::get('act_morb_cap_estab/{sex}/{grp}/{mic}/{est}','Ctrl_Morb@dat_morb_cap_estab');

Route::get('morb_gru_estab','Ctrl_Morb@morb_gru_estab');
Route::get('act_morb_gru_estab/{sex}/{grp}/{mic}/{est}','Ctrl_Morb@dat_morb_gru_estab');

Route::get('morb_cat_estab','Ctrl_Morb@morb_cat_estab');
Route::get('act_morb_cat_estab/{sex}/{grp}/{mic}/{est}','Ctrl_Morb@dat_morb_cat_estab');

Route::get('morb_enf_estab','Ctrl_Morb@morb_enf_estab');
Route::get('act_morb_enf_estab/{sex}/{grp}/{mic}/{est}','Ctrl_Morb@dat_morb_enf_estab');

Route::get('graf_cap_estab','Ctrl_Morb@graf_cap_estab');
Route::get('act_graf_cap_estab/{sex}/{grp}/{amb}/{mic}/{est}','Ctrl_Morb@dat_graf_cap_estab');

Route::get('graf_gru_estab','Ctrl_Morb@graf_gru_estab');
Route::get('act_graf_gru_estab/{sex}/{grp}/{amb}/{mic}/{est}','Ctrl_Morb@dat_graf_gru_estab');

Route::get('graf_cat_estab','Ctrl_Morb@graf_cat_estab');
Route::get('act_graf_cat_estab/{sex}/{grp}/{amb}/{mic}/{est}','Ctrl_Morb@dat_graf_cat_estab');

Route::get('graf_enf_estab','Ctrl_Morb@graf_enf_estab');
Route::get('act_graf_enf_estab/{sex}/{grp}/{amb}/{mic}/{est}','Ctrl_Morb@dat_graf_enf_estab');

Route::get('graf_anl_estab','Ctrl_Morb@graf_anl_estab');
Route::get('dat_capitulo/{sexo}/{edad}','Ctrl_Morb@datos_capitulo');
Route::get('dat_grupo/{sexo}/{edad}/{cp}','Ctrl_Morb@datos_grupo_anl');
Route::get('dat_categoria/{sexo}/{edad}/{gr}','Ctrl_Morb@datos_categoria_anl');
Route::get('dat_enfermedad/{sexo}/{edad}/{ct}','Ctrl_Morb@datos_enfermedad_anl');
Route::get('act_graf_anl_estab/{sex}/{grp}/{clf}/{cod}','Ctrl_Morb@dat_graf_anl_estab');