<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UnitEx;

class UnitExController extends Controller
{
    public function add(Request $req)
    {
    	$ud=new UnitEx;
    	$ud->no_unit=$req->unit;
    	$ud->cn=$req->cn;
    	$ud->tipe_unit=$req->tipe;
    	$ud->save();
    	return ['msg'=>'Data saved','item'=>$ud];
    }

    public function all()
    {
    	return UnitEx::all();
    }
}
