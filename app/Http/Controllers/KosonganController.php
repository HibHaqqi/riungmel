<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kosongan;

class KosonganController extends Controller
{
    public function goexa(Request $req)
    {
    	$k=new Kosongan;
    	$k->load=$req->load;
    	$k->shift=$req->shift;
    	$k->dt=$req->dt;
    	$k->distance=$req->distance;
    	$k->start=$req->start;
		$k->stop=$req->stop;
    	$k->save();
    	return $k;
    }
}
