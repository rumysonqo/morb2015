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