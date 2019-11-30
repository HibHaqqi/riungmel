<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kosongan extends Model
{
    protected $table='kosongan';
    public $timestamps=false;
    public $incrementing=false;
    protected $fillable=['load','shift','dt','distance','start','stop'];
}
