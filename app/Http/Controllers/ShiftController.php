<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shift;

class ShiftController extends Controller
{
    public function history($driver)
    {
    	return Shift::where('driver','=',$driver)->orderBy('hm_date','desc')->get();
    }

    public function start(Request $req)
    {
    	$t=date('H:i:s');
    	$d=date('Y-m-d');
    	$s=new Shift;
    	$s->driver=$req->driver;
    	$s->kode=$req->driver . 'a' . str_replace('-', 'b', $d);
    	$s->dt=$req->dt;
    	$s->hm_date=$d;
    	$s->start_time=$t;
		$s->hm_start=$req->hm;
		$s->hm_stop=null;
		$s->stop_time=null;
    	$s->save();
    	return ['msg'=>'shift started','item'=>$s];
    }

    public function stop(Request $req)
    {
    	$t=date('H:i:s');
    	$s=Shift::find($req->shift);
    	$s->stop_time=$t;
    	$s->hm_stop=$req->stop;
    	$s->save();
    	return ['msg'=>'shift stoped','item'=>$s];
    }
}
