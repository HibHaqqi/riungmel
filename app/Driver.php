<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table='driver';
    protected $primaryKey='no';
    protected $fillable=['no','nrp','nama','password'];
    public $timestamps=false;

    /*public function shifts()
    {
    	return this->hasMany('App\\Shift');
    }

    public function devices()
    {
    	return this->hasMany('App\\LoggedIn');
    }*/
}
