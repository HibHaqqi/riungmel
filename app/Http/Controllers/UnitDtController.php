<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UnitDt;

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
    	return UnitDt::all();
    }
}
