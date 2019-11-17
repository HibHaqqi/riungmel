<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
use App\LoggedIn;

class DriverController extends Controller
{
    public function login(Request $req)
    {
    	$supir=Driver::where('nrp','=',$req->nrp)->first();
    	if (null!=$supir){
    		if ($req->password==$supir->password){
    			$log=new LoggedIn;
    			$log->driver=$supir->no;
    			$log->mac_addr=$req->mac;
    			$log->verified=false;
    			$log->save();
    			return ['msg'=>'proses login anda sedang diproses','item'=>$log];
    		} else return ['msg'=>'internal error','item'=>null];
    	} else return ['msg'=>'internal error','item'=>null];
    }

    public function all()
    {
    	return Driver::all();
    }

    public function add(Request $req){
    	$supir=new Driver;
    	$supir->nrp=$req->nrp;
    	$supir->nama=$req->nama;
    	$supir->password=$req->password;
    	$supir->save();
    	return ['no'=>$supir->no];
    }
}
