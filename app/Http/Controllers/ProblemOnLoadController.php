<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProblemOnLoad;

class ProblemOnLoadController extends Controller
{
    public function prob($load)
    {
    	return ProblemOnLoad::where('load','=',$load)->get();
    }

    public function add(Request $req)
    {
    	$pol=new ProblemOnLoad;
    	$pol->load=$req->load;
    	$Pol->problem=$req->problem;
    	$pol->save();
    	return ['msg'=>'Problem tersimpan','item'=>$pol];
    }
}
