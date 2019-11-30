<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DelayOnShift extends Model
{
    public $timestamps=false;
    public $incrementing=false;
    protected $table='delay_on_shift';
    protected $fillable=['shift','dt','jeda','start','stop','ket'];
}
