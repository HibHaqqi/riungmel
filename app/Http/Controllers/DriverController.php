<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Driver;
use App\LoggedIn;

class DriverController extends Controller
{
    public function login(Request $req)
    {
    	$supir=Driver::where('nrp','=',$req->nrp)->first();
    	if (null!=$supir){
    		if ($req->password==$supir->password){
    			$log=LoggedIn::where('driver','=',$supir->no)->first();
                if(!is_null($log)){
                    $log->mac_addr=$req->mac;
                    $log->save();
                } else {
                    $log2=new LoggedIn;
                    $log2->driver=$supir->no;
                    $log2->mac_addr=$req->mac;
                    $log2->verified=true;
                    $log2->save();
                    $log=$log2;
                } return ['msg'=>'login anda terverifikasi','item'=>$log];
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
