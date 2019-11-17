<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

class MaterialController extends Controller
{
    public function all()
    {
    	return Material::all();
    }

    public function add(Request $req)
    {
    	$m=new Material;
    	$m->material=$req->material;
    	$m->swell=$req->swell;
    	$m->save();
    	return ['msg'=>'Data saved','item'=>$m];
    }
}
