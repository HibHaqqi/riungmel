<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoadOnShift;

class LoadOnShiftController extends Controller
{
    public function loading(Request $req)
    {
    	$l=new LoadOnShift;
    	$l->shift=$req->shift;
    	$l->material=$req->material;
    	$l->distance=$req->distance;
    	$l->exa=$req->exa;
    	$l->on_load=$req->start;
    	$l->dumped=false;
    	$l->save();
    	return ['msg'=>'Data saved','item'=>$l];
    }

    public function dumping(Request $req)
    {
    	LoadOnShift::where([['shift','=',$req->shift],['material','=',$req->material],['exa','=',$req->exa]])->update(['unload'=>$req->unload,'dumped'=>true]);
    	$l=LoadOnShift::where([['shift','=',$req->shift],['material','=',$req->material],['exa','=',$req->exa],['on_load','=',$req->start]])->get();
    	return ['msg'=>'Data saved','item'=>$l];
    }

    public function kinerja($shift)
    {
    	return LoadOnShift::where('shift','=',$shift)->orderBy('on_load','desc')->get();
    }
}
