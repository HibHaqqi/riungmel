<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DelayOnShift;

class DelayOnShiftController extends Controller
{
    public function all($shift)
    {
    	return DelayOnShift::where('shift','=',$shift)->orderBy('start','desc')->get();
    }

    public function ubah(Request $req)
    {
        DelayOnShift::where([['shift','=',$req->shift],['jeda','=',$req->jeda],['start','=',$req->start]])
        ->update(['jeda'=>$req->jeda1,'start'=>$req->start1,'stop'=>$req->stop,'ket'=>$req->ket]);
    	return ['msg'=>'Sukses'];
    }
}
