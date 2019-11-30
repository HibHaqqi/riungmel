<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breakdown extends Model
{
    protected $table='breakdown';
    public $timestamps=false;
    public $incrementing=false;
    protected $fillable=['dt','start','stop'];
}
