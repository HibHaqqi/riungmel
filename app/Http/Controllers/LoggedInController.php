<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoggedIn;

class LoggedInController extends Controller
{
    public function verify(Request $req)
    {
    	$log=LoggedIn::where([['driver','=',$req->driver],['mac_addr','=',$req->mac]])->first();
    	if ($log!=null){
    		LoggedIn::where([['driver','=',$req->driver],['mac_addr','=',$req->mac]])->update(['verified'=>true]);
    		return ['msg'=>'Login diizinkan'];
    	} else return ['msg'=>'Data not found'];
    }

    public function allowFor($driver)
    {
    	$log=LoggedIn::where([['driver','=',$driver],['verified','=',1]])->first();
    	$msg='';
    	if ($log!=null){
    		$msg='Please get out another login';
    	} else $msg='Data not found';
    	return ['msg'=>$msg,'item'=>$log];
    }

    public function del(Request $req)
    {
        LoggedIn::where([['driver','=',$req->driver],['mac_addr','=',$req->mac]])->delete();
        return ['msg'=>'Data has been deleted'];
    }
}
