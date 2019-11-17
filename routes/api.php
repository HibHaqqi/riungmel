<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//start login
Route::get('driver','DriverController@all');//admin
Route::post('driver/login','DriverController@login');//android
Route::post('driver/reg','DriverController@add');//admin
Route::get('login/{driver}','LoggedInController@allowFor');//android
Route::post('login/verified','LoggedInController@verify');//admin
Route::get('login/reject/{driver}/{mac}','LoggedInController@del');//android
// end login
Route::get('shift/{driver}','ShiftController@history'); //history
//start pilih dt
Route::post('dt/reg','UnitDtController@add');//admin
Route::get('dt','UnitDtController@all');//android
Route::post('start/shift','ShiftController@start');//android
//end pilih dt
Route::post('stop/shift','ShiftController@stop');//end shift (android)
//start loading/dumping material
Route::post('loading/shift','LoadOnShiftController@loading');//loading
Route::get('exa/shift','UnitExController@all');//android
Route::get('muatan/{shift}','LoadOnShiftController@kinerja');//admin
Route::get('mat/shift','MaterialController@all');//android
Route::post('exa/reg','UnitExController@add');//admin
Route::post('mat/reg','MaterialController@add');//admin
Route::post('dumping/shift','LoadOnShiftController@dumping');//loading
//end loading/dumping material
//start breakdown/delay
Route::get('jeda','JedaController@all');//android
Route::post('jeda/start','JedaController@start');//android
Route::post('jeda/stop','JedaController@stop');//android
Route::get('gangguan/{shift}','DelayOnShiftController@all');//admin
//end delay