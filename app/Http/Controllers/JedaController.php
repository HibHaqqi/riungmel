<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jeda;
use App\DelayOnShift;

class JedaController extends Controller
{
    public function all()
    {
    	return Jeda::all();
    }

    public function start(Request $req)
    {
    	$d=new DelayOnShift;
    	$d->shift=$req->shift;
    	$d->jeda=$req->jeda;
    	$d->start=$req->start;
    	$d->ket=$req->ket;
    	$d->save();
    	return ['msg'=>'Data saved','item'=>$d];
    }

    public function stop(Request $req)
    {
    	DelayOnShift::where([['shift','=',$req->shift],['jeda','=',$req->jeda],['start','=',$req->start]])->update(['stop'=>$req->stop,'ket'=>$req->ket]);
    	$d=DelayOnShift::where([['shift','=',$req->shift],['jeda','=',$req->jeda],['start','=',$req->start]])->first();
    	return ['msg'=>'Data saved','item'=>$d];
    }
}
