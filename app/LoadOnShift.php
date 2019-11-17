<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoadOnShift extends Model
{
    protected $table='load_on_shift';
    public $timestamps=false;
    public $incrementing=false;
    protected $fillable=['shift','material','distance','exa','on_load','unload','dumped'];
}
