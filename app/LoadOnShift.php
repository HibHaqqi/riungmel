<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoadOnShift extends Model
{
    protected $table='load_on_shift';
    public $timestamps=false;
    public $incrementing=false;
    protected $fillable=['kode','shift','dt','material','distance','exa','on_load','unload','dumped'];
    public $keyType='string';
}
