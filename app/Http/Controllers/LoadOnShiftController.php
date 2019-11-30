<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoadOnShift;
use App\Kosongan;

class LoadOnShiftController extends Controller
{
    public function loading(Request $req)
    {
    	$l=new LoadOnShift;
        $l->kode=$req->kode;
		$l->shift=$req->shift;
		$l->dt=$req->dt;
    	$l->material=$req->material;
    	$l->exa=$req->exa;
		$l->on_load=$req->start;
		$l->distance=null;
		$l->unload=null;
    	$l->dumped=false;
    	$l->save();
    	return ['msg'=>'Data saved','item'=>$l];
    }

    public function dumping(Request $req)
    {
		LoadOnShift::where('kode','=',$req->kode)->update(['unload'=>$req->unload,'dumped'=>true,
		'distance'=>$req->distance]);
        $l=LoadOnShift::where('kode','=',$req->kode)->get();
    	return ['msg'=>'Data saved','item'=>$l];
    }

    public function kinerja($shift)
    {
    	return LoadOnShift::where('shift','=',$shift)->orderBy('on_load','desc')->get();
    }
}
