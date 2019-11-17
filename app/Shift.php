<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    public $timestamps=false;
    public $incrementing=false;
    public $keyType='string';
    protected $table='shift';
    protected $primaryKey='kode';
    protected $fillable=['kode','driver','dt','hm_date','start_time','hm_start','hm_stop','stop_time'];

    /*public function driver()
    {
    	return this->belongsTo('App\\Driver');
    }

    public function dumpTruck()
    {
    	return this->belongsTo('App\\UnitDt');
    }

    public function loads()
    {
    	return this->hasMany('App\\LoadOnShift');
    }

    public function pendings()
    {
    	return this->hasMany('App\\DelayOnShift');
    }*/
}
