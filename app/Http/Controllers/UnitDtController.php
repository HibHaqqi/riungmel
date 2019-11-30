<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UnitDt;
use App\Shift;

class UnitDtController extends Controller
{
    public function add(Request $req)
    {
    	$ud=new UnitDt;
    	$ud->no_unit=$req->unit;
    	$ud->cn=$req->cn;
    	$ud->tipe=$req->tipe;
    	$ud->cap_vessel=$req->cap;
    	$ud->save();
    	return ['msg'=>'Data saved'];
    }

    public function all()
    {
    	return UnitDt::where('ready','=',1)->get();
    }

    public function hmUsed($dt)
    {
        $sum=0.0;
        foreach (Shift::where('dt','=',$dt)->get() as $shift) {
            $sum+=$shift->hm_stop-$shift->hm_start;
        } return ['last_hm'=>$sum];
    }
}
