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
}
