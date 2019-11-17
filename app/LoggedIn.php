<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoggedIn extends Model
{
    protected $table='logged_in';
    public $timestamps=false;
    public $incrementing=false;
    protected $fillable=['driver','mac_addr','verified'];

    /*public function driver()
    {
    	return this->belongsTo('App\\Driver');
    }*/
}
